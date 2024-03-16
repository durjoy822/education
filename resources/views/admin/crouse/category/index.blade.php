@extends('admin.layout.master')
@section('title')
    Crouse Cateogry Manage
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="header-title float-start mt-2"> Crouse Category info</h4>
                            <button type="button" data-bs-target="#addCategoryModal" data-bs-toggle="modal"
                                class="btn btn-light float-end">Add New Category</button>
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
                                <th>Action</th>
                            </tr>
                        </thead>
                        @if ($crouseCats->count() > 0)
                            @foreach ($crouseCats as $index => $crouseCat)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        @if ($crouseCat->image)
                                            <img src="{{ asset($crouseCat->image) }}" alt="{{ $crouseCat->name }}" height="60" width="60" />
                                        @else
                                            <img src="{{asset('admin')}}/assets/images/not_found/not_found_img.png" alt="No Image Available" height="60" width="60" />
                                        @endif
                                    </td>
                                    <td>{{ $crouseCat->name }}</td>
                                    <td>
                                        <button type="button" data-bs-target="#updateCategoryModal" data-bs-toggle="modal"
                                            class="btn btn-success btn-sm update_category_form" title="Edit"
                                            data-id="{{ $crouseCat->id }}" data-name="{{ $crouseCat->name }}"
                                            data-image="{{ $crouseCat->image }}">
                                            <i class="ri-edit-box-fill"></i>
                                        </button>
                                        <a href="" class="btn btn-danger btn-sm deleteCrouseCat"
                                         data-id="{{ $crouseCat->id }}"  title="Delete"
                                            {{-- onclick="return confirm('Ary you sure to delete this..');" --}}
                                            >
                                            <i class="ri-chat-delete-fill"></i>
                                        </a>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4" class="text-danger text-center">No data found </td>
                            </tr>
                        @endif
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    @include('admin.crouse.category.create')
    @include('admin.crouse.category.edit')




<!-----------Delete crouse category data ------------->
<script>
    $(document).ready(function() {
        let csrfToken = $('meta[name="csrf-token"]').attr('content');

        $(document).on('click', '.deleteCrouseCat', function(e) {
            e.preventDefault();
            let category_id = $(this).data('id');
            if (confirm('Are you sure you want to delete this row?')) {
                $.ajax({
                    url: "/crouseCategory/" + category_id,
                    type: 'DELETE',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken
                    },
                    success: function(res) {
                        if (res.status == 'success') {
                            $('.table').load(location.href + ' .table');
                        }
                    },
                });
            }
        });
    });
</script>





@endsection



