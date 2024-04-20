<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentDashboard extends Controller
{
    public function studentDashboard(){
        return view('web.dashboard.student_dashboard');
    }
}