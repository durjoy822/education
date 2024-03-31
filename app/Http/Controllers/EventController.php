<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.event.index',[
            'events'=>Event::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.event.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'title'=>'required',
            'date'=>'required',
            'starting_time'=>'required',
            'closing_time'=>'required',
        ]);
        $event=new Event();
        $event->title=$request->title;
        $event->date=$request->date;
        $event->starting_time=$request->starting_time;
        $event->closing_time=$request->closing_time;
        $event->save();
        Session::flash('success','Event Added successfully');
        return redirect()->route('events.index');
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
        return view('admin.event.edit',[
            'event'=>Event::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'title'=>'required',
            'date'=>'required',
            'starting_time'=>'required',
            'closing_time'=>'required',
        ]);
        $event=Event::find($id);
        $event->title=$request->title;
        $event->date=$request->date;
        $event->starting_time=$request->starting_time;
        $event->closing_time=$request->closing_time;
        $event->save();
        Session::flash('success','Event Updated successfully');
        return redirect()->route('events.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Event::find($id)->delete();
        Session::flash('success','Event Delete successfully');
        return back(); 
    }
}