
    <!---------------- teacher update  modal---------------------->

    <div class="modal fade" id="updateCategoryModal" tabindex="-1" role="dialog" aria-hidden="true" data-bs-backdrop="static" data-bs-keyboard="false">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-center" id="myCenterModalLabel">Crouse Category Edit Form</h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="card card-body">
                        <form class="form-horizontal" id="updateCategoryForm" action="" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{$method="PUT"}}
                            <input type="hidden" id="up_id">
                            <div class="row mb-3">
                                <label for="up_image" class="col-md-3  col-form-label">Category Image</label>
                                <div class="col-md-9">
                                    <input type="file" class="form-control" name="up_image" id="up_image" accept="image/*" />
                                    <div id="imagePreview" class="mt-1"></div>
                                    <div class="errorMsgContainer"></div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <label for="up_name" class="col-md-3 col-form-label">Category Name</label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="up_name" id="up_name" placeholder="Category Name" />
                                    <div class="errorMsgContainer"></div>
                                </div>
                            </div>
                            <div class="justify-content-end row">
                                <div class="col-md-9">
                                    <button type="submit" class="btn btn-info update_category">Update Category</button>
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
    let csrfToken = $('meta[name="csrf-token"]').attr('content');

    $(document).on('click', '.update_category', function(e) {
        e.preventDefault();

        let up_id = $('#up_id').val();
        let up_name = $('#up_name').val();
        let up_image = $('#up_image')[0].files[0];

        let formData = new FormData();
        formData.append('up_name', up_name);
        formData.append('up_image', up_image);
        formData.append('_token', csrfToken); // Use fetched CSRF token value
        formData.append('_method', 'PUT');

        $.ajax({
            url: "/crouseCategory/" + up_id,
            method: 'POST', // Change method to POST
            headers: {
                'X-CSRF-TOKEN': csrfToken // Include CSRF token in request headers
            },
            data: formData,
            contentType: false,
            processData: false,
            success: function(res) {
                if (res.status == 'success') {
                    $('#updateCategoryModal').modal('hide');
                    $('#updateCategoryForm')[0].reset();
                    $('.table').load(location.href + ' .table');
                }
            },
            error: function(err) {
                let error = err.responseJSON;
                $('.errorMsgContainer').empty();
                $.each(error.errors, function(index, value) {
                    $('.errorMsgContainer').append(
                        '<span class="text-danger">' + value + '</span>' +
                        '<br>');
                });
            }
        });
    });

    $(document).on('click', '.update_category_form', function() {
        let id = $(this).data('id');
        let name = $(this).data('name');
        let image = $(this).data('image');

        $('#up_id').val(id);
        $('#up_name').val(name);
        $('#imagePreview').html('<img src="' + image + '" alt="category-img" height="60" width="60" />');
    });
});

 </script>
