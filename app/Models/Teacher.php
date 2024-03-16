<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;

class Teacher extends Model
{
    use HasFactory;

    private static $teacher,$image,$imageName,$directory;


    public static function teacherStore($request){
        // dd($request->all());
        $request->validate([
            'name'=>'required',
            'department'=>'required',
            'short_description'=>'required',
            'long_description'=>'required',
            'status'=>'required',
            'image'=>'required',
        ]);
            self::$teacher=new Teacher();
            self::$teacher->name=$request->name;
            self::$teacher->department=$request->department;
            self::$teacher->short_description=$request->short_description;
            self::$teacher->long_description=$request->long_description;
            self::$teacher->facebook=$request->facebook;
            self::$teacher->twitter=$request->twitter;
            self::$teacher->instagram=$request->instagram;
            self::$teacher->github=$request->github;
            self::$teacher->status=$request->status;
            self::$teacher->image=Self::fileUpload($request->image,'teacher');
            self::$teacher->save();
            Session::flash('success', 'Teacher information has been stored successfully.');
            return back();
    }

    public static function fileUpload($file, $folder)
{
    $fileName = time() . '_' . $file->getClientOriginalName();
    $file->move(public_path('admin-assets/' . $folder), $fileName);
    return 'uploads/' . $folder . '/' . $fileName;
}


}