@extends('web.layouts.master')
@section('title')
Home
@endsection
@section('body')
<style>
    .crouse_img{
        height: 250px;
        width: 100%;
    }
</style>
<!-- hero area start -->
<div class="hero-area hero-s3 has-color">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 offset-xl-1">
                <div class="hero-content hero-content-s3">
                    <h3>admission ‘ 20</h3>
                    <h1><span class="primary-color">Your bright future is </span><b class="line-break"></b>our mission</h1>
                    <p>Find Your Preferred Courses & Improve Your Skills</p>
                    <form action="#">
                        <div class="form-input-box mt-5">
                            <div class="input">
                                <input type="text" name="search" placeholder="Keyword  Search">
                            </div>
                            <div class="input">
                                <select>
                                    <option selected disabled>Category Course</option>
                                    <option>Category Course</option>
                                    <option>Category Course</option>
                                </select>
                            </div>
                            <div class="input">
                                <select>
                                    <option selected disabled>Select Price Type</option>
                                    <option>Select Price Type</option>
                                    <option>Select Price Type</option>
                                    <option>Select Price Type</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-submit">
                            <button class="btn btn-primary"  type="submit">Search</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- hero area end -->

<!-- course area start -->
<div class="course-area pt--120">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="section-title-style2 black-title title-tb text-center">
                    <span>Build your career</span>
                    <h2 class="primary-color">Featured Courses</h2>
                </div>
            </div>
        </div>
        <div class="commn-carousel owl-carousel card-deck">
            @foreach ($crouses as  $crouse)
            <div class="card mb-5">
                <div class="course-thumb">
                    @if($crouse->image)
                    <img class="crouse_img" src="{{asset($crouse->image)}}" alt="image">
                    @else
                    <img  class="crouse_img" src="{{asset('web')}}/assets/images/not_found/teacher_not_found.png" alt="No Image Available" />
                    @endif
                    <span class="cs-price primary-bg">{{$crouse->price}} Tk</span>
                </div>
                <div class="card-body  p-25">
                    <div class="course-meta-title mb-4">
                        <div class="course-meta-text">
                            <h4><a href='{{route('crouse.details',$crouse->id)}}'>{{$crouse->crouse_title}}</a></h4>
                            <ul class="course-meta-stats">
                                <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                <li>36 <i class="fa fa-comment"></i>Comments</li>

                            </ul>
                        </div>
                        @if($crouse->Teacher->image)
                        <img class="course-meta-thumbnail rounded-circle" src="{{asset($crouse->Teacher->image)}}" alt="image">
                        @else
                        <img class="course-meta-thumbnail rounded-circle" src="{{asset('web')}}/assets/images/not_found/teacher_not_found.png" alt="image">
                        @endif                    </div>
                    <p>{!!substr($crouse->short_description,0,140)!!}</p>
                    <ul class="course-meta-details list-inline  w-100">
                        <li>
                         <p>Course</p>
                         <span>{{$crouse->crouse_validation}}</span>
                        </li>
                        <li>
                         <p>Class Size</p>
                          <span>{{$crouse->class_size}}</span>
                        </li>
                        <li>
                         <p>Duration</p>
                          <span>{{$crouse->class_duration}}</span>
                        </li>
                    </ul>
                    <div class="course-meta-details d-flex list-inline  w-100 text-center">
                        <button class="btn btn-sm  btn-info mt-1 mb-1">Wishlist </button> &nbsp;
                        <button class="btn btn-sm btn-warning">Apply Now </button>
                    </div>
              </div><!-- card-body -->
            </div><!-- card -->
            @endforeach

        </div>
    </div>
</div>
<!-- course area end -->
<!-- blog area start -->
<div class="feature-blog  ptb--120">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="section-title-style2 black-title title-tb text-center">
                    <span>Top stories</span>
                    <h2 class="primary-color">Blog & News </h2>
                </div>
            </div>
        </div>
                   <div class="row">
            <div class="blog-carousel owl-carousel card-deck">
                @foreach ($blogs as $blog )
                <div class="card mb-5">
                  <img class="card-img-top" src="{{asset($blog->image)}}" alt="image">
                  <div class="card-body p-25">
                      <ul class="list-inline primary-color mb-3">
                          <li><i class="fa fa-clock-o"></i> {{ date('F j, Y', strtotime($blog->creating_date)) }}</li>
                          <li><i class="fa fa-comments"></i> 3 Comments</li>
                      </ul>
                    <h4 class="card-title mb-4"><a href='{{route('blog.details',$blog->id)}}'>{{substr($blog->title,0,50)}}...</a></h4>
                    <p class="card-text">{!!substr($blog->short_description,0,200)!!}...</p>
                    <a class='btn btn-primary btn-round btn-sm' href='{{route('blog.details',$blog->id)}}'> Read More </a>
                  </div>
                </div><!-- card -->
                @endforeach
            </div><!-- blog-carousel -->
        </div><!-- blog-carousel -->
    </div>
</div>
<!-- blog area end -->
<!-- take toure area start -->
<div class="take-toure-area ptb--120">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="section-title-style2 white-title text-center">
                    <span>Take A Tour</span>
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

<!-- events area start -->
<div class="event-area pt--120 pb--80 pt-0">
    <div class="container">
        <div class="row">
            <div class="col-md-10 offset-md-1">
                <div class="section-title-style2 black-title text-center">
                    <span>Join with us</span>
                    <h2>Upcoming Events</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="media align-items-center mb-5">
                    <div class="media-head primary-bg">
                        <span><sub>MAR</sub>25</span>
                        <p>2018</p>
                    </div>
                    <div class="media-body">
                        <h4><a href="#">Affiliate Marketing</a></h4>
                        <p><i class="fa fa-clock-o"></i>05:23 AM - 09:23 AM</p>
                    </div>
                </div> <!-- media -->
            </div><!-- col-md-6 -->
            <div class="col-md-6">
                <div class="media align-items-center mb-5">
                    <div class="media-head primary-bg">
                        <span><sub>OCT</sub>25</span>
                        <p>2018</p>
                    </div>
                    <div class="media-body">
                        <h4><a href="#">Facebook Marketing</a></h4>
                        <p><i class="fa fa-clock-o"></i>05:23 AM - 09:23 AM</p>
                    </div>
                </div> <!-- media -->
            </div><!-- col-md-6 -->
            <div class="col-md-6">
                <div class="media align-items-center mb-5">
                    <div class="media-head primary-bg">
                        <span><sub>NOV</sub>25</span>
                        <p>2018</p>
                    </div>
                    <div class="media-body">
                        <h4><a href="#">Edustar Autumn</a></h4>
                        <p><i class="fa fa-clock-o"></i>05:23 AM - 09:23 AM</p>
                    </div>
                </div> <!-- media -->
            </div><!-- col-md-6 -->
            <div class="col-md-6">
                <div class="media align-items-center mb-5">
                    <div class="media-head primary-bg">
                        <span><sub>DEC</sub>25</span>
                        <p>2018</p>
                    </div>
                    <div class="media-body">
                        <h4><a href="#">Workshop PHP</a></h4>
                        <p><i class="fa fa-clock-o"></i>05:23 AM - 09:23 AM</p>
                    </div>
                </div> <!-- media -->
            </div><!-- col-md-6 -->
        </div>
    </div>
</div>
<!-- events area end -->

<div class="testimonial-area ptb--120"><!-- testimonial area start -->
    <img class="tst-bg" src="{{asset('web')}}/assets/images/bg/tst-bg-shape.png" alt="image">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="tst-carousel owl-carousel">
                    <div class="testimonial-content pb--40">
                        <div class="section-title sec-style-two">
                            <span class="text-uppercase primary-color mb-0">Our happy students</span>
                            <h2>Testimonial</h2>
                        </div>
                        <h3>‘‘ Vous devez profiter de la vie. Toujours aimez, les personnespositives penser. ‘‘</h3>
                        <h4>Kawsar Ahhamed</h4>
                        <span>App Developer</span>
                    </div>
                    <div class="testimonial-content pb--40">
                        <div class="section-title sec-style-two">
                            <span class="text-uppercase primary-color mb-0">Our happy students</span>
                            <h2>Testimonial</h2>
                        </div>
                        <h3>‘‘ Vous devez profiter de la vie. Toujours aimez, les personnespositives penser. ‘‘</h3>
                        <h4>Kawsar Ahhamed</h4>
                        <span>App Developer</span>
                    </div>
                    <div class="testimonial-content pb--40">
                        <div class="section-title sec-style-two">
                            <span class="text-uppercase primary-color mb-0">Our happy students</span>
                            <h2>Testimonial</h2>
                        </div>
                        <h3>‘‘ Vous devez profiter de la vie. Toujours aimez, les personnespositives penser. ‘‘</h3>
                        <h4>Kawsar Ahhamed</h4>
                        <span>App Developer</span>
                    </div>
                </div>
            </div><!-- row -->
        </div><!-- row -->
    </div><!-- container -->
</div><!-- testimonial-area -->

<!-- cta area start -->
<div class="cta-area has-color primary-bg cta-area ptb--50">
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
