@extends('web.layouts.master')
@section('title')
About
@endsection
@section('body')
<style>
    .teacher_img{
        height: 200px;
        width: 100%;
    }
</style>
<!-- crumbs area start -->
<div class="crumbs-area">
    <div class="container">
        <div class="crumb-content">
            <h4 class="crumb-title"><span>About </span>Us</h4>
        </div>
    </div>
</div>
<!-- crumbs area end -->
<!-- about area start -->
<div class="about-area ptb--120">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="about-left-content">
                    <div class="section-title">
                         <span class="text-uppercase">about us</span>
                        <h2>Welcome to</h2><h2><span>Our </span> <span class="primary-color">university</span></h2>
                    </div>
                    <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                    <a href="#" class="btn btn-primary btn-round">Read more</a>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="abt-right-thumb">
                    <div class="abt-rt-inner">
                        <a class="expand-video" href="https://www.youtube.com/watch?v=cdfMgotGKIM"><i class="fa fa-play"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about area end -->
<!-- take toure area start -->
<div class="take-toure-area ptb--120">
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="section-title sec-style-two">
                    <img class="title-top-shape" src="{{asset('web')}}/assets/images/icon/title-top-shape.png" alt="image">
                    <span class="text-uppercase">Take A Tour</span>
                    <h2>Video Tour on Edification</h2>
                </div>
            </div>
        </div>
        <div class="video-area">
            <a class="expand-video" href="https://www.youtube.com/watch?v=cdfMgotGKIM"><i class="fa fa-play"></i></a>
        </div>
    </div>
</div>
<!-- take toure area end -->

 <!-- cta area start -->
<div class="container pb--120">
    <div class="cta-area primary-bg has-color ptb--50 pl-5 pr-5">
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

<!-- teacher area start -->
<div class="teacher-area befr-themeoclor pb--70">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6">
                <div class="section-title">
                    <span class="text-uppercase">Learn from <span class="primary-color">the best</span></span>
                    <h2>Our Teachers </h2>
                </div>
            </div>
        </div>
        <div class="teacher-carousel owl-carousel card-deck">
            @foreach ($teachers as $teacher )
            <div class="card mb-5">
                @if($teacher->image)
                    <img class="teacher_img" src="{{asset($teacher->image)}}" alt="image">
                   @else
                    <img  class="teacher_img" src="{{asset('web')}}/assets/images/not_found/teacher_not_found.png" alt="No Image Available" />
                @endif
              <div class="card-body teacher-content p-25">
                <h4 class="card-title mb-4"><a href='{{route('teachers.details',$teacher->id)}}'>{{$teacher->name}}</a></h4>
                <span class="primary-color d-block mb-3">{{$teacher->department}}</span>
                <p class="card-text">{!!substr($teacher->short_description,0, 100)!!}..</p>
                <ul class="list-inline text-center">
                    <li><a href="{{$teacher->facebook}}"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="{{$teacher->twitter}}"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="{{$teacher->instagram}}"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="{{$teacher->github}}"><i class="fa fa-github"></i></a></li>
                </ul>
              </div>
            </div><!-- card -->
            @endforeach

        </div>
    </div>
</div>
<!-- teacher area end -->
@endsection
