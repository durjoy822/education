@extends('admin.layout.master')
@section('title') Terms Edit @endsection
@section('body')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="header-title">Edit terms & condition form</h4>
                    <p class="text-muted font-14">{{Session::get('message')}}</p>
                    <form class="form-horizontal"  action="{{route('terms.update',$term->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        
                        <div class="row mb-3">
                            <label for="name" class="col-md-3 col-form-label">Enter Terms & condition</label>
                            <div class="col-md-9">
                                <textarea  id="summernote" cols="9" name="terms" rows="9" class="form-control">{!!$term->terms!!}</textarea>
                                <div class="text-danger">@error('terms')  {{$message}} @enderror</div>
                            </div>
                        </div>
                        <div class="justify-content-end row">
                            <div class="col-md-9">
                                <button type="submit" class="btn btn-info addTeacher">Update  Terms</button>
                            </div>
                        </div>
                    </form>
                </div>  <!-- end card-body -->
            </div>  <!-- end card -->
        </div>  <!-- end col -->
    </div>
@endsection
