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
                    <p>{{$teacher_info->name}}</p>
                </div>
                <div class="info-row">
                    <span>Second Name</span>
                    <p>{{$teacher_info->second_name}}</p>
                </div>
                <div class="info-row">
                    <span>Subject</span>
                    <p>{{$teacher_info->subject}}</p>
                </div>
                <div class="info-row">
                    <span>Email</span>
                    <p>{{$teacher_info->email}}</p>
                </div>
                <div class="status active">
                    Active Teacher
                </div>
            </div>
            <div class="subjects">
                <h2>Class</h2>
                <ul>
                    <li><a href="{{route('teacher_class',['subject' => $teacher_info->subject,'class' => '11A'])}}">11A</a></li>
                    <li><a href="{{route('teacher_class',['subject' => $teacher_info->subject,'class' => '11B'])}}">11B</a></li>
                    <li><a href="{{route('teacher_class',['subject' => $teacher_info->subject,'class' => '10A'])}}">10A</a></li>
                    <li><a href="{{route('teacher_class',['subject' => $teacher_info->subject,'class' => '10B'])}}">10B</a></li>
                    <li><a href="{{route('teacher_class',['subject' => $teacher_info->subject,'class' => '9A'])}}">9A</a></li>
                    <li><a href="{{route('teacher_class',['subject' => $teacher_info->subject,'class' => '9B'])}}">9B</a></li>
                </ul>
            </div>
        </div>
    </main>
@endsection
