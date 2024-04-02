@extends('web.layouts.master')
@section('title')
Blog
@endsection
@section('body')
<div class="crumbs-area">
    <div class="container">
        <div class="crumb-content">
            <h4 class="crumb-title"><span>Blog</span> & News</h4>
        </div>
    </div>
</div>
<!-- crumbs area end -->
<!-- blog area start -->
<div class="blog-area  pt--120 pb--70">
    <div class="container">
        <div class="row">
            <!-- blog single start -->
            @foreach ($blogs as $blog )
            <div class="col-lg-4 col-md-6">
              <div class="card mb-5">
                <img class="card-img-top" src="{{asset($blog->image)}}" alt="image">
                <div class="card-body p-25">
                    <ul class="list-inline blog-meta mb-3">
                        <li><i class="fa fa-clock-o"></i> {{ date('F j, Y', strtotime($blog->creating_date)) }}</li>
                        <li><i class="fa fa-comments"></i> 3 Comments</li>
                    </ul>
                  <h4 class="card-title mb-4"><a href='blog-details.html'>{{substr($blog->title,0,50)}}..</a></h4>
                  <p class="card-text">{!!substr($blog->short_description,0,100)!!}..</p>
                  <a class="btn btn-primary btn-round btn-sm" href="{{route('blog.details',$blog->id)}}"> Read More </a>
                </div>
              </div><!-- card -->
            </div>
            @endforeach
            <!-- blog single end -->
        </div>
        <!---pagination-->
        <div class="d-felx justify-content-center">
            {{ $blogs->links('web.layouts.pagination') }}
        </div>
        <!--end pagination-->
    </div>
</div>
<!-- blog area end -->

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
@endsection
