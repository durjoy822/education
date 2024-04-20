<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Terms;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function login() {
        return view('web.auth.login');
    }

    public function register() {
        return view('web.auth.register',[
            'terms'=>Terms::first(),
        ]);
    }
    public function authStore( Request $request ) {
       $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required|min:6|max:12',
        'confirm_password'=>'required',
       ]);
       $student=new Student();
       $student->name=$request->name;
       $student->email=$request->email;
       if($request->password==$request->confirm_password){
        $student->password=bcrypt($request->password);
       }
       $student->save();
       Session::flash('success','Student Login Successfully');
       return redirect()->route('student.dashboard');
    }

    public function loginCheck(Request $request){
        $request->validate([
            'email'=>'required|email|exists:students,email',
            'password'=>'required|min:6|max:12',
        ]);
        if(Auth::guard('student')->attempt([
            'email'=>$request->email,
            'password'=>$request->password,
        ])){
            Session::flash('success','login Successfully');
            return redirect()->route('student.dashboard');
        }else{
            Session::flash('success','Give a right Information');
            return back();
        }
    }

    public function studentLogout()
    {
        Auth::guard('student')->logout();
        Session::flash('success', 'Logout success');
        return redirect()->route('home');
    }
}
