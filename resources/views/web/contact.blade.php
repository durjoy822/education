@extends('web.layouts.master')
@section('title')
    Contact
@endsection
@section('body')
    <!-- crumbs area start -->
    @if ($header->image)
    <div class="crumbs-area" style="background-image: url({{ asset($header->image) }})">
    @else
        <div class="crumbs-area"
            style="background-image:url({{ asset('web') }}/assets/images/not_found/header_not_found.png)">
    @endif
        <div class="container">
            <div class="crumb-content">
                <h4 class="crumb-title"><span>Contact </span>Us</h4>
            </div>
        </div>
    </div>
    <!-- crumbs area end -->
    <!-- contact info area start -->
    <div class="contact-info ptb--120">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="cnt-info">
                        <h4>Contact Info</h4>
                        <p>PO Box CT16133 Collins Street West, Victoria 8007, Australia.</p>
                        <ul class="address">
                            <li><i class="fa fa-phone"></i>{{$contact->first_phone}}</li>
                            <li><i class="fa fa-phone"></i>{{$contact->secound_phone}}</li>
                            <li><i class="fa fa-envelope"></i>{{$contact->email}}</li>
                        </ul>
                        <ul class="social list-inline mt-5">
                            <li><a href="{{$contact->facebook}}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{$contact->twitter}}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{$contact->instagram}}"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{$contact->linkedin}}"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="{{$contact->youtube}}"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div id="google-map"><img src="{{$contact->map}}"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact info area end -->
    <!-- contact form area start -->
    <div class="contact-form-area pb--120">
        <div class="container">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <div class="cnt-title">
                        <h4>Get in touch <span>with us</span></h4>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form>
                    <div class="row">
                        <div class="col-md-4">
                            <input type="text" name="name" placeholder="Enter your name">
                        </div>
                        <div class="col-md-4">
                            <input type="email" name="email" placeholder="Your Email">
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="subject" placeholder="Subject">
                        </div>
                        <div class="col-12">
                            <textarea name="msg" id="msg" placeholder="Your message here"></textarea>
                        </div>
                        <div class="col-12 text-center">
                            <button type="submit">SEND TO US</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- contact form area end -->
@endsection
