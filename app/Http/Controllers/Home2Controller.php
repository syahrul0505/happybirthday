<?php

namespace App\Http\Controllers;

use App\Models\Home2;
use Illuminate\Http\Request;

class Home2Controller extends Controller
{
    public function index()
    {
        $data['page_title'] = 'Home';
        $data['homes'] = Home2::orderby('id', 'asc')->get();
        
        return view('backend.home.home2.index', $data); 
    }

    public function create()
    {
        $data['page_title'] = 'Create Home';
        $data['home'] = Home2::get();

        return view('backend.home.home2.create',$data);
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $validateData = $request->validate([
            'title' => 'nullable',
            'sub_title' => 'nullable',
        ]);
        try {
            $home = new Home2();
            $home->title = $validateData['title'];
            $home->sub_title = $validateData['sub_title'];

            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $name = time() . '.' . $image->getClientOriginalExtension();
                $destinationPath = public_path('assets/images/home2/');
                $image->move($destinationPath, $name);
                $home->image = $name;
            }

            $home->save();

            return redirect()->route('homes2.index')->with(['success' => 'home added successfully!']);
        } catch (\Throwable $th) {
            return redirect()->back()->with(['failed' => $th->getMessage()]);
        }
    }

    public function edit($id)
    {
        $data['page_title'] = 'Edit Material';
        $data['material'] = Material::find($id);

        return view('master-data.material.edit',$data);
    }

    public function show(){
        
    }

    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'code' => 'required',
            'name' => 'required',
            'unit' => 'required',
            'minimal_stock' => 'required',
            'description' => 'nullable',
        ]);

        try {
            $material = Material::findOrFail($id);
            $material->code = $validateData['code'];
            $material->name = $validateData['name'];
            $material->unit = $validateData['unit'];
            $material->minimal_stock = $validateData['minimal_stock'];
            $material->description = $validateData['description'];
            

            $material->save();

            $newHistoryLog = new HistoryLog();
            $newHistoryLog->datetime = date('Y-m-d H:i:s');
            $newHistoryLog->type = 'Edit';
            $newHistoryLog->menu = 'Edit Material '.$request->name;
            $newHistoryLog->user_id = auth()->user()->id;
            $newHistoryLog->save();

            return redirect()->route('master-data.materials.index')->with(['success' => 'Material edited successfully!']);
        } catch (\Throwable $th) {
            return redirect()->route('master-data.materials.index')->with(['failed' => 'Material edited Failed! '. $th->getMessage()]);
        }
    }

    public function destroy($id)
    {
        DB::transaction(function () use ($id) {
            $role = Material::findOrFail($id);
            $role->delete();

            $newHistoryLog = new HistoryLog();
            $newHistoryLog->datetime = date('Y-m-d H:i:s');
            $newHistoryLog->type = 'Delete';
            $newHistoryLog->menu = 'Delete Bahan Baku '.$role->nama;
            $newHistoryLog->user_id = auth()->user()->id;
            $newHistoryLog->save();
        });
        
        Session::flash('success', 'Bahan Baku deleted successfully!');
        return response()->json(['status' => '200']);
    }
}
