@extends('layout.dashboard')

@section('title', 'Teacher Dashboard')

@section('content')
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
           <td><button>view</button></td>
           <td><button>edit</button></td>
       </tr>
    @endforeach
        </tbody>
    </table>
@endsection
