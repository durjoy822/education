@extends('admin.layout.master')
@section('title')
    Setting Show
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col">
                            <h4 class="header-title float-start mt-2"> ALL Settings  Information</h4>
                            <a href="{{route('settings.edit',$setting->id)}}"><button type="button" data-bs-target="#addCategoryModal" data-bs-toggle="modal"
                                class="btn btn-light float-end">Edit Setting</button></a>
                        </div>
                    </div>
                    <hr />
                    <p class="text-muted font-14">{{ Session::get('success') }}</p>
                    <table id="datatable-buttons" class="table table-striped dt-responsive responsive">
                        <tr>
                            <td>Sl NO</td>
                            <td>{{$setting->id}}</td>
                        </tr>
                        <tr>
                            <td>Web Site Name</td>
                            <td>{{$setting->name}}</td>
                        </tr>
                        <tr>
                            <td>Dark Logo</td>
                            <td>
                                @if ($setting->dark_logo)
                                <img src="{{ asset($setting->dark_logo) }}" alt="blog-img" height="60" width="60" />
                            @else
                                <img src="{{asset('admin')}}/assets/images/not_found/not_found_img.png" alt="No Image Available" height="60" width="60" />
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td>White Logo</td>
                            <td>
                                @if ($setting->white_logo)
                                <img src="{{ asset($setting->white_logo) }}" alt="blog-img" height="60" width="60" />
                            @else
                                <img src="{{asset('admin')}}/assets/images/not_found/not_found_img.png" alt="No Image Available" height="60" width="60" />
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Favicon</td>
                            <td>
                                @if ($setting->favicon)
                                <img src="{{ asset($setting->favicon) }}" alt="blog-img" height="60" width="60" />
                            @else
                                <img src="{{asset('admin')}}/assets/images/not_found/not_found_img.png" alt="No Image Available" height="60" width="60" />
                            @endif
                            </td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td>{{$setting->email}}</td>
                        </tr>
                        <tr>
                            <td>Phone</td>
                            <td>{{$setting->phone}}</td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td>{!!$setting->address!!}</td>
                        </tr>
                        <tr>
                            <td>Saturday</td>
                            <td>{{$setting->sat}}</td>
                        </tr>
                        <tr>
                            <td>Sunday</td>
                            <td>{{$setting->sun}}</td>
                        </tr>
                        <tr>
                            <td>Monday</td>
                            <td>{{$setting->mon}}</td>
                        </tr>
                        <tr>
                            <td>Tuesday</td>
                            <td>{{$setting->tue}}</td>
                        </tr>
                        <tr>
                            <td>Wednesday</td>
                            <td>{{$setting->wed}}</td>
                        </tr>
                        <tr>
                            <td>Thursday</td>
                            <td>{{$setting->thu}}</td>
                        </tr>
                        <tr>
                            <td>Friday</td>
                            <td >{{$setting->fri}}</td>
                        </tr>
                        <tr>
                            <td>Facebook</td>
                            <td >{{$setting->facebook}}</td>
                        </tr>
                        <tr>
                            <td>Twitter</td>
                            <td >{{$setting->twitter}}</td>
                        </tr>
                        <tr>
                            <td>Instagram</td>
                            <td >{{$setting->instagram}}</td>
                        </tr>
                        <tr>
                            <td>Linkedin</td>
                            <td >{{$setting->linkedin}}</td>
                        </tr>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

@endsection




