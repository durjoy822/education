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
                            <a href="{{route('teachers.create')}}"><button type="button"
                                class="btn btn-light float-end">Add New Teacher</button></a>
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
                                    <a href="{{route('teachers.show',$teacher->id)}}" class="btn btn-success btn-sm" title="Edit">
                                        <i class="fa-solid fa-eye"></i> View
                                    </a>
                                    <a href="{{route('teachers.edit',$teacher->id)}}"
                                    class="btn btn-success btn-sm TeacherUpdateForm"
                                    title="Edit">
                                    <i class="ri-edit-box-fill"></i> Edit
                                    </a>
                                    <form action="{{route('teachers.destroy',$teacher->id)}}" method="POST" style="display: inline;">
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
