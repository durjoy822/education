  <!----- teacher create modal-------->
  <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center" id="myCenterModalLabel">Add Teacher Form</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="card card-body">
                    <form class="form-horizontal" id="addTeacherForm" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="inputEmail39" class="col-md-3  col-form-label">Teacher Image</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="image" id="inputEmail39" accept="image/*"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-md-3 col-form-label">Teacher Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" id="inputEmail3" placeholder="Teacher Name"/>
                                <div class="text-danger">@error('name') {{$message}} @enderror</div>

                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-md-3 col-form-label">Teacher Depeartment</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="department" id="inputEmail3" placeholder="Teacher Depeartment"/>
                                <div class="text-danger">@error('department') {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-md-3 col-form-label">Teacher Short Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="inputPassword3" name="short_description" placeholder="Teacher Description"></textarea>
                                <div class="text-danger">@error('short_description') {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputPassword3" class="col-md-3 col-form-label">Teacher Long  Description</label>
                            <div class="col-md-9">
                                <textarea class="form-control" id="inputPassword3" name="long_description" placeholder="Teacher Description"></textarea>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-md-3 col-form-label">Facebook</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="facebook" id="inputEmail3" placeholder="Facebook"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-md-3 col-form-label">Twitter</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="twitter" id="inputEmail3" placeholder="Twitter"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-md-3 col-form-label">Github</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="github" id="inputEmail3" placeholder="Github"/>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="inputEmail3" class="col-md-3 col-form-label">Instagram</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="instagram" id="inputEmail3" placeholder="Instagram"/>
                            </div>
                        </div>
                        <div class="row mb-3 justify-content-end">
                            <label class="col-md-3">Publication Status</label>
                            <div class="col-md-9">
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="customRadio3" name="status" value="1" checked class="form-check-input"/>
                                    <label class="form-check-label" for="customRadio3">Published</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="customRadio4" name="status" value="0" class="form-check-input"/>
                                    <label class="form-check-label" for="customRadio4">Unpublished</label>
                                </div>
                            </div>
                        </div>
                        <div class="justify-content-end row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-info">Create New Teacher</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
