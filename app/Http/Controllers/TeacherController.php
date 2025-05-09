<?php

namespace App\Http\Controllers;

use App\Models\Section;
use App\Models\Student;
use App\Models\Subject;
use App\Models\Term;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class TeacherController extends Controller
{
    public function studentRegisterForm()
    {
        $sections=Section::all();
        return view('students.register',compact('sections'));
    }
    public function studentRegister(Request $request)
    {
        try{
            $validatedData = $request->validate([
                'name' => 'required|max:255',
                'email' => 'required|unique:students|max:255',
                'phone' => ['required', 'unique:students', 'regex:/^(?:\+91|91|0)?[6-9]\d{9}$/', 'max:255'],
                'section_id' => 'required|exists:sections,id',
                'teacher_id' => 'required|exists:teachers,id',
                'password' => 'required|min:6',
                'username' => ['required', 'regex:/^[a-zA-Z0-9_]{4,20}$/','unique:students'],
            ], [
                'phone.regex' => 'The phone number must be a valid Indian mobile number.',
                'username.regex' => 'The username must be 4-20 characters long and contain only letters, numbers, and underscores.',
            ]);
            $validatedData['password'] = Hash::make($validatedData['password']);

            Student::create($validatedData);
            return redirect()->back()->with('success','Student created succesfully');
        }
       catch (\Exception $exception){
            return redirect()->back()->with('error',$exception->getMessage());
       }

    }
    public function gradeReport()
    {
        return view('students.gradeReport');
    }
    public function updateMarksForm()
    {
        return view('teachers.marksUpdate');
    }
    public function studentUpdateMarks(Request $request){
        dd($request->all());
    }
}
