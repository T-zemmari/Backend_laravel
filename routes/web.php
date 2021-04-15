<?php

use Illuminate\Support\Facades\Route;



Route::get('/login',function(){
    return view('login');
});

Route::get('/register',function(){
    return view('register');
});

Route::get('/forget',function(){
    return view('forget');
});

Route::get('/', function () {
    return view('welcome');
});
Route::get('/home',function(){
    return view('home');
});
