@extends('layout.nav')
@section('style')
    <link rel="stylesheet" href="{{asset('css/marks.css')}}">
@endsection
@section('nav_btn')
    <li>
        <a href="{{route('logout')}}">Log Out</a>
    </li>
@endsection
@section('main')
    <div class="container">
        <h2 class="page-title">Marks from subject: {{$subject}}</h2>
        <h3 class="student-name">Student: {{$student->name}} {{$student->second_name}}</h3>
        <div class="grades-container">
            <div class="grades-table">
                <table>
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Mark</th>
                        <th>Theme</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($marks as $mark)
                        <tr>
                            <td>{{$mark->date}}</td>
                            <td>{{$mark->mark}}</td>
                            <td>{{$mark->theme}}</td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="add-mark">
            <h3>New Mark</h3>
            <form action="{{route('teacher_marks_post',['subject' => $subject,'class' => $class,'id' => $student->id])}}" method="POST">
                @csrf
                <div class="form-group">
                    <label>Mark</label>
                    <input type="number" id="mark" name="mark">
                </div>
                <div class="form-group">
                    <label>Theme</label>
                    <input type="text" id="theme" name="theme">
                </div>
                <button type="submit" class="btn">Add Mark</button>
            </form>
        </div>
    </div>
@endsection
