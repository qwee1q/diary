<?php

namespace App\Http\Controllers\content\student;

use App\Http\Controllers\Controller;
use App\Models\Marks;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        //get user information
        $user = auth()->user();
        return view('content.student.main',compact('user'));
    }

    public function index_marks($subject,$id){
        //get user marks
        $marks = Marks::where('student_id',$id)->where('subject',$subject)->get();
        return view('content.student.marks',compact('subject','marks'));
    }
}
