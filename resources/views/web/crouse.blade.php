@extends('web.layouts.master')
@section('title')
Crouse
@endsection
@section('body')
<style>
    .crouse_img{
        height: 250px;
        width: 100%;
    }
</style>
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
            @foreach ($crouses as $crouse)
            <!-- course single start -->
            <div class="col-lg-4 col-md-6">
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
                            <a href='course-details.html'>
                                @if($crouse->Teacher->image)
                                <img class="course-meta-thumbnail rounded-circle" src="{{asset($crouse->Teacher->image)}}" alt="image">
                                @else
                                <img class="course-meta-thumbnail rounded-circle" src="{{asset('web')}}/assets/images/not_found/teacher_not_found.png" alt="image">
                                @endif
                             </a>
                        </div>
                        <p>{!!substr($crouse->short_description,0,150)!!}..</p>
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
            </div>
            @endforeach
        </div>
        <!---pagination-->
    <div class="d-felx justify-content-center">
        {{ $crouses->links('web.layouts.pagination') }}
    </div>
    <!--end pagination-->
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
