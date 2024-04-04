@extends('admin.layout.master')
@section('title') About Create @endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add About form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal"  action="{{route('abouts.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="image" class="col-md-3  col-form-label"> Image</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="image" id="image"
                                    accept="image/*" />
                                    <div class="text-danger">@error('image') {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Tour video link</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="video_link" id="name"
                                    placeholder="Tour video link" />
                                    <div class="text-danger">@error('video_link')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">About </label>
                            <div class="col-md-9">
                                <textarea class="form-control"  id="summernote" name="about" cols="3" rows="3" placeholder="Long Description" ></textarea>
                                <div class="text-danger">@error('about')  {{$message}} @enderror</div>
                            </div>

                        </div>
                        <div class="justify-content-end row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-info addTeacher">Create New About</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
