<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function gradeReport()
    {
        return view('students.gradeReport');
    }
}
