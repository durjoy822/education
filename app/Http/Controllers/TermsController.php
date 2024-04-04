<?php

namespace App\Http\Controllers;

use App\Models\Terms;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class TermsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.terms.index',[
            'terms'=>Terms::latest()->get(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.terms.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'terms'=>'required',
        ]);
        $terms=new Terms();
        $terms->terms=$request->terms;
        $terms->save();
        Session::flash('success','Terms & condition create successfully');
        return redirect()->route('terms.index');
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
        return view('admin.terms.edit',[
            'term'=>Terms::find($id),
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'terms'=>'required',
        ]);
        $terms=Terms::find($id);
        $terms->terms=$request->terms;
        $terms->save();
        Session::flash('success','Terms & condition updated successfully');
        return redirect()->route('terms.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Terms::find($id)->delete();
        Session::flash('success','Terms & condition deleted');
        return back();
    }
}