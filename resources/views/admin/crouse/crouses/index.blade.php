@extends('admin.layout.master')
@section('title')
    Crouses Manage
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="header-title float-start mt-2">All Crouses Information</h4>
                            <a href="{{route('crouses.create')}}"><button type="button"
                                class="btn btn-light float-end">Add New Crouse</button></a>
                        </div>
                    </div>
                    <hr />
                    <p class="text-muted font-14">{{ Session::get('success') }}</p>
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>teacher</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($crouses->count() > 0)
                            @foreach ($crouses as $index => $crouse)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>
                                    @if ($crouse->image)
                                        <img src="{{ asset($crouse->image) }}" alt="" height="60" width="60" />
                                    @else
                                        <img src="{{asset('admin')}}/assets/images/not_found/not_found_img.png" alt="No Image Available" height="60" width="60" />
                                    @endif
                                </td>

                                <td>{{ $crouse->Category->name }} </td>
                                <td>{{ $crouse->Teacher->name }}</td>
                                <td>{{ $crouse->status == 1 ? 'Published' : 'Unpublished' }}</td>
                                <td>
                                    <a href="{{route('crouses.show',$crouse->id)}}" class="btn btn-success btn-sm" title="Edit">
                                        <i class="fa-solid fa-eye"></i> View
                                    </a>
                                    <a href="{{route('crouses.edit',$crouse->id)}}"
                                    class="btn btn-success btn-sm TeacherUpdateForm"
                                    title="Edit">
                                    <i class="ri-edit-box-fill"></i> Edit
                                    </a>
                                    <form action="{{route('crouses.destroy',$crouse->id)}}" method="POST" style="display: inline;">
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
@endsection
