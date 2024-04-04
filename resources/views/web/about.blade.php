@extends('web.layouts.master')
@section('title')
    About
@endsection
@section('body')
    <style>
        .teacher_img {
            height: 200px;
            width: 100%;
        }


    </style>
    <!-- crumbs area start -->
    @if ($header->image)
    <div class="crumbs-area" style="background-image: url({{asset($header->image)}})">
        @else
        <div class="crumbs-area" style="background-image:url({{asset('web')}}/assets/images/not_found/header_not_found.png)">
            @endif
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
                <div class="col-lg-4">
                    <div class="about-left-content">
                        <div class="section-title">
                            <span class="text-uppercase">about us</span>
                            <h2>Welcome to</h2>
                            <h2><span>Our </span> <span class="primary-color">Edification</span></h2>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            @foreach ($abouts as $index => $about)
                                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                                    <img src="{{asset($about->image)}}" style="height: 300px" class="d-block w-100" alt="...">
                                </div>
                            @endforeach
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                </div>

            </div>
            <!---More about Edification-->
            <div class="card mt-5">
                <div class="card-body">
                    <div class="row ">
                        @foreach($abouts as $index=>$about )
                        @if($index%2==0)
                        <div class="col-md-6">
                            @if ($about->image)
                            <img src="{{$about->image}}" style="width: 100%;height:350px">
                            @else
                            <img src="{{ asset('web') }}/assets/images/not_found/teacher_not_found.png"
                            alt="No Image Available"  style="width: 100%;height:350px">
                            @endif
                        </div>
                        <div class="col-md-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, non necessitatibus? Distinctio, itaque! Recusandae porro, fugiat impedit molestiae laborum corrupti vero eaque culpa asperiores fugit sapiente distinctio nemo ut repellat iure velit temporibus tempora corporis fuga quasi facilis? Vel sed quis eius laboriosam. Rerum obcaecati corporis deleniti fugiat saepe ex quibusdam at quaerat voluptate atque illo aperiam necessitatibus quia distinctio reiciendis ut a aliquam, laborum ipsam sit harum beatae soluta sed. Illum magnam repellendus dolorem optio consequatur minus fugit rerum amet vitae soluta odit quae deserunt quia sit expedita iste ea, at quidem. Ex, rem necessitatibus? Rem aliquid deserunt pariatur.</p>
                        </div>
                        @else
                        <div class="col-md-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, non necessitatibus? Distinctio, itaque! Recusandae porro, fugiat impedit molestiae laborum corrupti vero eaque culpa asperiores fugit sapiente distinctio nemo ut repellat iure velit temporibus tempora corporis fuga quasi facilis? Vel sed quis eius laboriosam. Rerum obcaecati corporis deleniti fugiat saepe ex quibusdam at quaerat voluptate atque illo aperiam necessitatibus quia distinctio reiciendis ut a aliquam, laborum ipsam sit harum beatae soluta sed. Illum magnam repellendus dolorem optio consequatur minus fugit rerum amet vitae soluta odit quae deserunt quia sit expedita iste ea, at quidem. Ex, rem necessitatibus? Rem aliquid deserunt pariatur.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="https://cdn.getyourguide.com/img/tour/794d555ef48355ec.png/73.jpg" style="width: 100%;height:350px">
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="card mt-5">
                <div class="card-body">
                    <div class="row ">
                        <div class="col-md-6">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, non necessitatibus? Distinctio, itaque! Recusandae porro, fugiat impedit molestiae laborum corrupti vero eaque culpa asperiores fugit sapiente distinctio nemo ut repellat iure velit temporibus tempora corporis fuga quasi facilis? Vel sed quis eius laboriosam. Rerum obcaecati corporis deleniti fugiat saepe ex quibusdam at quaerat voluptate atque illo aperiam necessitatibus quia distinctio reiciendis ut a aliquam, laborum ipsam sit harum beatae soluta sed. Illum magnam repellendus dolorem optio consequatur minus fugit rerum amet vitae soluta odit quae deserunt quia sit expedita iste ea, at quidem. Ex, rem necessitatibus? Rem aliquid deserunt pariatur.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="https://arch.buet.ac.bd/wp-content/uploads/2023/10/Arch-Buet-Slider-7-1024x494.jpeg" style="width: 100%;height:350px">
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
                        <img class="title-top-shape" src="{{ asset('web') }}/assets/images/icon/title-top-shape.png"
                            alt="image">
                        <span class="text-uppercase">Take A Tour</span>
                        <h2>Video Tour on Edification</h2>
                    </div>
                </div>
            </div>
            <div class="video-area">
                <a class="expand-video" href="{{$about->video_link}}"><i class="fa fa-play"></i></a>
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
                @foreach ($teachers as $teacher)
                    <div class="card mb-5">
                        @if ($teacher->image)
                            <img class="teacher_img" src="{{ asset($teacher->image) }}" alt="image">
                        @else
                            <img class="teacher_img" src="{{ asset('web') }}/assets/images/not_found/teacher_not_found.png"
                                alt="No Image Available" />
                        @endif
                        <div class="card-body teacher-content p-25">
                            <h4 class="card-title mb-4"><a
                                    href='{{ route('teachers.details', $teacher->id) }}'>{{ $teacher->name }}</a></h4>
                            <span class="primary-color d-block mb-3">{{ $teacher->department }}</span>
                            <p class="card-text">{!! substr($teacher->short_description, 0, 100) !!}..</p>
                            <ul class="list-inline text-center">
                                <li><a href="{{ $teacher->facebook }}"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="{{ $teacher->twitter }}"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="{{ $teacher->instagram }}"><i class="fa fa-instagram"></i></a></li>
                                <li><a href="{{ $teacher->github }}"><i class="fa fa-github"></i></a></li>
                            </ul>
                        </div>
                    </div><!-- card -->
                @endforeach

            </div>
        </div>
    </div>
    <!-- teacher area end -->
@endsection
