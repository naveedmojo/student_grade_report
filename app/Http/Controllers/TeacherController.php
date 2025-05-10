<?php

namespace App\Http\Controllers;

use App\Models\Grade;
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
    public function gradeReport(Request $request)
    {
        try{
            $validatedData = $request->validate([
                'student_id' => 'required|exists:students,id',
            ]);
            $subjects=Subject::all();
            $student_marks=Student::where('id',$validatedData['student_id'])->with('grade.term','grade.subject')->get()[0]->grade->toArray();
            $grade_report=[];
            $terms=Term::all()->pluck('name')->toArray();
            foreach($student_marks as $student_mark){
              $grade_report[$student_mark['subject']['name']][$student_mark['term']['name']]=['grade'=>$student_mark['grade'],'marks'=>$student_mark['marks'],'result'=>$student_mark['result']];
            }
            return view('students.gradeReport',compact('grade_report','terms'));
        }
        catch (\Exception $exception){
            return redirect()->back()->with('error',$exception->getMessage());
    }

    }
    public function updateMarksForm(Request $request)
    {
        $student_id=$request->student_id;
        $terms=Term::all();
        $subjects=Subject::all();
        $marks=Student::with('grade')->find($student_id);

        return view('teachers.marksUpdate',compact('terms','subjects','student_id'));
    }
    public function studentUpdateMarks(Request $request)
    {
        try {

            $validatedData = $request->validate([
                'student_id' => 'required|numeric|exists:students,id',
                'subject_id.*' => 'required|numeric|min:0|max:100',
                'term_id' => 'required|exists:terms,id',
            ]);

            foreach ($validatedData['subject_id'] as $key => $value) {
                $grade = '';
                $result = '';
                if ($value >= 90) {
                    $grade = 'A+';
                } else if ($value >= 80) {
                    $grade = 'A';
                } else if ($value >= 70) {
                    $grade = 'B+';
                } else if ($value >= 60) {
                    $grade = 'B';
                } else if ($value >= 50) {
                    $grade = 'C+';
                } else if ($value >= 40) {
                    $grade = 'C';
                } else if ($value >= 25) {
                    $grade = 'D';
                } else {
                    $grade = 'F';
                }
                if ($grade === 'F') {
                    $result = 'FAIL';
                } else {
                    $result = 'PASS';
                }
                Grade::updateOrCreate(
                    [
                        'subject_id' => $key,
                        'student_id' => $validatedData['student_id'],
                        'term_id' => $validatedData['term_id'],
                    ],
                    [
                        'marks' => $value,
                        'grade' => $grade,
                        'result' => $result,
                    ]
                );
            }
            return redirect()->back()->with('success', 'Marks updated succesfully');
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }
    }
    public function getMarks($studentId, $termId)
        {
            $marks = Grade::where('student_id', $studentId)
                ->where('term_id', $termId)
                ->get(['subject_id', 'marks']);
            return response()->json(['marks' => $marks]);
        }



}
