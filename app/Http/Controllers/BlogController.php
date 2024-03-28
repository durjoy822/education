<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Blog;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.blogs.blog.index',[
            'blogs'=>Blog::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.blog.create',[
            'blogCats'=>BlogCategory::all(),
        ]);

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
       $request->validate([
        'title'=>'required',
        'image'=>'required',
        'short_description'=>'required',
        'long_description'=>'required',
       ]);
       $blog=new Blog();
       $blog->title=$request->title;
       $blog->created_by=$request->created_by;
       $blog->creating_date=$request->creating_date;
       $blog->blog_category_id=$request->blog_category_id;
       $blog->short_description=$request->short_description;
       $blog->long_description=$request->long_description;
       $blog->facebook=$request->facebook;
       $blog->twitter=$request->twitter;
       $blog->instagram=$request->instagram;
       $blog->google_plus=$request->google_plus;
       $blog->status=$request->status;
       $blog->image=$this->getImgUrl($request);
       $blog->save();
       Session::flash('success','Blog Added  Successfully');
       return redirect()->route('blogs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.blogs.blog.show',[
            'blog'=>Blog::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
         return view('admin.blogs.blog.edit',[
            'blog'=>Blog::find($id),
            'blogCats'=>BlogCategory::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>'required',
            'short_description'=>'required',
            'long_description'=>'required',
           ]);
           $blog=Blog::find($id);
           $blog->title=$request->title;
           $blog->created_by=$request->created_by;
           $blog->blog_category_id=$request->blog_category_id;
           $blog->creating_date=$request->creating_date;
           $blog->short_description=$request->short_description;
           $blog->long_description=$request->long_description;
           $blog->facebook=$request->facebook;
           $blog->twitter=$request->twitter;
           $blog->instagram=$request->instagram;
           $blog->google_plus=$request->google_plus;
           $blog->status=$request->status;
           if($request->file('image')){
            if(file_exists($blog->image)){
                unlink($blog->image);
            }
            $blog->image=$this->getImgUrl($request);
           }
           $blog->save();
           Session::flash('success','Blog Updated  Successfully');
           return redirect()->route('blogs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog=Blog::find($id);
        if(file_exists('image')){
            unlink($blog->image);
        }
        $blog->delete();
        Session::flash('success','Blog Delete  Successfully');
        return back();
    }

    public function getImgUrl($request){
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
        $photo=$request->file('image');
        $photoName=$timestamp.'.'.$photo->extension();
        $dir='adminAsset/blog/';
        $imgUrl=$dir.$photoName;
        $photo->move($dir,$photoName);
        return $imgUrl;
    }
}