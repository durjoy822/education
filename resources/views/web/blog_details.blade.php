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
                        <img src="{{asset('web')}}/assets/images/blog/blog-details.jpg" alt="image">
                    </div>
                    <div class="cs-content">
                        <div class="blog-top-meta">
                            <ul>
                                <li><i class="fa fa-user"></i>By <span>Sajib</span></li>
                                <li><i class="fa fa-tag"></i> CSE , GMAT</li>
                                <li><i class="fa fa-comment-o"></i>(3) <span>Comments</span></li>
                            </ul>
                        </div>
                        <h3 class="mb-4"><a href="#">Excepteur sint occaecat cupidatat non proident </a></h3>

                        <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore voluptatem.</p>
                        <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem.</p>
                        <div class="cs-post-share">
                            <div class="row align-items-center">
                                <div class="col-lg-7 col-md-12 col-sm-4">
                                    <div class="cs-share-right">
                                        <ul class="cs-social">
                                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- post autohr info -->
                        <div class="post-author-info">
                            <div class="thumb">
                                <img src="{{asset('web')}}/assets/images/author/cs-post-author1.jpg" alt="image">
                            </div>
                            <div class="fix">
                                <h4>Rebeka</h4>
                                <p>Aenean id ullamcorper libero. Vestibulum imperdiet nibh vel magna lacinia ultrices. Sed id interdum urna. onsectetur adipiscing elit. faucibus risus, a euismod lorem hendrerit ac nisi</p>
                                <ul class="social">
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                </ul>
                            </div>
                        </div>
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
                            <li><a href="#">GMAT</a></li>
                            <li><a href="#">BUSINESS</a></li>
                            <li><a href="#">CSE</a></li>
                            <li><a href="#">PYTHON</a></li>
                            <li><a href="#">IELTS</a></li>
                        </ul>
                    </div>
                    <!-- widget offer end -->
                    <!-- widget course start -->
                    <div class="widget widget-course">
                        <h4 class="widget-title">Popular Posts</h4>
                        <div class="course-list">
                            <div class="w-cs-single">
                                <img src="{{asset('web')}}/assets/images/course/cs-small-thumb1.jpg" alt="image">
                                <div class="fix">
                                     <p><a href="#">Ui / Ux Design</a></p>
                                    <span><i class="fa fa-clock-o"></i> AUGUST 6, 2017</span>
                                </div>
                            </div>
                            <div class="w-cs-single">
                                <img src="{{asset('web')}}/assets/images/course/cs-small-thumb2.jpg" alt="image">
                                <div class="fix">
                                     <p><a href="#">Learn Java</a></p>
                                    <span><i class="fa fa-clock-o"></i> AUGUST 6, 2017</span>
                                </div>
                            </div>
                            <div class="w-cs-single">
                                <img src="{{asset('web')}}/assets/images/course/cs-small-thumb3.jpg" alt="image">
                                <div class="fix">
                                     <p><a href="#">C++</a></p>
                                    <span><i class="fa fa-clock-o"></i> AUGUST 6, 2017</span>
                                </div>
                            </div>
                            <div class="w-cs-single">
                                <img src="{{asset('web')}}/assets/images/course/cs-small-thumb4.jpg" alt="image">
                                <div class="fix">
                                     <p><a href="#">Seo</a></p>
                                    <span><i class="fa fa-clock-o"></i> AUGUST 6, 2017</span>
                                </div>
                            </div>
                            <div class="w-cs-single">
                                <img src="{{asset('web')}}/assets/images/course/cs-small-thumb5.jpg" alt="image">
                                <div class="fix">
                                     <p><a href="#">Python</a></p>
                                    <span><i class="fa fa-clock-o"></i> AUGUST 6, 2017</span>
                                </div>
                            </div>
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
