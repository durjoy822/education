@extends('admin.layout.master')
@section('title') Category Create @endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Category form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal"  action="{{route('crouseCategory.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="image" class="col-md-3  col-form-label">Category Image</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="image" id="image"
                                    accept="image/*" />
                                    <div class="text-danger">@error('image')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Crouse Category Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Category Name" />
                                    <div class="text-danger">@error('name')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="justify-content-end row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-info addTeacher">Create New Category</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
