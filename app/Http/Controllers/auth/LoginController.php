<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function index_student(){
        return view('auth.student.login');
    }

    public function index_teacher(){
        return view('auth.teacher.login');
    }

    public function store_student(Request $request){
        //validation
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        //check user credentials
        if (! Auth::attempt($credentials,$request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        //regenerate session id
        $request->session()->regenerate();

        return redirect()->intended('/student/profile');
    }

    public function store_teacher(Request $request){
        //validation
        $credentials = $request->validate([
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'min:8'],
        ]);

        //check user credentials
        if (! Auth::attempt($credentials,$request->boolean('remember'))) {
            throw ValidationException::withMessages([
                'email' => trans('auth.failed'),
            ]);
        }

        //regenerate session id
        $request->session()->regenerate();

        return redirect()->intended('/teacher/profile');
    }

    public function logout(){
        //log out
        Auth::logout();

        return redirect('/');
    }
}
