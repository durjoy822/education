<div class="header-three">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-xl-2 col-lg-3 col-md-6">
                <div class="logo">
                    <a href='{{route('home')}}'><img src="{{asset('web')}}/assets/images/icon/logo-black.png" alt="logo"></a>
                </div>
            </div>
            <div class="col-lg-7 d-none d-lg-block">
                <div class="main-menu menu-style2">
                    <nav>
                        <ul id="m_menu_active">
                            <li class="active"><a href="{{route('home')}}">Home</a>
                            </li>
                            <li><a href='{{route('about')}}'>About</a></li>
                            <li><a href="{{route('crouse')}}">Courses</a>
                                {{-- <ul class="submenu">
                                    <li><a href='{{route('crouse')}}'>courses</a></li>
                                    <li><a href='{{route('crouse.details')}}'>course details</a></li>
                                </ul> --}}
                            </li>
                            <li><a href='{{route('teachers')}}'>Teachers</a></li>
                            <li><a href="{{route('blog')}}">blog</a>
                                {{-- <ul class="submenu">
                                    <li><a href='{{route('blog')}}'>blog</a></li>
                                    <li><a href='{{route('blog.details')}}'>blog details</a></li>
                                </ul> --}}
                            </li>
                            <li><a href='{{route('contact')}}'>Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="col-xl-3 col-lg-2 col-md-5">
                <div class="hb-s3-right">
                    <ul>
                        <li><a class="btn text-danger  btn-info" href="" title="Wishlist"><i class="fa fa-heart" aria-hidden="true"></i> 6</a></li>
                        <li><a class="btn btn-sm btn-primary" href="{{route('login')}}">Login Now</a></li>
                        <li class="search_btn"><i class="fa fa-search"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-12 d-block d-lg-none">
                <div id="mobile_menu"></div>
            </div>
        </div>
    </div>
</div>
