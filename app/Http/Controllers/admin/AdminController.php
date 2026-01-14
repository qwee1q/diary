<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Middleware\Student;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index(){
        $students = User::where('student',true)->count();
        $teachers = User::where('teacher',true)->count();
        return view('admin.main',compact('students','teachers'));
    }
}
