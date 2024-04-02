<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('web.home',[
            'blogs'=>Blog::where('status',1)->get(),
        ]);
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
        return view('web.blog',[
            'blogs'=>Blog::where('status',1)->latest()->paginate(9),
        ]);
     }
     public function blogDetails($id){
        return view('web.blog_details',[
            'blogs'=>Blog::where('status',1)->inRandomOrder()->take(6)->get(),
            'blog'=>Blog::find($id),
            'blogCategories'=>BlogCategory::all(),
        ]);
     }
     public function contact(){
        return view('web.contact');
     }
}