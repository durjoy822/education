<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Header;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class HeaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.header.index',[
            'headers'=>Header::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.header.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'page_name'=>'required',
            'image'=>'required',
        ]);
        $header=new Header();
        $header->page_name=$request->page_name;
        $header->image=$this->getImgUrl($request);
        $header->save();
        Session::flash('success','Header added successfully');
        return redirect()->route('headers.index');
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
        return view('admin.header.edit',[
            'header'=>Header::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'page_name'=>'required',
        ]);
        $header = Header::find($id);
        $header->page_name=$request->page_name;
        if($request->file('image')){
            if(file_exists($header->image)){
                unlink($header->image);
            }
            $header->image=$this->getImgUrl($request);
        }
        $header->save();
        Session::flash('success','Header Updated successfully');
        return redirect()->route('headers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $header=Header::find($id);
        if(file_exists($header->image)){
            unlink($header->image);
        }
        $header->delete();
        Session::flash('success','Header Delete successfully');
        return back();
    }
    public function getImgUrl($request){
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
        $photo=$request->file('image');
        $photoName=$timestamp.'.'.$photo->extension();
        $dir='adminAsset/header/';
        $imgUrl=$dir.$photoName;
        $photo->move($dir,$photoName);
        return $imgUrl;
    }
}
