<!doctype html>
<html class="no-js" lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
  @include('web.layouts.head')
</head>

<body>
    <!-- preloader area start -->
    <div id="preloader">
        <div class="loader"></div>
    </div>
    <!-- prealoader area end -->
    <!-- header area start -->
    <header id="header">
        <!-- header two area start -->
      @include('web.layouts.navbar')
        <!-- header two area end -->
    </header>
    <!-- header area end -->
    <!-- offset search area start -->
    <div class="offset-search">
        <form action="#">
            <input type="text" name="search" placeholder="Sarch here...">
            <button type="submit"><i class="fa fa-search"></i></button>
        </form>
    </div>
    <!-- offset search area end -->
    <!-- body overlay area start -->
    <div class="body_overlay"></div>
    <!-- body overlay area end -->
    @yield('body')

    <footer>
      @include('web.layouts.footer')
    </footer>

   @include('web.layouts.script')
</body>
</html>
