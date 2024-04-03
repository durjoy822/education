@extends('web.layouts.master')
@section('title')
    Crouse Details
@endsection
@section('body')
    <style>
        .crouse_img {
            height: 450px;
            width: 100%;
        }

        .latest_crouse_img {
            height: 100px;
            width: 100%;
        }
        .modal-dialog{
            max-width: 900px;
        }

        .modal-body select {
        border: 1px solid #efefef;
        margin-bottom: 20px;
        padding: 10px 15px;
        width: 100%;

        }
        .modal-body textarea {
        border: 1px solid #efefef;
        margin-bottom: 20px;
        padding: 10px 15px;
        width: 100%;
        }


    </style>
    <!-- crumbs area start -->
    <div class="crumbs-area">
        <div class="container">
            <div class="crumb-content">
                <h4 class="crumb-title"><span>Single</span> Course DeatilS</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->
    <!-- course area start -->
    <div class="course-area ptb--120">
        <div class="container">
            <div class="row">
                <!-- course details start -->
                <div class="col-lg-8 col-md-8">
                    <div class="course-details">
                        <div class="cs-thumb mb-5">
                            @if ($crouseDetail->image)
                                <img class="crouse_img" src="{{ asset($crouseDetail->image) }}" alt="image">
                            @else
                                <img class="crouse_img"
                                    src="{{ asset('web') }}/assets/images/not_found/teacher_not_found.png"
                                    alt="No Image Available" />
                            @endif
                            <span class="cs-price">{{ $crouseDetail->price }} Tk</span>
                            <div class="csd-hv-info has-color align-items-center">
                                <div class="course-dt-info">
                                    <ul class="course-meta-details list-inline  w-100">
                                        <li>
                                            <p>Course</p>
                                            <span>{{ $crouseDetail->crouse_validation }}</span>
                                        </li>
                                        <li>
                                            <p>Class Size</p>
                                            <span>{{ $crouseDetail->class_size }}</span>
                                        </li>
                                        <li>
                                            <p>Duration</p>
                                            <span>{{ $crouseDetail->class_duration }}</span>
                                        </li>

                                    </ul>
                                </div>
                                <ul class="course-meta-stats text-center">
                                    <li>
                                        <p class="m-0">Total Seats </p>
                                        <div>{{ $crouseDetail->total_seat }}/<span class="text-danger">30</span></div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                        <div class="cs-content">
                            <div>
                                <div class="row align-items-center">
                                    <div class="col-md-5 col-6">
                                        <ul class="course-meta-stats">
                                            <li>Rating :</li>
                                            <li>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half"></i>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="col-md-7 col-6 text-end">
                                        <div class="float-right">
                                            <button class="btn btn-sm btn-warning"data-toggle="modal"
                                                data-target="#apply_now">Apply now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <h3 class="mb-4 mt-2"><a href="#">{{ $crouseDetail->crouse_title }}</a></h3>
                            <p>{!! $crouseDetail->long_description !!}</p>

                        </div>
                    </div>
                    <!-- comments area end -->
                    <div class="comment-area">
                        <h4 class="comment-title">Comments <span>(03)</span></h4>
                        <ul class="comment-list">
                            <li class="comment-info-inner">
                                <article>
                                    <div class="comment-thumb">
                                        <img src="{{ asset('web') }}/assets/images/author/cs-comment-auth1.jpg"
                                            alt="image">
                                    </div>
                                    <div class="comment-content">
                                        <h4>Tomas</h4>
                                        <p>Ed id interdum urna. Nam ac elit a ante commodo tristique. Duis lacus urna,
                                            condimentum a vehicula a, hendrerit ac nisi Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. </p>
                                        <div class="cs-cmnt-meta">
                                            <ul>
                                                <li>AUGUST 6, 2018</li>
                                                <li><span>BY </span> Hasin Haydar</li>
                                            </ul>
                                            <a href="#">REPLY <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </article>
                                <ul class="children">
                                    <li class="comment-info-inner">
                                        <article>
                                            <div class="comment-thumb">
                                                <img src="{{ asset('web') }}/assets/images/author/cs-comment-auth2.jpg"
                                                    alt="image">
                                            </div>
                                            <div class="comment-content">
                                                <h4>John doe</h4>
                                                <p>Ed id interdum urna. Nam ac elit a ante commodo tristique. Duis lacus
                                                    urna, condimentum a vehicula a, hendrerit ac nisi Lorem ipsum dolor sit
                                                    amet, consectetur adipiscing elit. </p>
                                                <div class="cs-cmnt-meta">
                                                    <ul>
                                                        <li>AUGUST 6, 2018</li>
                                                        <li><span>BY </span> Hasin Haydar</li>
                                                    </ul>
                                                    <a href="#">REPLY <i class="fa fa-long-arrow-right"></i></a>
                                                </div>
                                            </div>
                                        </article>
                                    </li>
                                </ul>
                            </li>
                            <li class="comment-info-inner">
                                <article>
                                    <div class="comment-thumb">
                                        <img src="{{ asset('web') }}/assets/images/author/cs-comment-auth3.jpg"
                                            alt="image">
                                    </div>
                                    <div class="comment-content">
                                        <h4>Bagun khan</h4>
                                        <p>Ed id interdum urna. Nam ac elit a ante commodo tristique. Duis lacus urna,
                                            condimentum a vehicula a, hendrerit ac nisi Lorem ipsum dolor sit amet,
                                            consectetur adipiscing elit. </p>
                                        <div class="cs-cmnt-meta">
                                            <ul>
                                                <li>AUGUST 6, 2018</li>
                                                <li><span>BY </span> Hasin Haydar</li>
                                            </ul>
                                            <a href="#">REPLY <i class="fa fa-long-arrow-right"></i></a>
                                        </div>
                                    </div>
                                </article>
                            </li>
                        </ul>
                    </div>
                    <!-- comments area end -->
                    <!-- leave comment area start -->
                    <div class="leave-comment-area">
                        <h4 class="comment-title">Leave Your Comment</h4>
                        <form action="#">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" name="Name" placeholder="Enter your name">
                                </div>
                                <div class="col-md-6">
                                    <input type="email" name="email" placeholder="Your Email">
                                </div>
                            </div>
                            <textarea name="msg" id="msg" placeholder="Your message here"></textarea>
                            <button class="btn btn-primary btn-round" type="submit">Post Comment<i
                                    class="fa fa-long-arrow-right"></i></button>
                        </form>
                    </div>
                    <!-- leave comment area end -->
                </div>
                <!-- course details end -->
                <!-- sidebar start -->
                <div class="col-lg-4 col-md-4">
                    <div class="sidebar">
                        <!-- widget nstructor start -->
                        <div class="widget widget-instructor">
                            <h4 class="widget-title">Course instructor</h4>
                            <div class="instructor">
                                <div class="post-author-info">
                                    <div class="thumb">
                                        @if ($crouseDetail->Teacher->image)
                                            <img class="crouse_img" src="{{ asset($crouseDetail->Teacher->image) }}"
                                                alt="image">
                                        @else
                                            <img class="crouse_img"
                                                src="{{ asset('web') }}/assets/images/not_found/teacher_not_found.png"
                                                alt="No Image Available" />
                                        @endif
                                    </div>
                                    <h5>{{ $crouseDetail->Teacher->name }}</h5>
                                    <p>{!! $crouseDetail->Teacher->short_description !!}</p>
                                    <ul class="social">
                                        <li><a href="{{ $crouseDetail->Teacher->facebook }}"><i
                                                    class="fa fa-facebook"></i></a></li>
                                        <li><a href="{{ $crouseDetail->Teacher->twitter }}"><i
                                                    class="fa fa-twitter"></i></a></li>
                                        <li><a href="{{ $crouseDetail->Teacher->instagram }}"><i
                                                    class="fa fa-instagram"></i></a></li>
                                        <li><a href="{{ $crouseDetail->Teacher->github }}"><i
                                                    class="fa fa-github"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- widget nstructor end -->

                        <!-- widget course start -->
                        <div class="widget widget-course">
                            <h4 class="widget-title">Latest Courses</h4>
                            <div class="course-list">
                                @foreach ($latestCrouses as $latestCrouse)
                                    <div class="w-cs-single">
                                        @if ($latestCrouse->image)
                                            <img class="latest_crouse_img" src="{{ asset($latestCrouse->image) }}"
                                                alt="image">
                                        @else
                                            <img class="latest_crouse_img"
                                                src="{{ asset('web') }}/assets/images/not_found/teacher_not_found.png"
                                                alt="No Image Available" />
                                        @endif
                                        <div class="fix">
                                            <p><a
                                                    href="{{ route('crouse.details', $latestCrouse->id) }}">{{ $latestCrouse->crouse_title }}</a>
                                            </p>
                                            <span><i
                                                    class="fa fa-clock-o"></i>{{ date('F j, Y', strtotime($latestCrouse->created_at)) }}</span>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <!-- widget course end -->
                        <!-- widget course start -->
                        <div class="widget widget-subscribe">
                            <h4 class="widget-title">Subcribe</h4>
                            <div class="subscribe">
                                <p>Subscribe to my Newsletter</p>
                                <form>
                                    <input type="email" name="email" placeholder="Email address">
                                    <button type="submit">Subscribe</button>
                                </form>
                            </div>
                        </div>
                        <!-- widget course end -->
                    </div>
                </div>
                <!-- sidebar end -->
            </div>
        </div>
    </div>
    <!-- course area end -->

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




    <!-------------Apply now modal start ------->
    <!-- Modal -->
    <!-- Button trigger modal -->


    <!-- Modal -->
    <div class="modal fade" id="apply_now" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content p-5">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Please Fillup This Form For Apply</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <form class="signup-form text-center">
                  <div class="row">
                      <div class="col-lg-6 col-md-6">
                          <input type="text" name="name" id="name" placeholder="Full  Name">
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <input type="email" placeholder="Email">
                    </div>
                      <div class="col-lg-6 col-md-6">
                          <input type="date" name="date" id="date" >
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <input type="text" name="phone" id="phone" placeholder="Phone">
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <select   name="work" id="work">
                          <option disabled selected>  Work </option>
                          <option value="students"> Students </option>
                          <option value="job_holder"> Job Holder </option>
                        </select>
                    </div>
                      <div class="col-lg-6 col-md-6">
                          <input type="text" name="collage" id="collage" placeholder="Collage">
                      </div>
                      <div class="col-lg-6 col-md-6">
                          <input type="text" name="vercity" id="vercity" placeholder="Univercity">
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <input type="text" name="zilla" id="zilla" placeholder="Zilla ">
                    </div>
                      <div class="col-lg-4 col-md-4">
                          <select   name="country" id="country">
                            <option disabled selected>  Country </option>
                            <option value="Bangladesh"> Bangladesh </option>
                          </select>
                      </div>
                      <div class="col-lg-3 col-md-3">
                          <select   name="gender" id="gender">
                            <option disabled selected> Gender</option>
                            <option value="male"> Male </option>
                            <option value="female"> Female </option>
                          </select>
                      </div>
                      <div class="col-lg-5 col-md-5">
                        <select   name="crouse" id="crouse">
                          <option disabled selected>  Select Crouse </option>
                          <option value="1"> Web Development with java script </option>
                          <option value="2">Graphics Design with Adobi Illastator  </option>
                        </select>
                    </div>
                      <div class="col-lg-12 col-md-12">
                        <textarea name="address" placeholder="Enter Your Address"></textarea>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <select   name="payment" id="payment">
                          <option disabled selected>  Payment </option>
                          <option value="hand_cash"> Hand Cash  </option>
                          <option value="online">Online Payment</option>
                        </select>
                  </div>
                    <div class="col-lg-6 col-md-6">
                        <select   name="payment_method" id="payment_method">
                          <option disabled selected>  Payment method</option>
                          <option value="bkash"> Bkash  </option>
                          <option value="nagad">Nagad</option>
                          <option value="dbbl">Duch Bangla Bank</option>
                        </select>
                  </div>
                    <div class="col-lg-12 col-md-12">
                        <input type="text" name="transaction_number" id="transection" placeholder="Transaction Number">
                  </div>

                  <button class="btn btn-primary form-control" type="submit">Apply </button>
              </form>
            </div>
          </div>
        </div>
      </div>
    <!-------------Apply now modal end ------->
@endsection
