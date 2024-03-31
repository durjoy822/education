<?php

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.testimonial.index',[
            'testimonials'=>Testimonial::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.testimonial.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name'=>'required',
            'job_position'=>'required',
            'content'=>'required',
        ]);
        $testimonial= new Testimonial();
        $testimonial->name=$request->name;
        $testimonial->job_position=$request->job_position;
        $testimonial->content=$request->content;
        if($request->image){
            $testimonial->image=$this->getImgUrl($request);
        }
        $testimonial->save();
        Session::flash('success','Testimonial add successfully');
        return redirect()->route('testimonials.index');
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
        return view('admin.testimonial.edit',[
            'testimonial'=>Testimonial::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name'=>'required',
            'job_position'=>'required',
            'content'=>'required',
        ]);
        $testimonial=Testimonial::find($id);
        $testimonial->name=$request->name;
        $testimonial->job_position=$request->job_position;
        $testimonial->content=$request->content;
        if($request->file('image')){
            if(file_exists($testimonial->image)){
                unlink($testimonial->image);
            }
            $testimonial->image=$this->getImgUrl($request);
        }
        $testimonial->save();
        Session::flash('success','Testimonial update successfully');
        return redirect()->route('testimonials.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $testimonial=Testimonial::find($id);
        if(file_exists($testimonial->image)){
            unlink($testimonial->image);
        }
        $testimonial->delete();
        Session::flash('success','Testimonial delete successfully');
        return back();
    }

    public function getImgUrl($request){
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
        $photo=$request->file('image');
        $photoName=$timestamp.'.'.$photo->extension();
        $dir='adminAsset/testimonial/';
        $imgUrl=$dir.$photoName;
        $photo->move($dir,$photoName);
        return $imgUrl;
    }
}