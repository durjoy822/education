<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\About;
use App\Models\Event;
use App\Models\Crouse;
use App\Models\Contact;
use App\Models\Teacher;
use App\Models\Testimonial;
use App\Models\BlogCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        return view('web.home',[
            'blogs'=>Blog::where('status',1)->get(),
            'crouses'=>Crouse::where('status',1)->latest()->paginate(6),
            'events'=>Event::latest()->take(4)->get(),
            'testimonials'=>Testimonial::latest()->get(),
            'testimonials_Background'=>Testimonial::select('image')->first(),


        ]);
     }
     public function about(){
        return view('web.about',[
            'teachers'=>Teacher::where('status',1)->latest()->get(),
            'abouts'=>About::latest()->get(),
            'video_tour'=>About::first(),
        ]);
     }
     public function teachers(){
        return view('web.teachers',[
            'teachers'=>Teacher::where('status',1)->latest()->paginate(9),
        ]);
     }
     public function teachersDetails($id){
        return view('web.teachers_details',[
            'teacher'=>Teacher::find($id),
        ]);
     }
     public function crouse(){
        return view('web.crouse',[
            'crouses'=>Crouse::where('status',1)->latest()->paginate(6),
        ]);
     }
     public function crouseDetails($id){
        return view('web.crouse_details',[
            'crouseDetail'=>Crouse::find($id),
            'latestCrouses'=>Crouse::latest()->where('status',1)->take(6)->get(),
        ]);
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
        return view('web.contact',[
            'contact'=>Contact::first(),
        ]);
     }
}