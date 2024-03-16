@extends('admin.layout.master')
@section('title')
    Teacher Manage
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="header-title float-start mt-2">All Teachers Information</h4>
                            <button type="button" data-bs-target="#addCategoryModal" data-bs-toggle="modal"
                                class="btn btn-light float-end">Add New Teacher</button>
                        </div>
                    </div>
                    <hr />
                    <p class="text-muted font-14">{{ Session::get('success') }}</p>
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Image</th>
                                <th>Name</th>
                                <th>Department</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($teachers->count() > 0)
                                @foreach ($teachers as $index => $teacher)
                                    <tr>
                                        <td>{{ $index + 1 }}</td>
                                        <td><img src="{{ asset($teacher->image) }}" alt="" height="40"
                                                width="60" /></td>
                                        <td>{{ $teacher->name }}</td>
                                        <td>{{ $teacher->department }}</td>
                                        <td>{{ $teacher->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                        <td>
                                            <a href="{{ route('teachers.edit', $teacher->id) }}"><button type="button"
                                                    data-bs-target="#teacherEditBtn" data-bs-toggle="modal"
                                                    class="btn btn-success btn-sm teacherEditBtn" title="Edit"
                                                    data-id="{{ $teacher->id }}">
                                                    <i class="ri-edit-box-fill"></i>
                                                </button></a>
                                            <a href="" class="btn btn-danger btn-sm" title="Delete"
                                                onclick="return confirm('Ary you sure to delete this..');">
                                                <i class="ri-chat-delete-fill"></i>
                                            </a>
                                        </td>
                                    </tr>
                                @endforeach
                            @else
                                <td>Data not found.</td>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    {{-- @include('admin.teacher.create') --}}

    <!----- teacher create modal-------->
    <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-hidden="true" data-bs-backdrop="static"
        data-bs-keyboard="false">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="myCenterModalLabel">Add Teacher Form</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card card-body">
                        <!--form-->
                        <form class="form-horizontal" id="addTeacherForm" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="row mb-3">
                                <label for="image" class="col-md-3  col-form-label">Teacher Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="image" id="image"
                                        accept="image/*" />
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="name" class="col-md-3 col-form-label">Teacher Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="name" id="name"
                                        placeholder="Teacher Name" />
                                    <div class="text-danger errorMesssage"> </div>

                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="depeartment" class="col-md-3 col-form-label">Teacher Depeartment</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="department" id="depeartment"
                                        placeholder="Teacher Depeartment" />
                                    <div class="text-danger">
                                        @error('department')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="shortDescription" class="col-md-3 col-form-label">Teacher Short
                                    Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="shortDescription" name="short_description" placeholder="Teacher Description"></textarea>
                                    <div class="text-danger">
                                        @error('short_description')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="longDescription" class="col-md-3 col-form-label">Teacher Long
                                    Description</label>
                                <div class="col-md-9">
                                    <textarea class="form-control" id="longDescription" name="long_description" placeholder="Teacher Description"></textarea>
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(document).ready(function() {
            $(document).on('click', '.addTeacher', function(e) {
                e.preventDefault();
                let formData = new FormData();
                formData.append('name', $('#name').val());
                formData.append('department', $('#department').val());
                formData.append('shortDescription', $('#shortDescription').val());
                formData.append('longDescription', $('#longDescription').val());
                formData.append('facebook', $('#facebook').val());
                formData.append('twitter', $('#twitter').val());
                formData.append('instagram', $('#instagram').val());
                formData.append('github', $('#github').val());
                formData.append('status', $('input[name="status"]:checked').val());
                formData.append('image', $('#image')[0].files[0]); // Get the first file

                $.ajax({
                    url: "{{ route('teachers.create') }}",
                    method: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(response) {
                        // Assuming response contains some success message
                        alert("Teacher added successfully!");
                        // You might want to redirect or do something else here
                    },
                    error: function(err) {
                        let error = err.response.JSON;
                        $.each(error.errors, function(index, value) {
                            $('.errorMessage').append('<span class="text-danger">' + value + '</span>');
                        });
                    }
                });
            });
        });
    </script>


@endsection
