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
                            <button type="button" data-bs-target="#addTeacherModal" data-bs-toggle="modal"
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
                                <td>
                                    @if ($teacher->image)
                                        <img src="{{ asset($teacher->image) }}" alt="{{ $teacher->name }}" height="60" width="60" />
                                    @else
                                        <img src="{{asset('admin')}}/assets/images/not_found/not_found_img.png" alt="No Image Available" height="60" width="60" />
                                    @endif
                                </td>

                                <td>{{ $teacher->name }}</td>
                                <td>{{ $teacher->department }}</td>
                                <td>{{ $teacher->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="" class="btn btn-success btn-sm" title="Edit">
                                        <i class="fa-solid fa-eye"></i> View
                                    </a>
                                    <a href="#"
                                    data-bs-target="#updateTeacherModal"
                                    data-bs-toggle="modal"
                                    class="btn btn-success btn-sm TeacherUpdateForm"
                                    data-id="{{$teacher->id}}"
                                    data-name="{{$teacher->name}}"
                                    data-department="{{$teacher->department}}"
                                    data-shortDescription="{{$teacher->short_description}}"
                                    data-longDescription="{{$teacher->long_description}}"
                                    data-facebook="{{$teacher->facebook}}"
                                    data-twitter="{{$teacher->twitter}}"
                                    data-github="{{$teacher->github}}"
                                    data-instagram="{{$teacher->instagram}}"
                                    data-status="{{$teacher->status}}"
                                    data-image="{{$teacher->image}}"
                                    title="Edit">
                                    <i class="ri-edit-box-fill"></i> Edit
                                    </a>
                                    <form action="" method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete" onclick="return confirm('Are you sure you want to delete this teacher?');">
                                            <i class="ri-chat-delete-fill"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                            @else
                                <td colspan="6" class="text-danger text-center">Data not found.</td>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.teacher.create')

    <!----- teacher Edit modal-------->
  <div class="modal fade" id="updateTeacherModal" tabindex="-1" role="dialog" aria-hidden="true" data-bs-backdrop="static"
  data-bs-keyboard="false">
  <div class="modal-dialog modal-lg modal-dialog-centered">
      <div class="modal-content">
          <div class="modal-header">
              <h4 class="modal-title text-center" id="myCenterModalLabel">Edit Teacher Form</h4>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <div class="card card-body">

                  <!--form-->
                  <form class="form-horizontal" id="updateTeacherForm" method="POST" enctype="multipart/form-data">
                      @csrf
                      <input type="hidden" id="up_id">
                      <div class="row">
                          <div class="col-md-3"></div>
                          <div class="col-md-9"> <div class="text-danger errorMesssage my-2"> </div></div>
                      </div>
                      <div class="row mb-3">
                          <label for="image" class="col-md-3  col-form-label">Teacher Image</label>
                          <div class="col-md-9">
                              <input type="file" class="form-control" name="image" id="image"
                                  accept="image/*" />
                                  <div id="imagePreview"></div>
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="name" class="col-md-3 col-form-label">Teacher Name</label>
                          <div class="col-md-9">
                              <input type="text" class="form-control" name="name" id="name"
                                  placeholder="Teacher Name" />


                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="depeartment" class="col-md-3 col-form-label">Teacher Depeartment</label>
                          <div class="col-md-9">
                              <input type="text" class="form-control" name="department" id="department"
                                  placeholder="Teacher Depeartment" />
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="shortDescription" class="col-md-3 col-form-label">Teacher Short
                              Description</label>
                          <div class="col-md-9">
                              <textarea class="form-control" id="shortDescription" name="short_description" placeholder="Teacher Description"></textarea>
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
                              <button type="submit" class="btn btn-info updateTeacher">Update Teacher</button>
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
        let id; // declare id variable outside the scope of the function

        $(document).on('click','.TeacherUpdateForm', function() {
            id = $(this).data('id'); // assign value to id variable
            let name = $(this).data('name');
            let department = $(this).data('department');
            let shortDescription = $(this).data('shortdescription');
            let longDescription = $(this).data('longdescription');
            let facebook = $(this).data('facebook');
            let twitter = $(this).data('twitter');
            let instagram = $(this).data('instagram');
            let github = $(this).data('github');
            let status = $(this).data('status');
            let image = $(this).data('image');

            $('#updateTeacherForm input[name="id"]').val(id);
            $('#updateTeacherForm input[name="name"]').val(name);
            $('#updateTeacherForm input[name="department"]').val(department);
            $('#updateTeacherForm textarea[name="short_description"]').val(shortDescription);
            $('#updateTeacherForm textarea[name="long_description"]').val(longDescription);
            $('#updateTeacherForm input[name="facebook"]').val(facebook);
            $('#updateTeacherForm input[name="twitter"]').val(twitter);
            $('#updateTeacherForm input[name="instagram"]').val(instagram);
            $('#updateTeacherForm input[name="github"]').val(github);
            $('#updateTeacherForm input[name="status"][value="' + status + '"]').prop('checked', true);
            $('#imagePreview').html('<img src="' + image + '" alt="teacher-img" height="60" width="60" />');
        });

        $(document).on('click', '.updateTeacher', function(e) {
            e.preventDefault();
            let _token = '{{ csrf_token() }}';
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
            formData.append('image', $('#image')[0].files[0]);
            formData.append('_token', _token);

            $.ajax({
                url: "/teachers/" + id,
                method: "POST",
                data: formData,
                contentType: false,
                processData: false,
                success: function(response) {
                    $('#addTeacherModal').modal('hide');
                    $('#addTeacherForm')[0].reset();
                    $('.table').load(location.href + ' .table');
                },
                error: function(err) {
                    let error = err.responseJSON;
                    $('.errorMesssage').empty();
                    $.each(error.errors, function(index, value) {
                        $('.errorMesssage').append(
                            '<span class="text-danger">' + value + '</span>' +
                            '<br>'
                        );
                    });
                }
            });
        });
    });
</script>






@endsection
