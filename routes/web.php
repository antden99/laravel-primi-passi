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

    $data=[
        "name"=>"Antonio",
        "surname"=>"De Nigris",
        "download"=>"download",
        "login"=>"login",
    ];

    return view('home',$data);
})->name('Home');

Route::get('/download', function () {

    $data=[
        "name"=>"Download Anto",        
    ];

    return view('download',$data);
})->name('download');

Route::get('/login', function () {

    $data=[
        "name"=>"Login Anto",
    ];

    return view('login',$data);
})->name('login');
