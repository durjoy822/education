<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Session;

class OptimizeController extends Controller
{
    public function index(){
        return view('admin.optimize.index');
    }

    public function cacheClear(){
         Artisan::call('optimize:clear');
         Session::flash('success','Successfully Cache Clear');
         return back();
    }
    public function migration(){
         Artisan::call('migrate');
         Session::flash('success','Successfully Migration Complete');
         return back();
    }
}
