@extends('admin.layout.master')
@section('title') Category Create @endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Category form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal"  action="{{route('headers.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Select Header Page</label>
                            <div class="col-md-9">
                                <select class="form-select" name="page_name" aria-label="Default select example">
                                    <option selected disabled>---Select Header Page---</option>
                                    <option value="home_page">Home page</option>
                                    <option value="about_page">About page</option>
                                    <option value="crouse_page">All crouse page</option>
                                    <option value="crouse_details_page">Crouse details page</option>
                                    <option value="teacher_page">All teacher page</option>
                                    <option value="teacher_details_page">Teacher details page</option>
                                    <option value="blog_page">All blog page</option>
                                    <option value="blog_details_page">Blog Details page</option>
                                    <option value="contact_page">Contact page</option>


                                  </select>
                                    <div class="text-danger">@error('page_name')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-md-3  col-form-label">Header Image</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="image" id="image"
                                    accept="image/*" />
                                    <div class="text-danger">@error('image')  {{$message}} @enderror</div>
                            </div>
                        </div>

                        <div class="justify-content-end row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-info addTeacher">Create New Header </button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
