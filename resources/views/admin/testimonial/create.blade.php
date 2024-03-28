@extends('admin.layout.master')
@section('title') Testimonial Create @endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Testimonial form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal"  action="{{route('testimonials.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="image" class="col-md-3  col-form-label">Background Image</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="image" id="image"
                                    accept="image/*" />
                                    <div class="text-danger">@error('image')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Students Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Students Name" />
                                    <div class="text-danger">@error('name')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Students Job Possition</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="job_position" id="name"
                                    placeholder="Students Job Possition" />
                                    <div class="text-danger">@error('job_position')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Testimonial Content</label>
                            <div class="col-md-9">
                                <textarea type="text" class="form-control" name="content" cols="4" rows="4"
                                    placeholder="Testimonial Content" ></textarea>
                                    <div class="text-danger">@error('content')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="justify-content-end row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-info addTeacher">Create New Testimonial</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
