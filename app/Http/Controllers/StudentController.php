<?php

namespace App\Http\Controllers;

use App\Models\Subject;
use App\Models\Term;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Grade;
use Illuminate\Support\Facades\Auth;
class StudentController extends Controller
{
    public function gradeReport()
    {

        try {
            $student_id = Auth::user()->id;
            $subjects =Subject::all();
            $student_marks = Student::where('id', $student_id)->with('grade.term', 'grade.subject')->get()[0]->grade->toArray();
            $grade_report = [];
            $terms = Term::all()->pluck('name')->toArray();
            foreach ($student_marks as $student_mark) {
                $grade_report[$student_mark['subject']['name']][$student_mark['term']['name']] = ['grade' => $student_mark['grade'], 'marks' => $student_mark['marks'], 'result' => $student_mark['result']];
            }
            return view('students.gradeReport', compact('grade_report', 'terms'));
        } catch (\Exception $exception) {
            return redirect()->back()->with('error', $exception->getMessage());
        }


    }
}
