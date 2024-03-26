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
                            <a href="{{route('crouseCategory.create')}}"><button type="button" data-bs-target="#addCategoryModal" data-bs-toggle="modal"
                                class="btn btn-light float-end">Add New Category</button></a>
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
                                        <a href="{{route('crouseCategory.edit',$crouseCat->id)}}"
                                        class="btn btn-success btn-sm TeacherUpdateForm"
                                        title="Edit">
                                        <i class="ri-edit-box-fill"></i> Edit
                                        </a>
                                        <form action="{{route('crouseCategory.destroy',$crouseCat->id)}}" method="POST" style="display: inline;">
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

@endsection



