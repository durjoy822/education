<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OptimizeController extends Controller
{
    public function index(){
        return view('admin.optimize.index');
    }
    public function caseClear(){
        return "oke"; 
    }
}