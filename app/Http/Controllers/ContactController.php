<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.contact.index',[
            'contacts'=>Contact::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contact.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'email'=>'required',
            'first_phone'=>'required',
            'secound_phone'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'linkedin'=>'required',
            'youtube'=>'required',
            'instagram'=>'required',
            'map'=>'required',
        ]);
        $contact=new Contact();
        $contact->email=$request->email;
        $contact->first_phone=$request->first_phone;
        $contact->secound_phone=$request->secound_phone;
        $contact->facebook=$request->facebook;
        $contact->twitter=$request->twitter;
        $contact->linkedin=$request->linkedin;
        $contact->youtube=$request->youtube;
        $contact->instagram=$request->instagram;
        $contact->map=$request->map;
        $contact->save();
        Session::flash('success','Contact Added Successfully');
        return redirect()->route('contacts.index');
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
        return view('admin.contact.edit',[
            'contact'=>Contact::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'email'=>'required',
            'first_phone'=>'required',
            'secound_phone'=>'required',
            'facebook'=>'required',
            'twitter'=>'required',
            'linkedin'=>'required',
            'youtube'=>'required',
            'instagram'=>'required',
            'map'=>'required',
        ]);
        $contact=Contact::find($id);
        $contact->email=$request->email;
        $contact->first_phone=$request->first_phone;
        $contact->secound_phone=$request->secound_phone;
        $contact->facebook=$request->facebook;
        $contact->twitter=$request->twitter;
        $contact->linkedin=$request->linkedin;
        $contact->youtube=$request->youtube;
        $contact->instagram=$request->instagram;
        $contact->map=$request->map;
        $contact->save();
        Session::flash('success','Contact updated Successfully');
        return redirect()->route('contacts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::find($id)->delete();
        Session::flash('success','Contact Delete Successfully');
        return redirect()->route('contacts.index');
    }
}