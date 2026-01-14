@extends('layout.layout')
@section('style')
    <link rel="stylesheet" href="{{asset('css/auth.css')}}">
@endsection
@section('main')
    <div class="container">
        <h1 class="form-title">Registration</h1>
        <form action="{{route('register_teacher_post')}}" method="POST">
            @csrf
            <div class="main-user-info">
                <div class="user-input-box">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" placeholder="Enter Name">
                </div>
                <div class="user-input-box">
                    <label for="second_name">Second Name</label>
                    <input type="text" id="second_name" name="second_name" placeholder="Enter Second Name">
                </div>
                <div class="user-input-box">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" placeholder="Enter Email">
                </div>
                <div class="user-input-box">
                    <label for="phone_number">Phone Number</label>
                    <input type="text" id="phone_number" name="phone_number" placeholder="Enter Phone Number">
                </div>
                <div class="user-input-box">
                    <label for="subject">Subject</label>
                    <input type="text" id="subject" name="subject" placeholder="Enter Subject">
                </div>
                <div class="user-input-box">
                    <label for="age">Age</label>
                    <input type="text" id="age" name="age" placeholder="Enter Age">
                </div>
                <div class="user-input-box">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" placeholder="Enter Password">
                </div>
                <div class="user-input-box">
                    <label for="password_confirmation">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" placeholder="Confirm Password">
                </div>
            </div>
            <div class="gender-details-box">
                <span class="gender-title">Gender</span>
                <div class="gender-category">
                    <input type="radio" name="gender" id="male" value="male">
                    <label for="male">Male</label>
                    <input type="radio" name="gender" id="female" value="female">
                    <label for="female">Female</label>
                    <input type="radio" name="gender" id="other" value="other">
                    <label for="other">Other</label>
                </div>
            </div>
            <div class="form-submit-btn">
                <input type="submit" value="Register">
            </div>
            <div class="login">
                <p>Have an account? <a href="{{route('login_teacher')}}">Login</a></p>
            </div>
        </form>
    </div>
@endsection
