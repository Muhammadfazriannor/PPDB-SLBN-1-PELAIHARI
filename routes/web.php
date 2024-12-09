<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Dashboard Admin
Route::get('/admin', [AdminController::class, 'index'])->name('admin.dashboard');

// Dashboard User
Route::get('/user', [UserController::class, 'index'])->name('user.dashboard');

Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/pengumuman', [AdminController::class, 'pengumuman']);
    Route::post('/pengumuman', [AdminController::class, 'storePengumuman']);
    Route::get('/pendaftar', [AdminController::class, 'pendaftar']);
    Route::get('/seleksi', [AdminController::class, 'seleksi']);
});

