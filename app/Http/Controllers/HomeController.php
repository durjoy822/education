<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('web.home');
     }
     public function about(){
        return view('web.about');
     }
     public function teachers(){
        return view('web.teachers');
     }
     public function teachersDetails(){
        return view('web.teachers_details');
     }
     public function crouse(){
        return view('web.crouse');
     }
     public function crouseDetails(){
        return view('web.crouse_details');
     }
     public function blog(){
        return view('web.blog');
     }
     public function blogDetails(){
        return view('web.blog_details');
     }
     public function contact(){
        return view('web.contact');
     }
}