<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index_student(){
        return view('auth.student.register');
    }

    public function index_teacher(){
        return view('auth.teacher.register');
    }

    public function store_student(Request $request){
        //validation
        $request->validate([
            'name' => ['required'],
            'second_name' => ['required'],
            'email' => ['required','email','unique:users'],
            'password' => ['required','min:8','confirmed'],
            'password_confirmation' => ['required'],
            'phone_number' => ['required'],
            'class' => ['required'],
            'class_teacher' => ['required'],
            'gender' => ['required','in:male,female,other'],
        ]);

        //add user to DB
        $user = User::create([
            'name' => $request->name,
            'second_name' => $request->second_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone_number,
            'class' => $request->class,
            'class_teacher' => $request->class_teacher,
            'gender' => $request->gender,
            'student' => true
        ]);

        //login user
        Auth::login($user);

        return redirect()->route('student_profile');
    }

    public function store_teacher(Request $request){
        //validation
        $request->validate([
            'name' => ['required'],
            'second_name' => ['required'],
            'email' => ['required','email','unique:users'],
            'password' => ['required','min:8','confirmed'],
            'password_confirmation' => ['required'],
            'phone_number' => ['required'],
            'subject' => ['required'],
            'age' => ['required'],
            'gender' => ['required','in:male,female,other'],
        ]);

        //add user to DB
        $user = User::create([
            'name' => $request->name,
            'second_name' => $request->second_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'phone' => $request->phone_number,
            'gender' => $request->gender,
            'teacher' => true
        ]);

        //add teacher to DB
        Teacher::create([
            'name' => $request->name,
            'second_name' => $request->second_name,
            'email' => $request->email,
            'phone' => $request->phone_number,
            'gender' => $request->gender,
            'age' => $request->age,
            'subject' => $request->subject
        ]);

        //login user
        Auth::login($user);

        return redirect()->route('teacher_profile');
    }
}
