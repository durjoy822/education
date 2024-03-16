<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Models\CrouseCategory;
use Illuminate\Support\Facades\Session;

class CrouseCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.crouse.category.index',[
            'crouseCats'=>CrouseCategory::latest()->get(),
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
            'name'=>'required|unique:crouse_categories',
            'image'=>'required',
        ]);
        $crouseCat=new CrouseCategory() ;
        $crouseCat->name=$request->name;
        $crouseCat->image=$this->getImgUrl($request);
        $crouseCat->save();
       return response()->json([
        'status'=> 'success',
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'up_name' => 'required',
            'up_image' => 'nullable',
        ]);

        $category = CrouseCategory::findOrFail($id);
        $category->name = $request->input('up_name');
        if ($request->hasFile('up_image')) {
            $image = $request->file('up_image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            $category->image = 'images/' . $imageName;
        }
        $category->save();
        return response()->json([
            'status' => 'success'
    ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, $id){

    $courseCat = CrouseCategory::find($id);
    if (file_exists($courseCat->image)) {
        unlink($courseCat->image);
    }
    $courseCat->delete();
    return response()->json([
        'status' => 'success',
        'message' => 'Course category deleted successfully'
    ]);
}

    public function getImgUrl($request){
        $timestamp = Carbon::now()->format('Y-m-d_H-i-s');
        $photo=$request->file('image');
        $photoName=$timestamp.'.'.$photo->extension();
        $dir='adminAsset/crouse-category/';
        $imgUrl=$dir.$photoName;
        $photo->move($dir,$photoName);
        return $imgUrl;
    }
}