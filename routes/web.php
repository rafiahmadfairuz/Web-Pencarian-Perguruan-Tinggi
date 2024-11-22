<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FakultasController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\PerguruanTinggiController;
use App\Models\Fakultas;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {

    Route::prefix('member')->group(function () {
        Route::delete('logout', [AuthController::class, 'logout'])->name('logout');
        Route::get('pt/{id}', [MemberController::class, 'detailPt'])->name('detail.pt');
        Route::get('home', [MemberController::class, 'index'])->name('home');
        Route::get('profile/{id}', [MemberController::class, 'profile'])->name('profile');
        Route::get('form-daftar/{id}', [MemberController::class, 'formDaftar'])->name('daftar');
        Route::get('jurusan/{id}', [MemberController::class, 'jurusan']);
        Route::post('daftar/{id}', [MemberController::class, 'storeDaftar'])->name('store.daftar');
        Route::get('detail-pendaftaran/{id}', [MemberController::class, 'detailPendaftaran'])->name('detail.pendaftaran');
    });

    Route::prefix('admin')->group(function () {
        Route::get('index', [AdminController::class, 'index'])->name('admin.index');
        Route::get('view/member', [AdminController::class, 'viewMember'])->name('view.member');
        Route::get('view/mahasiswa', [AdminController::class, 'viewMahasiswa'])->name('view.mahasiswa');
        Route::get('view/perguruan-tinggi', [PerguruanTinggiController::class, 'perguruanTinggi'])->name('view.pt');
        Route::get('view/perguruan-tinggi/detail/{id}', [PerguruanTinggiController::class, 'detailPerguruanTinggi'])->name('admin.detail.pt');
        Route::get('view/detail/pendaftar/{id}', [AdminController::class, 'detailPendaftar'])->name('detail.pendaftar');
        Route::post('penolakan/mahasiswa/{id}', [AdminController::class, 'ditolak'])->name('ditolak');
        Route::get('penerimaan/mahasiswa/{id}', [AdminController::class, 'diterima'])->name('diterima');


        Route::get('form/perguruan-tinggi/step-1', [PerguruanTinggiController::class, 'formPerguruanTinggiStep1'])->name('create.pt.1');
        Route::post('form/perguruan-tinggi/step-1', [PerguruanTinggiController::class, 'storePerguruanTinggiStep1'])->name('store.pt.1');
        Route::get('form/perguruan-tinggi/step-2', [PerguruanTinggiController::class, 'formPerguruanTinggiStep2'])->name('create.pt.2');
        Route::post('form/perguruan-tinggi/step-2', [PerguruanTinggiController::class, 'storePerguruanTinggiStep2'])->name('store.pt.2');
        Route::get('form/create/jurusan', [PerguruanTinggiController::class, 'formJurusan'])->name('create.jurusan');
        Route::post('form/create/jurusan', [PerguruanTinggiController::class, 'storeJurusan'])->name('store.jurusan');


        Route::get('edit/fakultas/{pt}/{id}', [FakultasController::class, 'editFakultas'])->name('edit.fakultas');
        Route::post('edit/fakultas/{id}', [FakultasController::class, 'storeUpdateFakultas'])->name('store.update.fakultas');
        Route::get('disable/fakultas/{id}', [FakultasController::class, 'disable'])->name('disable.fk');
        Route::get('enable/fakultas/{id}', [FakultasController::class, 'enable'])->name('enable.fk');
        Route::delete('delete/fakultas/{id}', [FakultasController::class, 'delete'])->name('hapus.fk');


        Route::get('create/jurusan/{pt}/{id}', [JurusanController::class, 'createJurusan'])->name('create.jurusan');
        Route::post('create/jurusan/{pt}/{id}', [JurusanController::class, 'storeJurusan'])->name('store.jurusan');
        Route::get('edit/jurusan/{pt}/{fakultas}/{id}', [JurusanController::class, 'editJurusan'])->name('edit.jurusan');
        Route::post('edit/jurusan/{pt}/{fakultas}/{id}', [JurusanController::class, 'storeUpdateJurusan'])->name('store.update.jurusan');
        Route::get('disable/jurusan/{id}', [JurusanController::class, 'disable'])->name('disable.jurusan');
        Route::get('enable/jurusan/{id}', [JurusanController::class, 'enable'])->name('enable.jurusan');
        Route::delete('delete/jurusan/{id}', [JurusanController::class, 'deleteJurusan'])->name('hapus.jurusan');


        Route::get('form/update/perguruan-tinggi/{id}', [PerguruanTinggiController::class, 'formUpdatePerguruanTinggi'])->name('update.pt');
        Route::post('form/update/perguruan-tinggi/{id}', [PerguruanTinggiController::class, 'storeUpdatePerguruanTinggi'])->name('store.update.pt');
        Route::delete('form/delete/perguruan-tinggi/{id}', [PerguruanTinggiController::class, 'deletePerguruanTinggi'])->name('delete.pt');

        Route::get('member/aktifkan/{user}', [AdminController::class, 'mengaktifkan'])->name('member.aktif');
        Route::get('member/nonaktifkan/{user}', [AdminController::class, 'menonaktifkan'])->name('member.nonaktif');
        Route::delete('admin/logout', [AuthController::class, 'logout'])->name('logout');
    });
});

Route::middleware('guest')->group(function () {
    Route::get('login', [AuthController::class, 'login'])->name('login');
    Route::post('login', [AuthController::class, 'storeLogin'])->name('store.login');
    Route::get('register', [AuthController::class, 'register'])->name('register');
    Route::post('register', [AuthController::class, 'storeRegister'])->name('store.register');
});
