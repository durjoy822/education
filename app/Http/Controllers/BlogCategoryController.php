<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       return view('admin.blogs.category.index',[
        'blogCats'=>BlogCategory::latest()->get(),
       ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blogs.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'image'=>'nullable',
            'name'=>'required',
        ]);
        $blogCat=new BlogCategory();
        $blogCat->name=$request->name;
        $blogCat->image=$this->getImgUrl($request);
        $blogCat->save();
        Session::flash('success','Blog Category added successfully');
        return redirect()->route('blogs_cats.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.blogs.category.edit',[
            'blogCat'=>BlogCategory::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

        $blogCat=BlogCategory::find($id); 
        $blogCat->name=$request->name;
        if($request->file('image')){
            if(file_exists($blogCat->image)){
                unlink($blogCat->image);
            }
            $blogCat->image=$this->getImgUrl($request);
        }
        $blogCat->save();
        Session::flash('success','Blog Category Updated successfully');
        return redirect()->route('blogs_cats.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blogCat = BlogCategory::find($id);
         if (file_exists($blogCat->image)) {
            unlink($blogCat->image);
    }
    $blogCat->delete();
    Session::flash('success','Blog Category Deleted');
    return back();
    }


    public function getImgUrl($request){
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
        $photo=$request->file('image');
        $photoName=$timestamp.'.'.$photo->extension();
        $dir='adminAsset/blog_category/';
        $imgUrl=$dir.$photoName;
        $photo->move($dir,$photoName);
        return $imgUrl;
    }
}