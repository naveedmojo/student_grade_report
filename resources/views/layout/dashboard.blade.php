<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Dashboard')</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

@include('partials.navbar')

<div class="dashboard-container">
    @if(auth('teacher')->check())
       @include('partials.sidebar-teacher')
    @elseif(auth('student')->check())
        @include('partials.sidebar-student')
    @endif

    <div class="dashboard-content">
        @yield('content')
    </div>

</div>
</body>
</html>
