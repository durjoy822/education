  <!----- teacher create modal-------->
  <div class="modal fade" id="addTeacherModal" tabindex="-1" role="dialog" aria-hidden="true" data-bs-backdrop="static"
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
                      <div class="row">
                          <div class="col-md-3"></div>
                          <div class="col-md-9"> <div class="text-danger errorMesssage my-2"> </div></div>
                      </div>
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


                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="depeartment" class="col-md-3 col-form-label">Teacher Depeartment</label>
                          <div class="col-md-9">
                              <input type="text" class="form-control" name="department" id="department"
                                  placeholder="Teacher Depeartment" />
                                  {{-- <div class="text-danger errorMesssage"> </div> --}}
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="shortDescription" class="col-md-3 col-form-label">Teacher Short
                              Description</label>
                          <div class="col-md-9">
                              <textarea class="form-control" id="shortDescription" name="short_description" placeholder="Teacher Description"></textarea>
                              {{-- <div class="text-danger errorMesssage"> </div> --}}
                          </div>
                      </div>
                      <div class="row mb-3">
                          <label for="longDescription" class="col-md-3 col-form-label">Teacher Long
                              Description</label>
                          <div class="col-md-9">
                              <textarea class="form-control" id="longDescription" name="long_description" placeholder="Teacher Description"></textarea>
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
              </div>
          </div>
      </div>
  </div>
</div>

<script>
  $(document).ready(function() {
      $(document).on('click', '.addTeacher', function(e) {
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
              url: "{{ route('teachers.store') }}",
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
                   '<br>');
           });
       }
          });
      });
  });
</script>
