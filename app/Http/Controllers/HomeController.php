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
use App\Models\Header;
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
            'header'=>Header::where('page_name','home_page')->first(),


        ]);
     }
     public function about(){
        return view('web.about',[
            'teachers'=>Teacher::where('status',1)->latest()->get(),
            'abouts'=>About::latest()->get(),
            'video_tour'=>About::first(),
            'header'=>Header::where('page_name','about_page')->first(),

        ]);
     }
     public function teachers(){
        return view('web.teachers',[
            'teachers'=>Teacher::where('status',1)->latest()->paginate(9),
            'header'=>Header::where('page_name','teacher_page')->first(),
        ]);
     }
     public function teachersDetails($id){
        return view('web.teachers_details',[
            'teacher'=>Teacher::find($id),
            'header'=>Header::where('page_name','teacher_details_page')->first(),
        ]);
     }
     public function crouse(){
        return view('web.crouse',[
            'crouses'=>Crouse::where('status',1)->latest()->paginate(6),
            'header'=>Header::where('page_name','crouse_page')->first(),

        ]);
     }
     public function crouseDetails($id){
        return view('web.crouse_details',[
            'crouseDetail'=>Crouse::find($id),
            'latestCrouses'=>Crouse::latest()->where('status',1)->take(6)->get(),
            'header'=>Header::where('page_name','crouse_details_page')->first(),
        ]);
     }
     public function blog(){
        return view('web.blog',[
            'blogs'=>Blog::where('status',1)->latest()->paginate(9),
            'header'=>Header::where('page_name','blog_page')->first(),
        ]);
     }
     public function blogDetails($id){
        return view('web.blog_details',[
            'blogs'=>Blog::where('status',1)->inRandomOrder()->take(6)->get(),
            'blog'=>Blog::find($id),
            'blogCategories'=>BlogCategory::all(),
            'header'=>Header::where('page_name','blog_details_page')->first(),
        ]);
     }
     public function contact(){
        return view('web.contact',[
            'contact'=>Contact::first(),
            'header'=>Header::where('page_name','contact_page')->first(),
        ]);
     }
}