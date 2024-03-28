@extends('admin.layout.master')
@section('title')
    Blog  Manage
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="header-title float-start mt-2"> ALL Blog  Information</h4>
                            <a href="{{route('blogs.create')}}"><button type="button" data-bs-target="#addCategoryModal" data-bs-toggle="modal"
                                class="btn btn-light float-end">Add New Blog</button></a>
                        </div>
                    </div>
                    <hr />
                    <p class="text-muted font-14">{{ Session::get('success') }}</p>
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Image</th>
                                <th>Blog Category</th>
                                <th>Title</th>
                                <th>Created  By</th>
                                <th>Created Date</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @if ($blogs->count() > 0)
                            @foreach ($blogs as $index => $blog)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        @if ($blog->image)
                                            <img src="{{ asset($blog->image) }}" alt="blog-img" height="60" width="60" />
                                        @else
                                            <img src="{{asset('admin')}}/assets/images/not_found/not_found_img.png" alt="No Image Available" height="60" width="60" />
                                        @endif
                                    </td>
                                    <td>{{ $blog->BlogCategory->name }}</td>
                                    <td>{{ $blog->title }}</td>
                                    <td>{{ $blog->created_by }}</td>
                                    <td>{{ date('F j, Y', strtotime($blog->creating_date)) }}</td>
                                    <td>
                                        {{$blog->status==1?'Published':'Unpublished'}}
                                    </td>
                                    <td>
                                        <a href="{{route('blogs.show',$blog->id)}}" class="btn btn-success btn-sm" title="Edit">
                                            <i class="fa-solid fa-eye"></i> View
                                        </a>
                                        <a href="{{route('blogs.edit',$blog->id)}}"
                                        class="btn btn-success btn-sm TeacherUpdateForm"
                                        title="Edit">
                                        <i class="ri-edit-box-fill"></i> Edit
                                        </a>
                                        <form action="{{route('blogs.destroy',$blog->id)}}" method="POST" style="display: inline;">
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
                                <td colspan="8" class="text-danger text-center">No data found </td>
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




