@extends('layout.nav')
@section('style')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">
@endsection
@section('nav_btn')
    <li>
        <a href="{{route('logout')}}">Log Out</a>
    </li>
@endsection
@section('main')
    <div class="admin-container">
        <h1>Admin Panel</h1>
        <div class="stats">
            <div class="stat-card">
                <p class="stat-title">Students</p>
                <p class="stat-number">{{$students}}</p>
            </div>
            <div class="stat-card">
                <p class="stat-title">Teachers</p>
                <p class="stat-number">{{$teachers}}</p>
            </div>
        </div>
    </div>
@endsection
