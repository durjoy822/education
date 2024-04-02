@extends('admin.layout.master')
@section('title') Settings Create @endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Add Setting Form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal"  action="{{route('settings.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3">
                            <label for="image" class="col-md-3  col-form-label">Dark Logo</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="dark_logo" id="image"
                                    accept="image/*" />
                                    <div class="text-danger">@error('dark_logo')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-md-3  col-form-label">White Logo</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="white_logo" id="image"
                                    accept="image/*" />
                                    <div class="text-danger">@error('white_logo')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="image" class="col-md-3  col-form-label">Favicon</label>
                            <div class="col-md-9">
                                <input type="file" class="form-control" name="favicon" id="image"
                                    accept="image/*" />
                                    <div class="text-danger">@error('favicon')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Web Site Name</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Web Site Name" />
                                    <div class="text-danger">@error('name')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Email Address</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" name="email" id="name"
                                    placeholder="Enter Email Address" />
                                    <div class="text-danger">@error('email')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Phone Number</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="phone" id="name"
                                    placeholder="Enter Phone Number" />
                                    <div class="text-danger">@error('phone')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Office Address</label>
                            <div class="col-md-9">
                               <textarea class="form-control " name="address" placeholder="Enter Office Address"></textarea>
                                    <div class="text-danger">@error('address')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Staturday (open & closed time)</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="sat" id="name"
                                    placeholder="Saturday open & closed time" />
                                    <div class="text-danger">@error('sat')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Sunday (Open & closed time)</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="sun" id="name"
                                    placeholder="Sunday open & closed time" />
                                    <div class="text-danger">@error('sun')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Monday  (Open & closed time)</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="mon" id="name"
                                    placeholder="Monday  open & closed time" />
                                    <div class="text-danger">@error('mon')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Tuesday  (Open & closed time)</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="tue" id="name"
                                    placeholder="Tuesday open & closed time" />
                                    <div class="text-danger">@error('tue')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Wednesday  (Open & closed time)</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="wed" id="name"
                                    placeholder="Wednesday open & closed time" />
                                    <div class="text-danger">@error('wed')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Thursday  (Open & closed time)</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="thu" id="name"
                                    placeholder="Thursday open & closed time" />
                                    <div class="text-danger">@error('thu')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Friday  (Open & closed time)</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="fri" id="name"
                                    placeholder="Friday open & closed time" />
                                    <div class="text-danger">@error('fri')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Facebook</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="facebook" id="name"
                                    placeholder="Facebook" />
                                    <div class="text-danger">@error('facebook')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Twitter</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="twitter" id="name"
                                    placeholder="Twitter" />
                                    <div class="text-danger">@error('fri')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Instagram</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="instagram" id="name"
                                    placeholder="Instagram" />
                                    <div class="text-danger">@error('instagram')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Linkedin</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" name="linkedin" id="name"
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
