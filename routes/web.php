<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\RegisterController;
use App\Http\Controllers\content\student\StudentController;
use App\Http\Controllers\content\teacher\TeacherController;
use Illuminate\Support\Facades\Route;



Route::view('/', 'content.welcome')->name('welcome');

Route::group(['middleware' => 'guest'], function () {
    //register student
    Route::get('/register/student',[RegisterController::class,'index_student'])->name('register_student');
    Route::post('/register/student',[RegisterController::class,'store_student'])->name('register_student_post');

    //register teacher
    Route::get('/register/teacher',[RegisterController::class,'index_teacher'])->name('register_teacher');
    Route::post('/register/teacher',[RegisterController::class,'store_teacher'])->name('register_teacher_post');

    //login student
    Route::get('/login/student',[LoginController::class,'index_student'])->name('login_student');
    Route::post('/login/student',[LoginController::class,'store_student'])->name('login_student_post');

    //login teacher
    Route::get('/login/teacher',[LoginController::class,'index_teacher'])->name('login_teacher');
    Route::post('/login/teacher',[LoginController::class,'store_teacher'])->name('login_teacher_post');
});

Route::group(['middleware' => 'auth'], function () {
    //students routers
    Route::group(['middleware' => 'student'], function () {
        Route::get('/student/profile',[StudentController::class,'index'])->name('student_profile');
        Route::get('/student/marks/{subject}/{id}',[StudentController::class,'index_marks'])->name('student_marks');
    });

    //teachers routers
    Route::group(['middleware' => 'teacher'], function () {
        Route::get('/teacher/profile',[TeacherController::class,'index'])->name('teacher_profile');
        Route::get('/teacher/marks/{subject}/{class}',[TeacherController::class,'index_class'])->name('teacher_class');
        Route::get('teacher/marks/{subject}/{class}/{id}',[TeacherController::class,'index_marks'])->name('teacher_marks');
        Route::post('teacher/marks/{subject}/{class}/{id}',[TeacherController::class,'store_marks'])->name('teacher_marks_post');
    });

    //admin routers
    Route::group(['middleware' => 'admin'], function () {
       Route::get('/admin',[AdminController::class,'index'])->name('admin');
    });

    //log out router
    Route::get('/logout',[LoginController::class,'logout'])->name('logout');
});
