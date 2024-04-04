<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class NewsletterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.newsletter.index',[
            'newsletters'=>Newsletter::latest()->get(),
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
            'email'=>'required|email|unique:newsletters'
        ],[
            'email.required'=>'Email field is required',
            'email.email'=>'Please enter right email address',
            'email.unique'=>'Already exist this email in database ',
        ]);

        $newsletter = new Newsletter();
        $newsletter->email= $request->email;
        $newsletter->save();
        return response()->json([
            'status'=>'success',
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Newsletter::find($id)->delete();
        Session::flash('success','Subscribable email Deleted');
        return back(); 
    }
}