@extends('admin.layout.master')
@section('title') Event Edit @endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Event form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal"  action="{{route('events.update',$event->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Event Title</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$event->title}}" name="title" id="name"
                                    placeholder="Event Title"/>
                                    <div class="text-danger">@error('title')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Event Date</label>
                            <div class="col-md-9">
                                <input type="date" class="form-control"  value="{{$event->date}}" name="date" id="name"
                                    placeholder="Event Date"/>
                                    <div class="text-danger">@error('date')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Event Starting Time</label>
                            <div class="col-md-9">
                                <input type="time" class="form-control" value="{{$event->starting_time}}" name="starting_time" id="name"
                                    placeholder="Event Date"/>
                                    <div class="text-danger">@error('starting_time')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Event Closing Time</label>
                            <div class="col-md-9">
                                <input type="time" class="form-control" value="{{$event->closing_time}}" name="closing_time" id="name"
                                    placeholder="Event Date"/>
                                    <div class="text-danger">@error('closing_time')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="justify-content-end row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-info addTeacher">Update  Event</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
