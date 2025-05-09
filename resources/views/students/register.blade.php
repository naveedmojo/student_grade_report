@extends('layout.dashboard')
@section('title', 'Student register')
@section('content')
<h1>Student Register Form</h1>
@if(session('error'))
    <p>{{session('error')}}</p>
@endif

@if(session('success'))
    <h4>{{session('success')}}</h4>
@endif

<div class="form-container">
<form method="post" action="{{route('teacher.studentRegisterSubmit')}}">
    @csrf
    <label for="section_id">Section ID</label>
    <select name="section_id" required>
        @foreach($sections as $section)
            <option value="{{$section->id}}">
                {{$section->name}}
            </option>
        @endforeach
    </select>
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Enter your name" required>

    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Enter your email" required>

    <label for="phone">Phone</label>
    <input type="text"
        pattern="^(?:\+91|91|0)?[6-9]\d{9}$"
            maxlength="13"
            placeholder="Enter a valid Indian phone number"
            title="Phone number must be 10 digits and start with 6-9. Can include +91 or 91."
            name="phone"
            id="phone"
            required>
    <label for="username">Username</label>
    <input type="text" id="username" name="username" placeholder="Enter your username" title="username must be 4-20 charachters and only contains letters numbers or underscores"
           required pattern="^[a-zA-Z0-9_]{4,20}$">

    <label for="password">Password</label>
    <input type="password" id="password" name="password" placeholder="Enter your password" required>

    <input type="hidden" value="{{Auth::user()->id}}" name="teacher_id" />
    <button type="submit">Register</button>
</form>
</div>
@endsection
