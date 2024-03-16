 <!---------------- teacher create modal---------------------->

 <div class="modal fade" id="addCategoryModal" tabindex="-1" role="dialog" aria-hidden="true" data-bs-backdrop="static"
 data-bs-keyboard="false">
 <div class="modal-dialog modal-lg modal-dialog-centered">
     <div class="modal-content">
         <div class="modal-header">
             <h4 class="modal-title text-center" id="myCenterModalLabel">Crouse Category Add Form</h4>
             <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
         </div>
         <div class="modal-body">
             <div class="card card-body">
                 <form class="form-horizontal" id="addCategoryForm" action="" method="POST"
                     enctype="multipart/form-data">
                     @csrf
                     <div class="row mb-3">
                         <label for="image" class="col-md-3  col-form-label">Category Image</label>
                         <div class="col-md-9">
                             <input type="file" class="form-control" name="image" id="image"
                                 accept="image/*" />
                             <div class="errorMsgContainer"></div>
                         </div>
                     </div>
                     <div class="row mb-3">
                         <label for="name" class="col-md-3 col-form-label">Category Name</label>
                         <div class="col-md-9">
                             <input type="text" class="form-control" name="name" id="name"
                                 placeholder="Category Name" />
                             <div class="errorMsgContainer"></div>

                         </div>
                     </div>
                     <div class="justify-content-end row">
                         <div class="col-md-9">
                             <button type="submit" class="btn btn-info  add_category">Create New Category</button>
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
     $(document).on('click', '.add_category', function(e) {
         e.preventDefault();
         let name = $('#name').val();
         let image = $('#image')[0].files[0];
         let _token = '{{ csrf_token() }}';
         let formData = new FormData();
         formData.append('name', name);
         formData.append('image', image);
         formData.append('_token', _token);
         $.ajax({
             url: "{{ route('crouseCategory.store') }}",
             method: 'post',
             data: formData,
             contentType: false,
             processData: false,
             success: function(res) {
                 // Handle success response
                 if (res.status == 'success') {
                     $('#addCategoryModal').modal('hide');
                     $('#addCategoryForm')[0].reset();
                     $('.table').load(location.href + ' .table');    //  ' .table'space required
                 }
             },
             error: function(err) {
                 // Handle error response
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
 });
</script>
