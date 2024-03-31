<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Crouse;
use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\CrouseCategory;

class CrouseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.crouse.crouses.index',[
            'crouses'=>Crouse::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.crouse.crouses.create',[
            'crouseCats'=>CrouseCategory::all(),
            'teachers'=>Teacher::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'crouse_title'=>'required',
            'price'=>'required',
            'crouse_validation'=>'required',
            'class_size'=>'required',
            'class_duration'=>'required',
            'total_seat'=>'required',
            'long_description'=>'required',
            'short_description'=>'required',
        ]);
        $crouse= new Crouse();
        $crouse->category_id=$request->category_id;
        $crouse->teacher_id=$request->teacher_id;
        $crouse->crouse_title=$request->crouse_title;
        $crouse->price=$request->price;
        $crouse->crouse_validation=$request->crouse_validation;
        $crouse->class_size=$request->class_size;
        $crouse->class_duration=$request->class_duration;
        $crouse->total_seat=$request->total_seat;
        $crouse->short_description=$request->short_description;
        $crouse->long_description=$request->long_description;
        $crouse->status=$request->status;
        if($request->image){
            $crouse->image=$this->getImgUrl($request);
        }
        $crouse->save();
        return redirect()->route('crouses.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.crouse.crouses.show',[
            'crouse'=>Crouse::find($id),
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('admin.crouse.crouses.edit',[
            'crouse'=>Crouse::find($id),
            'crouseCats'=>CrouseCategory::all(),
            'teachers'=>Teacher::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'crouse_title'=>'required',
            'price'=>'required',
            'crouse_validation'=>'required',
            'class_size'=>'required',
            'class_duration'=>'required',
            'total_seat'=>'required',
            'long_description'=>'required',
            'short_description'=>'required',
        ]);
        $crouse=Crouse::find($id);
        $crouse->category_id=$request->category_id;
        $crouse->teacher_id=$request->teacher_id;
        $crouse->crouse_title=$request->crouse_title;
        $crouse->price=$request->price;
        $crouse->crouse_validation=$request->crouse_validation;
        $crouse->class_size=$request->class_size;
        $crouse->class_duration=$request->class_duration;
        $crouse->total_seat=$request->total_seat;
        $crouse->short_description=$request->short_description;
        $crouse->long_description=$request->long_description;
        $crouse->status=$request->status;
        if($request->file('image')){
            if(file_exists($crouse->image)){
                unlink($crouse->image);
            }
            $crouse->image=$this->getImgUrl($request);
        }
        $crouse->save();
        return redirect()->route('crouses.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function getImgUrl($request){
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
        $photo=$request->file('image');
        $photoName=$timestamp.'.'.$photo->extension();
        $dir='adminAsset/crouse/';
        $imgUrl=$dir.$photoName;
        $photo->move($dir,$photoName);
        return $imgUrl;
    }
}