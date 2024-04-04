@extends('admin.layout.master')
@section('title')
    Terms & condition Manage
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="header-title float-start mt-2">All terms & conditon Information</h4>
                            <a href="{{route('terms.create')}}"><button type="button"class="btn btn-light float-end">Add New Terms</button></a>
                        </div>
                    </div>
                    <hr />
                    <p class="text-muted font-14">{{ Session::get('success') }}</p>
                    <table id="datatable-buttons" class="table table-striped dt-responsive  w-100">
                        <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Terms</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @if ($terms->count() > 0)
                            @foreach ($terms as $index => $term)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{!! $term->terms !!}</td>
                                    <td>
                                        <a href="{{route('terms.edit',$term->id)}}"
                                            class="btn btn-success btn-sm TeacherUpdateForm"
                                            title="Edit">
                                            <i class="ri-edit-box-fill"></i> Edit
                                            </a>
                                        <form action="{{route('terms.destroy',$term->id)}}" method="POST" style="display: inline;">
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



