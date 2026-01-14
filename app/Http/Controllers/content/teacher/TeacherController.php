<?php

namespace App\Http\Controllers\content\teacher;

use App\Http\Controllers\Controller;
use App\Models\Marks;
use App\Models\Teacher;
use App\Models\User;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    public function index(){
        //get user information
        $user = auth()->user();
        //get teacher information
        $teacher_info = Teacher::where('email', $user->email)->first();
        return view('content.teacher.main', compact('teacher_info'));
    }

    public function index_class($subject,$class){
        //get students from class
        $students = User::where('class', $class)->get();
        return view('content.teacher.class', compact('students','subject', 'class'));
    }

    public function index_marks($subject,$class,$id){
        //get student information
        $student = User::where('id', $id)->first();
        //get student marks
        $marks = Marks::where('subject', $subject)->where('student_id', $id)->get();
        return view('content.teacher.marks', compact('student', 'marks', 'subject', 'class'));
    }

    public function store_marks(Request $request, $subject,$class,$id){
        //validation
        $request->validate([
            'mark' => ['required','numeric','min:1','max:12'],
            'theme' => ['required'],
        ]);

        //get user information
        $teacher = auth()->user();

        //add new mark
        Marks::create([
            'student_id' => $id,
            'teacher_id' => $teacher->id,
            'subject' => $subject,
            'class' => $class,
            'teacher_name' => $teacher->name,
            'mark' => $request->mark,
            'theme' => $request->theme,
            'date' => now(),
        ]);

        return redirect()->route('teacher_marks',['subject' => $subject,'class' => $class,'id' => $id]);
    }
}
