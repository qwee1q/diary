@extends('layout.nav')
@section('style')
    <link rel="stylesheet" href="{{asset('css/student.css')}}">
@endsection
@section('nav_btn')
    <li>
        <a href="{{route('logout')}}">Log Out</a>
    </li>
@endsection
@section('main')
    <main>
        <div class="profile-container">
            <div class="student-info">
                <h2>Information</h2>
                <div class="info-row">
                    <span>Name</span>
                    <p>{{$user->name}}</p>
                </div>
                <div class="info-row">
                    <span>Second Name</span>
                    <p>{{$user->second_name}}</p>
                </div>
                <div class="info-row">
                    <span>Class Teacher</span>
                    <p>{{$user->class_teacher}}</p>
                </div>
                <div class="info-row">
                    <span>Class</span>
                    <p>{{$user->class}}</p>
                </div>
                <div class="info-row">
                    <span>Email</span>
                    <p>{{$user->email}}</p>
                </div>
                <div class="status active">
                    Active Student
                </div>
            </div>
            <div class="subjects">
                <h2>Subjects</h2>
                <ul>
                    <li><a href="{{route('student_marks',['subject'=>'math','id'=>$user->id])}}">Math</a></li>
                    <li><a href="{{route('student_marks',['subject'=>'ukraine','id'=>$user->id])}}">Ukraine Language</a></li>
                    <li><a href="{{route('student_marks',['subject'=>'history','id'=>$user->id])}}">History</a></li>
                    <li><a href="{{route('student_marks',['subject'=>'physics','id'=>$user->id])}}">Physics</a></li>
                    <li><a href="{{route('student_marks',['subject'=>'computer_science','id'=>$user->id])}}">Computer Science</a></li>
                    <li><a href="{{route('student_marks',['subject'=>'english','id'=>$user->id])}}">English</a></li>
                </ul>
            </div>
        </div>
    </main>
@endsection
