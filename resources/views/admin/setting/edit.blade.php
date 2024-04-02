@extends('admin.layout.master')
@section('title') Settings Edit @endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Setting Form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal"  action="{{route('settings.update',$setting->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="row mb-3">
                            <label for="image" class="col-md-3  col-form-label">Dark Logo</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="dark_logo" id="image"
                                    accept="image/*" />
                                    <div class="text-danger">@error('dark_logo')  {{$message}} @enderror</div>
                                    <div class="mt-1"><img src="{{asset($setting->dark_logo)}}" style="width: 70px; height:70px; "></div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-md-3  col-form-label">White Logo</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="white_logo" id="image"
                                    accept="image/*" />
                                    <div class="text-danger">@error('white_logo')  {{$message}} @enderror</div>
                                    <div class="mt-1"><img src="{{asset($setting->white_logo)}}" style="width: 70px; height:70px; "></div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-md-3  col-form-label">Favicon</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="favicon" id="image"
                                    accept="image/*" />
                                    <div class="text-danger">@error('favicon')  {{$message}} @enderror</div>
                                    <div class="mt-1"><img src="{{asset($setting->favicon)}}" style="width: 70px; height:70px; "></div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Web Site Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$setting->name}}" name="name" id="name"
                                    placeholder="Web Site Name" />
                                    <div class="text-danger">@error('name')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Email Address</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control"  value="{{$setting->email}}" name="email" id="name"
                                    placeholder="Enter Email Address" />
                                    <div class="text-danger">@error('email')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Phone Number</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  value="{{$setting->phone}}" name="phone" id="name"
                                    placeholder="Enter Phone Number" />
                                    <div class="text-danger">@error('phone')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Office Address</label>
                            <div class="col-md-9">
                               <textarea class="form-control " name="address" placeholder="Enter Office Address">{!!$setting->address!!}</textarea>
                                    <div class="text-danger">@error('address')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Staturday (open & closed time)</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  value="{{$setting->sat}}" name="sat" id="name"
                                    placeholder="Saturday open & closed time" />
                                    <div class="text-danger">@error('sat')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Sunday (Open & closed time)</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  value="{{$setting->sun}}" name="sun" id="name"
                                    placeholder="Sunday open & closed time" />
                                    <div class="text-danger">@error('sun')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Monday  (Open & closed time)</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  value="{{$setting->mon}}" name="mon" id="name"
                                    placeholder="Monday  open & closed time" />
                                    <div class="text-danger">@error('mon')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Tuesday  (Open & closed time)</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  value="{{$setting->tue}}" name="tue" id="name"
                                    placeholder="Tuesday open & closed time" />
                                    <div class="text-danger">@error('tue')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Wednesday  (Open & closed time)</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  value="{{$setting->wed}}" name="wed" id="name"
                                    placeholder="Wednesday open & closed time" />
                                    <div class="text-danger">@error('wed')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Thursday  (Open & closed time)</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  value="{{$setting->thu}}" name="thu" id="name"
                                    placeholder="Thursday open & closed time" />
                                    <div class="text-danger">@error('thu')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Friday  (Open & closed time)</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  value="{{$setting->fri}}" name="fri" id="name"
                                    placeholder="Friday open & closed time" />
                                    <div class="text-danger">@error('fri')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Facebook</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  value="{{$setting->facebook}}" name="facebook" id="name"
                                    placeholder="Facebook" />
                                    <div class="text-danger">@error('facebook')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Twitter</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  value="{{$setting->twitter}}" name="twitter" id="name"
                                    placeholder="Twitter" />
                                    <div class="text-danger">@error('fri')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Instagram</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  value="{{$setting->instagram}}" name="instagram" id="name"
                                    placeholder="Instagram" />
                                    <div class="text-danger">@error('instagram')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Linkedin</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control"  value="{{$setting->linkedin}}" name="linkedin" id="name"
                                    placeholder="Linkedin" />
                                    <div class="text-danger">@error('linkedin')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="justify-content-end row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-info addTeacher">Setting Store</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
