<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\SeleksiController;
Route::get('/', function () {
    return view('welcome');
});

Route::get('/PPDB', function () {
    return view('ppdb.index');
});

// Dashboard Admin
Route::get('/admin', [AdminController::class, 'index'])->name('dashboard.dashboard');

// Dashboard User
Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/pengumuman', [AdminController::class, 'pengumuman']);
    Route::post('/pengumuman', [AdminController::class, 'storePengumuman']);
    Route::get('/pendaftar', [AdminController::class, 'pendaftar']);
    Route::get('/seleksi', [AdminController::class, 'seleksi']);
    Route::get('/ppdb', [PPDBController::class, 'index'])->name('ppdb.index');  // Menampilkan form PPDB
Route::post('/ppdb', [PPDBController::class, 'store'])->name('ppdb.store');
Route::get('/dashboard', [berandaController::class, 'index'])->name('dashboard');

});

Route::resource('/pendaftars', \App\Http\Controllers\PendaftarController::class);
Route::resource('/ppdb', \App\Http\Controllers\PPDBController::class);
Route::resource('/pengumumen', PengumumanController::class);

// Rute untuk seleksi
Route::get('/seleksi', [SeleksiController::class, 'index'])->name('seleksi.index');
Route::get('/seleksi/proses', [SeleksiController::class, 'prosesSeleksi'])->name('seleksi.proses');
Route::get('/seleksi/update-status/{seleksi}/{status}', [SeleksiController::class, 'updateStatus'])->name('seleksi.updateStatus');


