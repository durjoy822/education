@extends('admin.layout.master')
@section('title') Crouses Create @endsection
@section('body')

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Crouses form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal"  action="{{route('crouses.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="image" class="col-md-3  col-form-label">Crouse Image</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="image" id="image"
                                    accept="image/*" />
                                    <div class="text-danger">@error('image')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="depeartment" class="col-md-3 col-form-label">Crouse Category</label>
                            <div class="col-md-9">
                                <select class="form-select" name="category_id" aria-label="Default select example">
                                    <option selected disabled>---Select Crouse Category---</option>
                                    @foreach ($crouseCats as $crouseCat )
                                    <option value="{{$crouseCat->id}}">{{$crouseCat->name}}</option>
                                    @endforeach
                                  </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="depeartment" class="col-md-3 col-form-label">Crouse Teacher</label>
                            <div class="col-md-9">
                                <select class="form-select" name="teacher_id" aria-label="Default select example">
                                    <option selected disabled>---Select Teacher---</option>
                                    @foreach ($teachers as $teacher )
                                    <option value="{{$teacher->id}}">{{$teacher->name}}</option>
                                    @endforeach

                                  </select>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Crouse Title</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="crouse_title" id="name"
                                    placeholder="Crouse Name" />
                                    <div class="text-danger">@error('name')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="price" class="col-md-3 col-form-label">Crouse Price</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="price" id="price"
                                    placeholder="Crouse Price" />
                                    <div class="text-danger">@error('price')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="depeartment" class="col-md-3 col-form-label">Crouse Validation</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="crouse_validation" id="name"
                                placeholder="Crouse Validation" />
                                <div class="text-danger">@error('crouse_validation')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="depeartment" class="col-md-3 col-form-label">Class size</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="class_size" id="name"
                                placeholder="Class Size " />
                                <div class="text-danger">@error('class_size')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="depeartment" class="col-md-3 col-form-label">Class Duration</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="class_duration" id="name"
                                placeholder="Class Duration " />
                                <div class="text-danger">@error('class_duration')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="depeartment" class="col-md-3 col-form-label">Total Seat</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="total_seat" id="name"
                                placeholder="Total Seat " />
                                <div class="text-danger">@error('class_duration')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="shortDescription" class="col-md-3 col-form-label">Crouse Short
                                Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control"  name="short_description" placeholder="Crouse Short Description"></textarea>
                                <div class="text-danger">@error('short_description')  {{$message}} @enderror</div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="longDescription" class="col-md-3 col-form-label">Crouse Long
                                Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="summernote" name="long_description" placeholder="Teacher Description"></textarea>
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
                                <button type="submit" class="btn btn-info addTeacher">Create New Crouse</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
