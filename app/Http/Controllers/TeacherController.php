<?php

namespace App\Http\Controllers;

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

        // return Teacher::latest()->get();
        return view('admin.teacher.index',[
            'teachers'=>Teacher::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'shortDescription' => 'required|string',
            'longDescription' => 'required|string',
            'image' => 'required',
        ]);
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->department = $request->department;
        $teacher->short_description = $request->shortDescription;
        $teacher->long_description = $request->longDescription;
        $teacher->facebook = $request->facebook;
        $teacher->twitter = $request->twitter;
        $teacher->instagram = $request->instagram;
        $teacher->github = $request->github;
        $teacher->status = $request->status;
        $teacher->image = $this->fileUpload($request);
        $teacher->save();
        return response()->json([
            'status' => 'success'
    ]);

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
    public function edit($id)
    {
        // $teacher= Teacher::find($_GET['id']);
        // $teacher->image = asset($teacher->image);
        // return response()->json($teacher);
        $teacher=Teacher::find($id);
        return view('admin.teacher.index',[
            'teacher'=>$teacher,
            'teachers'=>Teacher::latest()->get(),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'department' => 'required|string|max:255',
            'shortDescription' => 'required|string',
            'longDescription' => 'required|string',
            'image' => 'required',
        ]);
        $teacher = Teacher::findOrFail($id);
        $teacher->name = $request->name;
        $teacher->department = $request->department;
        $teacher->short_description = $request->shortDescription;
        $teacher->long_description = $request->longDescription;
        $teacher->facebook = $request->facebook;
        $teacher->twitter = $request->twitter;
        $teacher->instagram = $request->instagram;
        $teacher->github = $request->github;
        $teacher->status = $request->status;
        if($request->file('image')){
            if(file_exists($teacher->image)){
                unlink($teacher->image);
            }
            $teacher->image = $this->fileUpload($request);
        }
        $teacher->save();
        return response()->json([
            'status' => 'success'
    ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //

   }

   public function fileUpload($request){
    $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
    $photo=$request->file('image');
    $photoName=$timestamp.'.'.$photo->extension();
    $dir='adminAsset/teacher/';
    $imgUrl=$dir.$photoName;
    $photo->move($dir,$photoName);
    return $imgUrl;
}
}