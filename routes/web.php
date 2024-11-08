<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', [MemberController::class, 'index'])->name('home');
Route::get('profile', [MemberController::class, 'profile'])->name('profile');


Route::middleware('auth')->group(function () {
    Route::delete('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('pt/{id}', [MemberController::class, 'detailPt'])->name('detail.pt');
});
Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'storeLogin'])->name('store.login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'storeRegister'])->name('store.register');


