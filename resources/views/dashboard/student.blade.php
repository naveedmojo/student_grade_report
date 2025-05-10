@extends('layout.dashboard')

@section('title', 'Student Dashboard')

@section('content')
    <h1>Welcome to the Student Dashboard</h1>
    <h3>Your details</h3>

    <h4>Name : {{$student->name}}</h4>
    <h4>Class : {{$student->section->name}}</h4>
    <h4>Phone : {{$student->phone}}</h4>
    <h4>Email :  {{$student->email}}</h4>

@endsection
