<?php

namespace App\Http\Controllers;

use App\Models\Crouse;
use App\Models\CrouseCategory;
use App\Models\Teacher;
use Illuminate\Http\Request;

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
        // return $request->all();
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
        $crouse->image=$request->image;
        $crouse->save();
        return redirect()->route('crouses.index');
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}