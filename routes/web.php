<?php

use Illuminate\Support\Facades\Route;

Route::get('/login', 'App\Http\Controllers\Auth\AuthController@showLoginForm');
Route::post('/login', 'App\Http\Controllers\Auth\AuthController@login')->name('login');
Route::post('/logout', 'App\Http\Controllers\Auth\AuthController@logout')->name('logout');
Route::get('/student/dashboard', 'App\Http\Controllers\DashboardController@dashboard')->middleware('auth:student')->name('student.dashboard');
Route::get('/teacher/dashboard', 'App\Http\Controllers\DashboardController@dashboard')->middleware('auth:teacher')->name('teacher.dashboard');
Route::get('/teacher/dashboard/student-register', 'App\Http\Controllers\TeacherController@studentRegisterForm')->middleware('auth:teacher')->name('teacher.studentRegister');
Route::post('/teacher/dashboard/student-register', 'App\Http\Controllers\TeacherController@studentRegister')->middleware('auth:teacher')->name('teacher.studentRegisterSubmit');
Route::get('/teacher/dashboard/grade-report', 'App\Http\Controllers\TeacherController@gradeReport')->middleware('auth:teacher')->name('teacher.gradeReport');
Route::get('/teacher/dashboard/update-marks', 'App\Http\Controllers\TeacherController@updateMarksForm')->middleware('auth:teacher')->name('teacher.updateMarksForm');
Route::post('/teacher/dashboard/update-marks', 'App\Http\Controllers\TeacherController@studentUpdateMarks')->middleware('auth:teacher')->name('teacher.updateMarks');
Route::get('/student/dashboard/grade-report', 'App\Http\Controllers\StudentController@gradeReport')->middleware('auth:student')->name('student.gradeReport');

