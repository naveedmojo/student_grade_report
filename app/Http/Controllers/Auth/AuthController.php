<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class AuthController extends Controller
{

   public function showLoginForm()
   {
       return view('auth.login');
   }
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|string|max:255',
            'password' => 'required|string|min:8',
            'role'=>'required|string|in:Teacher,Student',
            ]);
        $username=$validatedData['username'];
        $password=$validatedData['password'];
        $role=$validatedData['role'];
        if($role=='Teacher'){
            if(Auth::guard('teacher')->attempt(['username'=>$username,'password'=>$password])){
                return redirect()->intended('/teacher/dashboard');
            }
        }
        else if($role=='Student'){
            if(Auth::guard('student')->attempt(['username'=>$username,'password'=>$password])){
                return redirect()->intended('/student/dashboard');
            }
        }

        return redirect()->back()->withErrors('Wrong credentials');

    }
    public function logout()
    {
        Auth::logout();
        session()->invalidate();
        session()->regenerate();
        return redirect('/login');
    }
}
