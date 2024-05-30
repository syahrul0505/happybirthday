@extends('backend.layouts.app')

@section('content')
    
<div class="content-wrapper">
    <section class="content-header">
        <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <div class="card-body">
                <form action="{{ route('homes2.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group mb-3">
                                <label for="title" class="form-label">Title</label>
                                <input type="text" name="title" value="{{ old('title') }}" class="form-control" placeholder="title" id="title" aria-describedby="title">
                            </div>
                            @error('title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group mb-3">
                                <label for="sub_title" class="form-label">Sub Title</label>
                                <input type="text" name="sub_title" value="{{ old('sub_title') }}" class="form-control" placeholder="sub_title" id="sub_title" aria-describedby="sub_title">
                            </div>
                            @error('sub_title')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-lg-4">
                            <div class="form-group"style="text-align: left">
                                <label for="form-file" class="form-label">Image</label>
                                <input type="file" name="image" class="form-control" id="form-file">
                            </div>
                            @error('image')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                    <div class="" style="border-radius:0px 0px 15px 15px;">
                        <a class="btn btn-danger" href="{{ route('homes2.index') }}">
                            Back
                        </a>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
