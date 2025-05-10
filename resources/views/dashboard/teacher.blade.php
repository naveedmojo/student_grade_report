@extends('layout.dashboard')

@section('title', 'Teacher Dashboard')
<style>

    a{
        text-decoration: none;

    }
</style>
@section('content')
    @if(session('error'))
        <p>{{session('error')}}</p>
    @endif
    <h1>Welcome to the Teacher Dashboard</h1>
    <p>YOU CAN MANAGE STUDENTS HERE</p>
    <table border="1px" cellpadding="5px" >
        <thead>
            <tr>
                <th>
                    name
                </th>
                <th>
                     email
                </th>
                <th>
                     phone
                </th>
                <th>
                     section
                </th>
                <th colspan="2">
                    action
                </th>
            </tr>

        </thead>
        <tbody>

    @foreach($students as $student)
       <tr>
           <td>{{$student->name}}</td>
           <td>{{$student->email}}</td>
           <td>{{$student->phone}}</td>
           <td>{{$student->section->name}}</td>
           <td><button><a href="{{route('teacher.gradeReport')}}?student_id={{$student->id}}">view</a></button></td>
           <td><button><a>edit</a></button></td>
       </tr>
    @endforeach
        </tbody>
    </table>
@endsection
