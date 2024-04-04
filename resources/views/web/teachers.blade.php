@extends('web.layouts.master')
@section('title')
Teacher
@endsection
@section('body')
<style>
    .teacher_img{
        height: 200px;
        width: 100%;
    }
</style>
<!-- crumbs area start -->
    @if ($header->image)
    <div class="crumbs-area mt-5" style="background-image: url({{asset($header->image)}})">
        @else
        <div class="crumbs-area mt-5" style="background-image:url({{asset('web')}}/assets/images/not_found/header_not_found.png)">
    @endif
    <div class="container">
        <div class="crumb-content">
            <h4 class="crumb-title"><span>Our</span> teachers</h4>
        </div>
    </div>
</div>
<!-- crumbs area end -->
<!-- teacher area start -->
<div class="all-teachers  pt--120 pb--70">
    <div class="container">
        <div class="row">
            @foreach ($teachers as $teacher )
            <div class="col-lg-4 col-md-6">
              <div class="card mb-5">
                @if ($teacher->image)
                <img class="teacher_img" src="{{asset($teacher->image)}}" alt="image" >
                @else
                <img  class="teacher_img" src="{{asset('web')}}/assets/images/not_found/teacher_not_found.png" alt="No Image Available" />
                @endif
                <div class="card-body teacher-content p-25">
                  <h4 class="card-title mb-1"><a href='{{route('teachers.details',$teacher->id)}}'>{{$teacher->name}}</a></h4>
                  <span class="primary-color d-block mb-4">{{$teacher->department}}</span>
                  <p class="card-text">{!!substr($teacher->short_description,0,150)!!}..</p>
                  <ul class="list-inline text-center">
                    <li><a href="{{$teacher->facebook}}"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{$teacher->twitter}}"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="{{$teacher->instagram}}"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="{{$teacher->github}}"><i class="fa fa-github"></i></a></li>
                  </ul>
                </div>
              </div><!-- card -->
            </div><!-- teacher single end -->
            @endforeach

        </div>
    </div>
</div>
<!-- teacher area end -->



<!-- cta area start -->
<div class="cta-area secondary-bg has-color ptb--50">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-9">
                <div class="cta-content">
                    <p class="mb-2">Click to Join the Advance Workshop</p>
                    <h2>Training in advance networking</h2>
                </div>
            </div>
            <div class="col-md-3">
                <div class="cta-btn">
                    <a class="btn btn-light btn-round" href="#">Join Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- cta area end -->
@endsection
