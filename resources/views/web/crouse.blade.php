@extends('web.layouts.master')
@section('title')
Crouse
@endsection
@section('body')
 <!-- crumbs area start -->
 <div class="crumbs-area">
    <div class="container">
        <div class="crumb-content">
            <h4 class="crumb-title"><span>Our</span> Courses</h4>
        </div>
    </div>
</div>
<!-- crumbs area end -->
<!-- course area start -->
<div class="course-area  pt--120 pb--70">
    <div class="container">
        <div class="row">
            <!-- course single start -->
            <div class="col-lg-4 col-md-6">
                <div class="card mb-5">
                    <div class="course-thumb">
                        <img src="{{asset('web')}}/assets/images/course/cs-img1.jpg" alt="image">
                        <span class="cs-price primary-bg">$150</span>
                    </div>
                    <div class="card-body  p-25">
                        <div class="course-meta-title mb-4">
                            <div class="course-meta-text">
                                <h4><a href='course-details.html'>Application Design Course</a></h4>
                                <ul class="course-meta-stats">
                                    <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                    <li>36 <i class="fa fa-comment"></i></li>
                                    <li>85 <i class="fa fa-heart"></i></li>
                                </ul>
                            </div>
                            <a href='course-details.html'><img class="course-meta-thumbnail rounded-circle" src="{{asset('web')}}/assets/images/author/auth1.jpg" alt="image"> </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sciunt. Neque quisquam est, qui dolorem ipsum tatem.</p>
                        <ul class="course-meta-details list-inline  w-100">
                            <li>
                             <p>Course</p>
                             <span>3 Year</span>
                            </li>
                            <li>
                             <p>Class Size</p>
                              <span>18</span>
                            </li>
                            <li>
                             <p>Duration</p>
                              <span>1 hour</span>
                            </li>
                        </ul>
                  </div><!-- card-body -->
                </div><!-- card -->
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card mb-5">
                    <div class="course-thumb">
                        <img src="{{asset('web')}}/assets/images/course/cs-img2.jpg" alt="image">
                        <span class="cs-price primary-bg">$150</span>
                    </div>
                    <div class="card-body  p-25">
                        <div class="course-meta-title mb-4">
                            <div class="course-meta-text">
                                <h4><a href='course-details.html'>Data Structure & Algorithm</a></h4>
                                <ul class="course-meta-stats">
                                    <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                    <li>36 <i class="fa fa-comment"></i></li>
                                    <li>85 <i class="fa fa-heart"></i></li>
                                </ul>
                            </div>
                            <a href='course-details.html'><img class="course-meta-thumbnail rounded-circle" src="{{asset('web')}}/assets/images/author/auth1.jpg" alt="image"> </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sciunt. Neque quisquam est, qui dolorem ipsum tatem.</p>
                        <ul class="course-meta-details list-inline  w-100">
                            <li>
                             <p>Course</p>
                             <span>3 Year</span>
                            </li>
                            <li>
                             <p>Class Size</p>
                              <span>18</span>
                            </li>
                            <li>
                             <p>Duration</p>
                              <span>1 hour</span>
                            </li>
                        </ul>
                  </div><!-- card-body -->
                </div><!-- card -->
            </div><!-- col-lg-4 -->

            <div class="col-lg-4 col-md-6">
                <div class="card mb-5">
                    <div class="course-thumb">
                        <img src="{{asset('web')}}/assets/images/course/cs-img3.jpg" alt="image">
                        <span class="cs-price primary-bg">$150</span>
                    </div>
                    <div class="card-body  p-25">
                        <div class="course-meta-title mb-4">
                            <div class="course-meta-text">
                                <h4><a href='course-details.html'>Android App Development</a></h4>
                                <ul class="course-meta-stats">
                                    <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                    <li>36 <i class="fa fa-comment"></i></li>
                                    <li>85 <i class="fa fa-heart"></i></li>
                                </ul>
                            </div>
                            <a href='course-details.html'><img class="course-meta-thumbnail rounded-circle" src="{{asset('web')}}/assets/images/author/auth1.jpg" alt="image"> </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sciunt. Neque quisquam est, qui dolorem ipsum tatem.</p>
                        <ul class="course-meta-details list-inline  w-100">
                            <li>
                             <p>Course</p>
                             <span>3 Year</span>
                            </li>
                            <li>
                             <p>Class Size</p>
                              <span>18</span>
                            </li>
                            <li>
                             <p>Duration</p>
                              <span>1 hour</span>
                            </li>
                        </ul>
                  </div><!-- card-body -->
                </div><!-- card -->
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card mb-5">
                    <div class="course-thumb">
                        <img src="{{asset('web')}}/assets/images/course/cs-img4.jpg" alt="image">
                        <span class="cs-price primary-bg">$150</span>
                    </div>
                    <div class="card-body  p-25">
                        <div class="course-meta-title mb-4">
                            <div class="course-meta-text">
                                <h4><a href='course-details.html'>Application Design Course</a></h4>
                                <ul class="course-meta-stats">
                                    <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                    <li>36 <i class="fa fa-comment"></i></li>
                                    <li>85 <i class="fa fa-heart"></i></li>
                                </ul>
                            </div>
                            <a href='course-details.html'><img class="course-meta-thumbnail rounded-circle" src="{{asset('web')}}/assets/images/author/auth1.jpg" alt="image"> </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sciunt. Neque quisquam est, qui dolorem ipsum tatem.</p>
                        <ul class="course-meta-details list-inline  w-100">
                            <li>
                             <p>Course</p>
                             <span>3 Year</span>
                            </li>
                            <li>
                             <p>Class Size</p>
                              <span>18</span>
                            </li>
                            <li>
                             <p>Duration</p>
                              <span>1 hour</span>
                            </li>
                        </ul>
                  </div><!-- card-body -->
                </div><!-- card -->
            </div>

            <div class="col-lg-4 col-md-6">
                <div class="card mb-5">
                    <div class="course-thumb">
                        <img src="{{asset('web')}}/assets/images/course/cs-img5.jpg" alt="image">
                        <span class="cs-price primary-bg">$150</span>
                    </div>
                    <div class="card-body  p-25">
                        <div class="course-meta-title mb-4">
                            <div class="course-meta-text">
                                <h4><a href='course-details.html'>Application Design Course</a></h4>
                                <ul class="course-meta-stats">
                                    <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                    <li>36 <i class="fa fa-comment"></i></li>
                                    <li>85 <i class="fa fa-heart"></i></li>
                                </ul>
                            </div>
                            <a href='course-details.html'><img class="course-meta-thumbnail rounded-circle" src="{{asset('web')}}/assets/images/author/auth1.jpg" alt="image"> </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sciunt. Neque quisquam est, qui dolorem ipsum tatem.</p>
                        <ul class="course-meta-details list-inline  w-100">
                            <li>
                             <p>Course</p>
                             <span>3 Year</span>
                            </li>
                            <li>
                             <p>Class Size</p>
                              <span>18</span>
                            </li>
                            <li>
                             <p>Duration</p>
                              <span>1 hour</span>
                            </li>
                        </ul>
                  </div><!-- card-body -->
                </div><!-- card -->
            </div>
            <!-- course single end -->
            <!-- course single start -->
            <div class="col-lg-4 col-md-6">
                <div class="card mb-5">
                    <div class="course-thumb">
                        <img src="{{asset('web')}}/assets/images/course/cs-img6.jpg" alt="image">
                        <span class="cs-price primary-bg">$150</span>
                    </div>
                    <div class="card-body  p-25">
                        <div class="course-meta-title mb-4">
                            <div class="course-meta-text">
                                <h4><a href='course-details.html'>Application Design Course</a></h4>
                                <ul class="course-meta-stats">
                                    <li><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i></li>
                                    <li>36 <i class="fa fa-comment"></i></li>
                                    <li>85 <i class="fa fa-heart"></i></li>
                                </ul>
                            </div>
                            <a href='course-details.html'><img class="course-meta-thumbnail rounded-circle" src="{{asset('web')}}/assets/images/author/auth1.jpg" alt="image"> </a>
                        </div>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sciunt. Neque quisquam est, qui dolorem ipsum tatem.</p>
                        <ul class="course-meta-details list-inline  w-100">
                            <li>
                             <p>Course</p>
                             <span>3 Year</span>
                            </li>
                            <li>
                             <p>Class Size</p>
                              <span>18</span>
                            </li>
                            <li>
                             <p>Duration</p>
                              <span>1 hour</span>
                            </li>
                        </ul>
                  </div><!-- card-body -->
                </div><!-- card -->
            </div>
            <!-- course single end -->
        </div>
    </div>
</div>
<!-- course area end -->

<!-- cta area start -->
<div class="cta-area  secondary-bg has-color ptb--50">
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
