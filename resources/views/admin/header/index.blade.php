@extends('admin.layout.master')
@section('title')
    Header Manage
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="header-title float-start mt-2">Page Header Information</h4>
                            <a href="{{route('headers.create')}}"><button type="button" data-bs-target="#addCategoryModal" data-bs-toggle="modal"
                                class="btn btn-light float-end">Add New Header</button></a>
                        </div>
                    </div>
                    <hr />
                    <p class="text-muted font-14">{{ Session::get('success') }}</p>
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Image</th>
                                <th>Page name</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @if ($headers->count() > 0)
                            @foreach ($headers as $index => $header)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>
                                        @if ($header->image)
                                            <img src="{{ asset($header->image) }}" alt="{{ $header->page_name }}" height="60" width="60" />
                                        @else
                                            <img src="{{asset('admin')}}/assets/images/not_found/not_found_img.png" alt="No Image Available" height="60" width="60" />
                                        @endif
                                    </td>
                                    <td>{{ $header->page_name }}</td>
                                    <td>
                                        <a href="{{route('headers.edit',$header->id)}}"
                                        class="btn btn-success btn-sm TeacherUpdateForm"
                                        title="Edit">
                                        <i class="ri-edit-box-fill"></i> Edit
                                        </a>
                                        <form action="{{route('headers.destroy',$header->id)}}" method="POST" style="display: inline;">
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



