@extends('web.layouts.master')
@section('title')
Blog Details
@endsection
@section('body')
 <!-- crumbs area start -->
 <div class="crumbs-area">
    <div class="container">
        <div class="crumb-content">
            <h4 class="crumb-title"><span>Single</span> Blog Deatils</h4>
        </div>
    </div>
</div>
<!-- crumbs area end -->
<!-- course area start -->
<div class="blog-details-area ptb--120">
    <div class="container">
        <div class="row">
            <!-- course details start -->
            <div class="col-lg-8 col-md-8">
                <div class="course-details">
                    <div class="cs-thumb mb-5">
                        <img src="{{asset($blog->image)}}" alt="image">
                    </div>
                    <div class="cs-content">
                        <div class="blog-top-meta">
                            <ul>
                                <li><i class="fa fa-user"></i>By <span>{{$blog->created_by}}</span></li>
                                <li><i class="fa fa-tag"></i> {{$blog->BlogCategory->name}}</li>
                                <li><i class="fa fa-comment-o"></i>(3) <span>Comments</span></li>
                            </ul>
                        </div>
                        <h3 class="mb-4"><a>{{$blog->title}}</a></h3>

                        <p> {!!$blog->long_description!!}    </p>

                        <div class="cs-post-share">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-12 col-sm-4">
                                    <div class="cs-share-right">
                                        <ul class="cs-social">
                                            <li><a href="{{$blog->facebook}}"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="{{$blog->twitter}}"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="{{$blog->google_plus}}"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="{{$blog->instagram}}"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- post autohr info -->
                    </div>
                </div>
                <!-- comments area end -->
                <div class="comment-area">
                    <h4 class="comment-title">Comments <span>(03)</span></h4>
                    <ul class="comment-list">
                        <li class="comment-info-inner">
                            <article>
                                <div class="comment-thumb">
                                    <img src="{{asset('web')}}/assets/images/author/cs-comment-auth1.jpg" alt="image">
                                </div>
                                <div class="comment-content">
                                    <h4>Tomas</h4>
                                    <p>Ed id interdum urna. Nam ac elit a ante commodo tristique. Duis lacus urna, condimentum a vehicula a, hendrerit ac nisi Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                    <div class="cs-cmnt-meta">
                                        <ul>
                                            <li>AUGUST 6, 2018</li>
                                            <li><span>BY</span> Alebert dos</li>
                                        </ul>
                                        <a href="#">REPLY <i class="fa fa-long-arrow-right"></i></a>
                                    </div>
                                </div>
                            </article>
                            <ul class="children">
                                <li class="comment-info-inner">
                                    <article>
                                        <div class="comment-thumb">
                                            <img src="{{asset('web')}}/assets/images/author/cs-comment-auth2.jpg" alt="image">
                                        </div>
                                        <div class="comment-content">
                                            <h4>John doe</h4>
                                            <p>Ed id interdum urna. Nam ac elit a ante commodo tristique. Duis lacus urna, condimentum a vehicula a, hendrerit ac nisi Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                            <div class="cs-cmnt-meta">
                                                <ul>
                                                    <li>AUGUST 6, 2018</li>
                                                    <li><span>BY</span> Alebert dos</li>
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
                                    <img src="{{asset('web')}}/assets/images/author/cs-comment-auth3.jpg" alt="image">
                                </div>
                                <div class="comment-content">
                                    <h4>Bagun khan</h4>
                                    <p>Ed id interdum urna. Nam ac elit a ante commodo tristique. Duis lacus urna, condimentum a vehicula a, hendrerit ac nisi Lorem ipsum dolor sit amet, consectetur adipiscing elit. </p>
                                    <div class="cs-cmnt-meta">
                                        <ul>
                                            <li>AUGUST 6, 2018</li>
                                            <li><span>BY</span> Alebert dos</li>
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
                        <button  class="btn btn-primary btn-round"  type="submit">Post Comment <i class="fa fa-long-arrow-right"></i></button>
                    </form>
                </div>
                <!-- leave comment area end -->
            </div>
            <!-- course details end -->

            <!-- sidebar start -->
            <div class="col-lg-4 col-md-4">
                <div class="sidebar">
                    <!-- widget nstructor start -->
                    <div class="widget widget-search">
                        <h4 class="widget-title">Search</h4>
                        <form>
                            <input type="text" name="search" placeholder="Search...">
                            <button type="submit"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- widget nstructor end -->
                    <!-- widget offer start -->
                    <div class="widget widget-category">
                        <h4 class="widget-title">Categories</h4>
                        <ul class="list">
                            @foreach ($blogCategories as  $blogCategory)
                            <li><a href="#">{{$blogCategory->name}}</a></li>
                            @endforeach

                        </ul>
                    </div>
                    <!-- widget offer end -->
                    <!-- widget course start -->
                    <div class="widget widget-course">
                        <h4 class="widget-title">Popular Posts</h4>
                        <div class="course-list">
                            @foreach ($blogs as $blog)
                            <div class="w-cs-single">
                                <img src="{{asset($blog->image)}}" alt="image">
                                <div class="fix">
                                     <p><a href="{{route('blog.details',$blog->id)}}">{{$blog->title}}</a></p>
                                    <span><i class="fa fa-clock-o"></i> {{ date('F j, Y', strtotime($blog->creating_date)) }}</span>
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
@endsection
