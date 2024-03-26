@extends('admin.layout.master')
@section('title') Teacher Create @endsection
@section('body')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Teacher form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal"  action="{{route('teachers.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="image" class="col-md-3  col-form-label">Teacher Image</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="image" id="image"
                                    accept="image/*" />
                                    <div class="text-danger">@error('image')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Teacher Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Teacher Name" />
                                    <div class="text-danger">@error('name')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        {{-- <div class="row mb-3">
                            <label for="depeartment" class="col-md-3 col-form-label">Teacher Depeartment</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="department" id="department"
                                    placeholder="Teacher Depeartment" />
                                    <div class="text-danger">@error('department') {{$message}} @enderror</div>
                            </div>
                        </div> --}}
                        <div class="row mb-3">
                            <label for="depeartment" class="col-md-3 col-form-label">Teacher Department</label>
                            <div class="col-md-9">
                                <select class="form-select" name="department" aria-label="Default select example">
                                    <option selected disabled>---Select Crouse Category---</option>
                                    @foreach ($crouseCats as $crouseCat )
                                    <option value="{{$crouseCat->id}}">{{$crouseCat->name}}</option>
                                    @endforeach

                                  </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="shortDescription" class="col-md-3 col-form-label">Teacher Short
                                Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control"  name="short_description" placeholder="Teacher Description"></textarea>
                                <div class="text-danger">@error('short_description')  {{$message}} @enderror</div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="longDescription" class="col-md-3 col-form-label">Teacher Long
                                Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="summernote" name="long_description" placeholder="Teacher Description"></textarea>
                                {{-- <div class="text-danger errorMesssage"> </div> --}}
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="facebook" class="col-md-3 col-form-label">Facebook</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="facebook" id="facebook"
                                    placeholder="Facebook" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="twitter" class="col-md-3 col-form-label">Twitter</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="twitter" id="twitter"
                                    placeholder="Twitter" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="github" class="col-md-3 col-form-label">Github</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="github" id="github"
                                    placeholder="Github" />
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="instagram" class="col-md-3 col-form-label">Instagram</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="instagram" id="instagram"
                                    placeholder="Instagram" />
                            </div>
                        </div>
                        <div class="row mb-3 justify-content-end">
                            <label class="col-md-3">Publication Status</label>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="status_published" name="status" value="1"
                                        checked class="form-check-input" />
                                    <label class="form-check-label" for="status_published">Published</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="status_unpublished" name="status" value="0"
                                        class="form-check-input" />
                                    <label class="form-check-label" for="status_unpublished">Unpublished</label>
                                </div>
                            </div>
                        </div>
                        <div class="justify-content-end row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-info addTeacher">Create New Teacher</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
