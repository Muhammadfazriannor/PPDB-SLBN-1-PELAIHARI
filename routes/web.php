<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PendaftarController;
use App\Http\Controllers\PPDBController;
use App\Http\Controllers\PengumumanController;
use App\Http\Controllers\SeleksiController;
use App\Http\Controllers\WhatsAppController;
use Illuminate\Support\Facades\Http;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/PPDB', function () {
    return view('PPDB.index');
});

// Dashboard Admin
Route::get('/admin', [AdminController::class, 'index'])->name('dashboard.dashboard');


// Rute untuk Dashboard User
Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');

// Rute untuk Layanan
Route::get('/tentang', [UserController::class, 'tentang'])->name('user.tentang');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin.dashboard');
    Route::get('/pengumuman', [AdminController::class, 'pengumuman'])->name('admin.pengumuman');
    Route::post('/pengumuman', [AdminController::class, 'storePengumuman'])->name('admin.storePengumuman');
    Route::get('/pendaftar', [AdminController::class, 'pendaftar'])->name('admin.pendaftar');
    Route::get('/pendaftar/view/pdf/{pendaftar}', [PendaftarController::class, 'view_pdf'])->name('pendaftars.pdf');
    Route::get('/pendaftars/view-all/pdf', [PendaftarController::class, 'view_all_pdf'])->name('pendaftars.viewAllPdf');
    Route::get('/seleksi', [AdminController::class, 'seleksi'])->name('admin.seleksi');
    Route::get('/ppdb', [PPDBController::class, 'index'])->name('admin.ppdb.index');  // Menampilkan form PPDB
    Route::post('/ppdb', [PPDBController::class, 'store'])->name('admin.ppdb.store');
    Route::get('/dashboard', [UserController::class, 'index'])->name('dashboard');
});

Route::resource('/pendaftars', PendaftarController::class);
Route::resource('/ppdb', PPDBController::class);
Route::resource('/pengumumen', PengumumanController::class);

// Rute tambahan untuk Pendaftar: View PDF
Route::get('/pendaftars/{pendaftar}/pdf', [PendaftarController::class, 'view_pdf'])->name('pendaftars.pdf');

// Rute untuk mengirim pesan WhatsApp
Route::get('/kirimpesan', [WhatsAppController::class, 'index']);
Route::post('/kirimpesan', [WhatsAppController::class, 'sendMessage'])->name('send-message');

// Rute untuk seleksi
Route::prefix('seleksi')->group(function () {
    Route::get('/', [SeleksiController::class, 'index'])->name('seleksi.index');
    Route::get('/proses', [SeleksiController::class, 'prosesSeleksi'])->name('seleksi.proses');
    Route::get('/update-status/{seleksi}/{status}', [SeleksiController::class, 'updateStatus'])->name('seleksi.updateStatus');
});
