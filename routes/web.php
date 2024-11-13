<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PerguruanTinggiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('admin')->group(function () {

    Route::get('index', [AdminController::class, 'index'])->name('admin.index');
    Route::get('view/member', [AdminController::class, 'viewMember'])->name('view.member');
    Route::get('view/mahasiswa', [AdminController::class, 'viewMahasiswa'])->name('view.mahasiswa');

    Route::get('view/perguruan-tinggi', [PerguruanTinggiController::class, 'perguruanTinggi'])->name('view.pt');
    Route::get('view/perguruan-tinggi/detail/{id}', [PerguruanTinggiController::class, 'detailPerguruanTinggi'])->name('admin.detail.pt');
    Route::get('form/perguruan-tinggi', [PerguruanTinggiController::class, 'formPerguruanTinggi'])->name('create.pt');
    Route::post('form/perguruan-tinggi', [PerguruanTinggiController::class, 'storePerguruanTinggi'])->name('store.pt');
    Route::get('form/update/perguruan-tinggi/{id}', [PerguruanTinggiController::class, 'formUpdatePerguruanTinggi'])->name('update.pt');
    Route::post('form/update/perguruan-tinggi/{id}', [PerguruanTinggiController::class, 'storeUpdatePerguruanTinggi'])->name('store.update.pt');
    Route::delete('form/delete/perguruan-tinggi/{id}', [PerguruanTinggiController::class, 'deletePerguruanTinggi'])->name('delete.pt');

    Route::get('fakultas', [FakultasController::class, 'fakultas'])->name('view.fakultas');
    Route::get('fakultas/detail/{id}', [FakultasController::class, 'detailFakultas'])->name('detail.fakultas');
    Route::post('form/fakultas', [FakultasController::class, 'storeFakultas'])->name('store.fakultas');
    // Route::get('form/update/fakultas/{id}', [FakultasController::class, 'formUpdateFakultas'])->name('update.fakultas');
    Route::post('form/update/fakultas/{id}', [FakultasController::class, 'storeUpdateFakultas'])->name('store.update.fakultas');
    Route::delete('form/delete/fakultas/{id}', [FakultasController::class, 'deleteFakultas'])->name('delete.fakultas');

    Route::get('jurusan', [JurusanController::class, 'jurusan'])->name('view.jurusan');
    Route::get('jurusan/detail/{id}', [JurusanController::class, 'detailJurusan'])->name('detail.jurusan');
    Route::get('form/jurusan', [JurusanController::class, 'formJurusan'])->name('create.jurusan');
    Route::post('form/jurusan', [JurusanController::class, 'storeJurusan'])->name('store.jurusan');
    Route::get('form/update/jurusan/{id}', [JurusanController::class, 'formUpdateJurusan'])->name('update.jurusan');
    Route::post('form/update/jurusan/{id}', [JurusanController::class, 'storeUpdateJurusan'])->name('store.update.jurusan');
    Route::delete('form/update/jurusan/{id}', [JurusanController::class, 'deleteJurusan'])->name('delete.jurusan');
    Route::get('/form/jurusan', [JurusanController::class, 'viewJurusan'])->name('view.jurusan');

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


