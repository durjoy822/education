<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\About;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.about.index',[
            'abouts'=>About::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.about.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'video_link'=>'required',
            'about'=>'required',
        ]);
        $about=new About();
        if($request->image){
            $about->image=$this->getImgUrl($request);
        }
        $about->video_link=$request->video_link;
        $about->about=$request->about;
        $about->save();
        Session::flash('success','About add successfully');
        return redirect()->route('abouts.index');
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
        return view('admin.about.edit',[
            'about'=>About::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'video_link'=>'required',
            'about'=>'required',
        ]);
        $about=About::find($id);
        if($request->file('image')){
            if(file_exists($about->image)){
                unlink($about->image);
            }
            $about->image=$this->getImgUrl($request);
        }
        $about->video_link=$request->video_link;
        $about->about=$request->about;
        $about->save();
        Session::flash('success','About add successfully');
        return redirect()->route('abouts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $about=About::find($id);
        if(file_exists($about->image)){
            unlink($about->image);
        }
        $about->delete();
        Session::flash('success','About deleted successfully');
        return back();
    }

    public function getImgUrl($request){
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
        $photo=$request->file('image');
        $photoName=$timestamp.'.'.$photo->extension();
        $dir='adminAsset/about/';
        $imgUrl=$dir.$photoName;
        $photo->move($dir,$photoName);
        return $imgUrl;
    }
}
