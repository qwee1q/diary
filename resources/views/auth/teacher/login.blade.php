@extends('layout.layout')
@section('style')
    <link rel="stylesheet" href="{{asset('css/auth.css')}}">
@endsection
@section('main')
    <div class="container">
        <h1 class="form-title">Login</h1>
        <form action="{{route('login_teacher_post')}}" method="POST">
            @csrf
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Enter Email">
                </div>
                <div class="user-input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password">
                </div>
            </div>
            <div class="remember-box">
                <span class="remember-title">Remember Me?</span>
                <div class="remember">
                    <input type="checkbox" name="rememberMe" id="rememberMe">
                    <label for="rememberMe">Remember</label>
                </div>
            </div>
            <div class="form-submit-btn">
                <input type="submit" value="Login">
            </div>
            <div class="login">
                <p>Don't have an account? <a href="{{route('register_teacher')}}">Register</a></p>
            </div>
        </form>
    </div>
@endsection
