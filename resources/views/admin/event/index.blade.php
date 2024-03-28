@extends('admin.layout.master')
@section('title')
   Event Manage
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="header-title float-start mt-2"> Event Information</h4>
                            <a href="{{route('events.create')}}"><button type="button" data-bs-target="#addCategoryModal" data-bs-toggle="modal"
                                class="btn btn-light float-end">Add New Event</button></a>
                        </div>
                    </div>
                    <hr />
                    <p class="text-muted font-14">{{ Session::get('success') }}</p>
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">
                        <thead>
                            <tr>
                                <th>SL NO</th>
                                <th>Event Title</th>
                                <th>Event Date </th>
                                <th>Event Starting Time  </th>
                                <th>Event Closeing Time </th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        @if ($events->count() > 0)
                            @foreach ($events as $index => $event)
                                <tr>
                                    <td>{{ $index + 1 }}</td>
                                    <td>{{ $event->title }}</td>
                                    <td>{{ date('F j, Y', strtotime( $event->date )) }}</td>
                                    <td> {{ \Carbon\Carbon::parse($event->starting_time)->format('h:i A') }}</td>
                                    <td> {{ \Carbon\Carbon::parse($event->closing_time)->format('h:i A') }}</td>

                                    <td>
                                        <a href="{{route('events.edit',$event->id)}}"
                                        class="btn btn-success btn-sm TeacherUpdateForm"
                                        title="Edit">
                                        <i class="ri-edit-box-fill"></i> Edit
                                        </a>
                                        <form action="{{route('events.destroy',$event->id)}}" method="POST" style="display: inline;">
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
                                <td colspan="6" class="text-danger text-center">No data found </td>
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




