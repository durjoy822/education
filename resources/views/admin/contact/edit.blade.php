@extends('admin.layout.master')
@section('title')
    Contact Edit
@endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit Contact form</h4>
                    <p class="text-muted font-14">{{ Session::get('message') }}</p>
                    <form class="form-horizontal" action="{{ route('contacts.update',$contact->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Email</label>
                            <div class="col-md-9">
                                <input type="email" class="form-control" value="{{$contact->email}}" name="email" id="name"
                                    placeholder="Enter Email Address" />
                                <div class="text-danger">@error('email'){{ $message }} @enderror </div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label"> First Phone Number </label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$contact->first_phone}}" name="first_phone" id="name"
                                    placeholder="Enter First Phone Number" />
                                <div class="text-danger">@error('first_phone'){{ $message }} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Secound Phone Number</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$contact->secound_phone}}" name="secound_phone" id="name"
                                    placeholder="Enter Secound Phone Number" />
                                <div class="text-danger">@error('secound_phone') {{ $message }}@enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Facebook</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$contact->facebook}}" name="facebook" id="name"
                                    placeholder="Facebook" />
                                <div class="text-danger">@error('facebook') {{ $message }} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Twitter</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$contact->twitter}}" name="twitter" id="name"
                                    placeholder="Twitter" />
                                <div class="text-danger">@error('twitter') {{ $message }} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Instagram</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$contact->instagram}}" name="instagram" id="name"
                                    placeholder="Instagram" />
                                <div class="text-danger">@error('instagram') {{ $message }} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Linkedin</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$contact->linkedin}}" name="linkedin" id="name"
                                    placeholder="Linkedin" />
                                <div class="text-danger">@error('linkedin') {{ $message }} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Youtube</label>
                            <div class="col-md-9">
                                <input type="text" class="form-control" value="{{$contact->youtube}}" name="youtube" id="name"
                                    placeholder="Youtube" />
                                <div class="text-danger">@error('youtube') {{ $message }} @enderror</div>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Google Map</label>
                            <div class="col-md-9">
                              <textarea class="form-control" cols="3" rows="3" name="map" placeholder="Google Map">{!!$contact->map!!}</textarea>
                                <div class="text-danger">@error('youtube') {{ $message }} @enderror</div>
                            </div>
                        </div>
                        <div class="justify-content-end row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-info addTeacher">Update contact info</button>
                            </div>
                        </div>
                    </form>
                </div> <!-- end card-body -->
            </div> <!-- end card -->
        </div> <!-- end col -->
    </div>
@endsection
