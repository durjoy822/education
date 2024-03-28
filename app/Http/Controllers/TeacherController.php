<?php

namespace App\Http\Controllers;

use App\Models\Crouse;
use App\Models\CrouseCategory;
use Carbon\Carbon;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.teacher.index',[
            'teachers'=>Teacher::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.teacher.create',[
            'crouseCats'=>CrouseCategory::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
            'image' => 'required',
        ]);
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->department = $request->department;
        $teacher->short_description = $request->short_description;
        $teacher->long_description = $request->long_description;
        $teacher->facebook = $request->facebook;
        $teacher->twitter = $request->twitter;
        $teacher->instagram = $request->instagram;
        $teacher->github = $request->github;
        $teacher->status = $request->status;
        $teacher->image = $this->getImageUrl($request);
        $teacher->save();
        Session::flash('success','Teacher create successfully');
        return redirect()->route('teachers.index');
    }




    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('admin.teacher.show',[
            'teacher'=>Teacher::find($id),

        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        return view('admin.teacher.edit',[
            'teacher'=>Teacher::find($id),
            'crouseCats'=>CrouseCategory::all(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'short_description' => 'required|string',
            'long_description' => 'required|string',
        ]);
        $teacher = Teacher::find($id);
        $teacher->name = $request->name;
        $teacher->department = $request->department;
        $teacher->short_description = $request->short_description;
        $teacher->long_description = $request->long_description;
        $teacher->facebook = $request->facebook;
        $teacher->twitter = $request->twitter;
        $teacher->instagram = $request->instagram;
        $teacher->github = $request->github;
        $teacher->status = $request->status;
        if($request->file('image')){
            if(file_exists($teacher->image)){
                unlink($teacher->image);
            }
            $teacher->image=$this->getImageUrl($request);
        }
        $teacher->save();
        Session::flash('success','Teacher updated successfully');
        return redirect()->route('teachers.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $teacher=Teacher::find($id);
        $teacher=Crouse::find($id);
        if(file_exists($teacher->image)){
            unlink($teacher->image);
        }
        Session::flash('success','Teacher Delete successfully');
        return back();

   }

   public function getImageUrl($request){
    $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
    $photo=$request->file('image');
    $photoName=$timestamp.'.'.$photo->extension();
    $dir='adminAsset/teacher/';
    $imgUrl=$dir.$photoName;
    $photo->move($dir,$photoName);
    return $imgUrl;
}
}