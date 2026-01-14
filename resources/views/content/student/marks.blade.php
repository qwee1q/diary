@extends('layout.nav')
@section('style')
    <link rel="stylesheet" href="{{asset('css/marks.css')}}">
@endsection
@section('nav_btn')
    <li>
        <a href="{{route('student_profile')}}">Back</a>
    </li>
    <li>
        <a href="{{route('logout')}}">Log Out</a>
    </li>
@endsection
@section('main')
    <div class="container">
        <h1 class="h1">{{$subject}}</h1>

        <table class="grades-table">
            <thead>
            <tr>
                <th>Date</th>
                <th>Theme</th>
                <th>Mark</th>
                <th>Teacher</th>
            </tr>
            </thead>
            <tbody>
            @foreach($marks as $mark)
                <tr>
                    <td>{{$mark->date}}</td>
                    <td>{{$mark->theme}}</td>
                    <td>{{$mark->mark}}</td>
                    <td>{{$mark->teacher_name}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
