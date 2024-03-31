@extends('admin.layout.master')
@section('title')
    Crouse  Manage
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="header-title float-start mt-2"> ALL Crouse  Information</h4>
                            <a href="{{route('crouses.create')}}"><button type="button" data-bs-target="#addCategoryModal" data-bs-toggle="modal"
                                class="btn btn-light float-end">Add New Crouse</button></a>
                        </div>
                    </div>
                    <hr />
                    <p class="text-muted font-14">{{ Session::get('success') }}</p>
                    <table id="datatable-buttons" class="table table-striped dt-responsive responsive">
                        <tr>
                            <td>Sl NO</td>
                            <td>{{$crouse->id}}</td>
                        </tr>
                        <tr>
                            <td>Image</td>
                            <td>
                                @if ($crouse->image)
                                <img src="{{ asset($crouse->image) }}" alt="blog-img" height="60" width="60" />
                            @else
                                <img src="{{asset('admin')}}/assets/images/not_found/not_found_img.png" alt="No Image Available" height="60" width="60" />
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Crouse Title</td>
                            <td>{{$crouse->crouse_title}}</td>
                        </tr>
                        <tr>
                            <td>Crouse Category</td>
                            <td>{{ $crouse->Category->name }} </td>
                        </tr>
                        <tr>
                            <td>Teacher Name</td>
                            <td>{{ $crouse->Teacher->name }}</td>
                        </tr>
                        <tr>
                            <td>Crouse Price</td>
                            <td>{{ $crouse->price }}</td>
                        </tr>
                        <tr>
                            <td>Crouse validation</td>
                            <td>{{ $crouse->crouse_validation }}</td>
                        </tr>
                        <tr>
                            <td>Class Size</td>
                            <td>{{ $crouse->class_size }}</td>
                        </tr>
                        <tr>
                            <td>Total Seat</td>
                            <td>{{ $crouse->total_seat }}</td>
                        </tr>
                        <tr>
                            <td>Short Description</td>
                            <td>{!! $crouse->short_description!!}</td>
                        </tr>
                        <tr>
                            <td>Long Description</td>
                            <td>{!!$crouse->long_description !!}</td>
                        </tr>

                        <tr>
                            <td>Status</td>
                            <td>{{$crouse->status==1?'Published':'Unpublished'}}</td>
                        </tr>

                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection




