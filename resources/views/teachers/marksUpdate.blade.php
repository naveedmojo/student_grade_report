@extends('layout.dashboard')

@section('title','Mark Update')


@section('content')
@if(session('success'))
    <h3>{{session('success')}}</h3>
@endif
@if(session('error'))
    <h3>{{session('error')}}</h3>
@endif
<h1>Student Marks Update Form</h1>
<form method="post" action="{{route('teacher.updateMarks')}}">
    @csrf
    <label>Select a student class</label>
    <select name="section_id" required>
        <option value="">select a class</option>
        @foreach($sections as $section)
            <option value="{{$section->id}}">{{$section->name}}</option>
        @endforeach
    </select>

    <label>Select a student</label>
    <select name="student_id" required>
        <option value="">select a student</option>
        @foreach($students as $student)
            <option value="{{$student->id}}">{{$student->name}}</option>
        @endforeach
    </select>


    <lablel>select term</lablel>
    <select required name="term_id" required>
        <option value="">select a term</option>
        @foreach($terms as $term)
            <option value="{{$term->id}}" >{{$term->name}}</option>
        @endforeach
    </select>
    <h4>Enter Marks for subjects</h4>
    @foreach($subjects as $subject)
        <label>{{$subject->name}}</label>
        <input type="number" min="0" max="100" required name="subject_id[{{$subject->id}}]" />
    @endforeach
    <button type="submit"><b>UPDATE MARKS</b></button>

</form>
@endsection
