@extends('backend.layouts.app')

@section('content')
    
<div class="content-wrapper">
    <section class="content-header">
        <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title"></h3>
            </div>
            <div class="card-body">
                <form action="{{ route('homes4.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="name" id="name" aria-describedby="name">
                            </div>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group mb-3">
                                <label for="comment" class="form-label">Comment</label>
                                <input type="text" name="comment" value="{{ old('comment') }}" class="form-control" placeholder="comment" id="comment" aria-describedby="comment">
                            </div>
                            @error('comment')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                    </div>
                    <div class="" style="border-radius:0px 0px 15px 15px;">
                        <a class="btn btn-danger" href="{{ route('homes4.index') }}">
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
