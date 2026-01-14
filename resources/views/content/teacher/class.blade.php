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
    <div class="container">
        <h1 class="h1">Student List</h1>

        <ul class="students-list">
            @foreach($students as $student)
                <li><a href="{{route('teacher_marks',['subject' => $subject,'class' => $class,'id' => $student->id])}}">{{$student->name}} {{$student->second_name}}</a></li>
            @endforeach
        </ul>
    </div>
@endsection
