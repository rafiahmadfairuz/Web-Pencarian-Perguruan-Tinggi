<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function () {
    return view('Member.index');
});
Route::get('login', function () {
    return view('Auth.login');
});
Route::get('register', function () {
    return view('Auth.register');
});

