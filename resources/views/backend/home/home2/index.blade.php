@extends('backend.layouts.app')

@section('content')
    
<div class="content-wrapper">
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>{{ ($page_title) }}</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">{{ ($page_title) }}</li>
            </ol>
          </div>
        </div>
      </div>
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row mt-4">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card rounded-20">
                    <div class="card-header bg-card-head" style="border-radius:15px 15px 0px 0px;">
                        <div class="row">
                            <div class="col-6 mt-1">
                                <span class="tx-bold text-lg text-white" style="font-size:20px;">
                                <i class="far fa-user text-lg"></i> &nbsp;
                                </span>
                            </div>
    
                            {{-- @can('tag-create') --}}
                            <div class="col-6 d-flex justify-content-end">
                                <a href="{{ route('homes2.create') }}" class="btn btn-sm btn-info me-2" style="padding: 0.4rem;">
                                    <i class="fa fa-plus"></i>
                                    Add New
                                </a>
                            </div>
                            {{-- @endcan --}}
                        </div>
                    </div>
    
                    <div class="w-100 position-relative overflow-hidden">
                        <div class="card-body p-4">
                            <div class="table-responsive rounded-2">
                                <table id="dataTable" class="table border text-nowrap customize-table mb-0 align-middle">
                                  <thead class="text-dark fs-4">
                                    <tr>
                                      <th><h6 class="fs-4 fw-semibold mb-0">No</h6></th>
                                      <th><h6 class="fs-4 fw-semibold mb-0">Title</h6></th>
                                      <th><h6 class="fs-4 fw-semibold mb-0">Sub Title</h6></th>
                                      <th><h6 class="fs-4 fw-semibold mb-0">Image</h6></th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    @foreach ($homes as $home)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $home->title ?? '' }}</td>
                                        <td>{{ $home->sub_title ?? '' }}</td>
                                        <td>
                                          <img src="{{ asset('assets/images/home2/'.($home->image ?? 'user.jpg')) }}" width="39"height="39" class="rounded-circle me-n2 card-hover border border-2 border-white">
                                        </td>
                                    </tr>
                                    @endforeach
                                  </tbody>
                                </table>
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </section>
</div>
@endsection
