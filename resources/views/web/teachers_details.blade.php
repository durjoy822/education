@extends('web.layouts.master')
@section('title')
Teacher Details
@endsection
@section('body')
 <!-- crumbs area start -->
 @if ($header->image)
    <div class="crumbs-area " style="background-image: url({{asset($header->image)}})">
        @else
        <div class="crumbs-area " style="background-image:url({{asset('web')}}/assets/images/not_found/header_not_found.png)">
    @endif    <div class="container">
        <div class="crumb-content">
            <h4 class="crumb-title"><span>Our</span> teachers</h4>
        </div>
    </div>
</div>
<!-- crumbs area end -->
<!-- teacher details area start -->
<div class="teacher-details pt--120 pb--60">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="tch-left-thumb">
                    @if($teacher->image)
                    <img src="{{asset($teacher->image)}}" style="height: 400px" alt="image">
                    @else
                    {{-- <img src="{{asset('web')}}/assets/images/teacher/tch-left-thumb.jpg" alt="image"> --}}
                    <img  class="teacher_img" src="{{asset('web')}}/assets/images/not_found/teacher_not_found.png" style="height: 400px" alt="No Image Available" />

                    @endif
                </div>
            </div>
            <div class="col-lg-8">
                <div class="teacher-contenttchd-content pl-5 pb-5">
                    <h3>{{$teacher->name}}</h3>
                    <span>{{$teacher->department}}</span>
                    <ul class="list-inline mt-4 mb-4">
                    <li><a href="{{$teacher->facebook}}"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{$teacher->twitter}}"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="{{$teacher->instagram}}"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="{{$teacher->github}}"><i class="fa fa-github"></i></a></li>
                    </ul>
                   <p>{!!$teacher->long_description!!}</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- teacher details area end -->
<!-- related course area start -->
<div class="related-course pb--40">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="section-title">
                    <h3>Monikas <span class="primary-color">other </span> courses</h3>
                </div>
            </div>
        </div>
        <div class="course-list">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="w-cs-single">
                        <img src="{{asset('web')}}/assets/images/course/cs-small-thumb1.jpg" alt="image">
                        <div class="fix">
                            <p class="mb-0"><a href="#">Ui / Ux Design</a></p>
                            <span><i class="fa fa-clock-o"></i> AUGUST 6, 2017</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="w-cs-single">
                        <img src="{{asset('web')}}/assets/images/course/cs-small-thumb2.jpg" alt="image">
                        <div class="fix">
                            <p class="mb-0"><a href="#">Learn Java</a></p>
                            <span><i class="fa fa-clock-o"></i> AUGUST 6, 2017</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="w-cs-single">
                        <img src="{{asset('web')}}/assets/images/course/cs-small-thumb3.jpg" alt="image">
                        <div class="fix">
                            <p class="mb-0"><a href="#">C++</a></p>
                            <span><i class="fa fa-clock-o"></i> AUGUST 6, 2017</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="w-cs-single">
                        <img src="{{asset('web')}}/assets/images/course/cs-small-thumb4.jpg" alt="image">
                        <div class="fix">
                            <p class="mb-0"><a href="#">Seo</a></p>
                            <span><i class="fa fa-clock-o"></i> AUGUST 6, 2017</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- related course area end -->

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
