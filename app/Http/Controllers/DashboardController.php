<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard()
    {
        if(auth('teacher')->check()){
            $students=Student::with('section')->get();
            return view('dashboard.teacher',compact('students'));

        }
        elseif (auth('student')->check()) {
            $student_id=Auth::user()->id;
            $student=Student::where('id',$student_id)->first();
            return view('dashboard.student',compact('student'));
        }
    }

}
