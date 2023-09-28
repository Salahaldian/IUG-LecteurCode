<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('my/first', function () {
    return "Hello to my page";
});

Route::get('page/welcome', function () {
    return "Welcome Welcome";
});

Route::get('home', function () {
    return view('home');
});

Route::get('std/profile', function () {
    $name = "Ahmad";
    $gpa = 88.4;
//    return view('student.profile')->with('name', $name)->with('gpa', $gpa);
//    return view('student.profile', [ 'name' => $name, 'gpa' => $gpa ]);
    return view('student.profile')->with(compact('name','gpa'));
});

Route::get('std/grades', function () {
    return view('student.info.grades');
});

Route::get('std/personal', function () {
    return view('student.info.personal');
});

Route::get('std/sta', function () {
    return view('student.info.sta');
});
