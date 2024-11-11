<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\MemberController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {
    Route::get('index', [AdminController::class, 'index'])->name('admin.index');
    Route::get('view/member', [AdminController::class, 'viewMember'])->name('view.member');
    Route::get('view/mahasiswa', [AdminController::class, 'viewMahasiswa'])->name('view.mahasiswa');
    Route::get('view/perguruan-tinggi', [AdminController::class, 'perguruanTinggi'])->name('view.pt');
    Route::get('form/perguruan-tinggi', [AdminController::class, 'formPerguruanTinggi'])->name('create.pt');
    Route::get('form/update/perguruan-tinggi/{id}', [AdminController::class, 'formUpdatePerguruanTinggi'])->name('update.pt');
    Route::get('form/fakultas', [AdminController::class, 'fakultas'])->name('view.fakultas');
    Route::get('form/jurusan', [AdminController::class, 'jurusan'])->name('view.jurusan');

    Route::get('member')->name('member.aktif');
    Route::get('member')->name('member.nonaktif');
});

Route::middleware('auth')->group(function () {
    Route::delete('logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('pt/{id}', [MemberController::class, 'detailPt'])->name('detail.pt');
    Route::get('home', [MemberController::class, 'index'])->name('home');
    Route::get('profile', [MemberController::class, 'profile'])->name('profile');
    Route::get('form-daftar', [MemberController::class, 'formDaftar'])->name('daftar');
});

Route::get('login', [AuthController::class, 'login'])->name('login');
Route::post('login', [AuthController::class, 'storeLogin'])->name('store.login');
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('register', [AuthController::class, 'storeRegister'])->name('store.register');


