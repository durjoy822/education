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
                        </div>
                    </div>
                    <hr />
                    <p class="text-muted font-14">{{ Session::get('success') }}</p>
                    <table id="datatable-buttons" class="table table-striped dt-responsive nowrap w-100">

                        <tbody>
                            <tr>
                                <td>SL NO</td>
                                <td>2</td>
                            </tr>
                            <tr>
                                <td>Image</td>
                                <td><img src="{{asset($teacher->image)}}" style="width: 70px; height:70px"></td>
                            </tr>
                            <tr>
                                <td>Name</td>
                                <td>{{$teacher->name}}</td>
                            </tr>
                            <tr>
                                <td>Department</td>
                                <td>{{$teacher->department}}</td>
                            </tr>
                            <tr>
                                <td>Short Description</td>
                                <td>{!!$teacher->short_description!!}</td>
                            </tr>
                            <tr>
                                <td>Long Description</td>
                                <td>{!!$teacher->long_description!!}</td>
                            </tr>
                            <tr>
                                <td>Facebook</td>
                                <td>{{$teacher->facebook}}</td>
                            </tr>
                            <tr>
                                <td>Twitter</td>
                                <td>{{$teacher->twitter}}</td>
                            </tr>
                            <tr>
                                <td>Instagram</td>
                                <td>{{$teacher->instagram}}</td>
                            </tr>
                            <tr>
                                <td>Github</td>
                                <td>{{$teacher->github}}</td>
                            </tr>
                            <tr>
                                <td>Status</td>
                                <td>{{$teacher->status==1?'Published':'Unpublished'}}</td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
