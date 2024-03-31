@extends('admin.layout.master')
@section('title')
    Contact Manage
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="header-title float-start mt-2"> Contact Information</h4>
                            @if($contacts->count()!=1)
                            <a href="{{route('contacts.create')}}"><button type="button" data-bs-target="#addCategoryModal" data-bs-toggle="modal"
                                class="btn btn-light float-end">Add Contact info</button></a>
                                @endif
                        </div>
                    </div>
                    <hr />
                    <p class="text-muted font-14">{{ Session::get('success') }}</p>
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Email</th>
                                <th>First Phone</th>
                                <th>Secound Phone</th>
                                <th>facebook</th>
                                <th>twitter</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @if ($contacts->count() > 0)
                            @foreach ($contacts as $index => $contact)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $contact->email }}</td>
                                    <td>{{ $contact->first_phone }}</td>
                                    <td>{{ $contact->secound_phone }}</td>
                                    <td>{{ $contact->facebook }}</td>
                                    <td>{{ $contact->twitter }}</td>
                                    <td>
                                        <a href="{{route('contacts.edit',$contact->id)}}"
                                        class="btn btn-success btn-sm TeacherUpdateForm"
                                        title="Edit">
                                        <i class="ri-edit-box-fill"></i> Edit
                                        </a>
                                        <form action="{{route('contacts.destroy',$contact->id)}}" method="POST" style="display: inline;">
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
                                <td colspan="7" class="text-danger text-center">No data found </td>
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




