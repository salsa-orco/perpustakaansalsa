<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BukuController;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\PeminjamanController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PengembalianController;
use App\Http\Controllers\DendaController;
// DASHBOARD
Route::get('/', [DashboardController::class, 'index']);

// LOGIN
Route::get('/Login', [LoginController::class, 'index']);

// BUKU
Route::get('/DataBuku', [BukuController::class, 'index']);
Route::get('/TambahBuku', [BukuController::class, 'create']);

// ANGGOTA
Route::get('/anggota', [AnggotaController::class, 'index']);
Route::get('/TambahAnggota', [AnggotaController::class, 'create']);

// PEMINJAMAN
Route::get('/Peminjaman', [PeminjamanController::class, 'index'])
    ->name('peminjaman.index');

Route::post('/peminjaman/store', [PeminjamanController::class, 'store'])
    ->name('peminjaman.store');

//PENGEMBALIAN
Route::get('/pengembalian', [PengembalianController::class, 'index'])
    ->name('pengembalian.index');

Route::post('/pengembalian/store', [PengembalianController::class, 'store'])
    ->name('pengembalian.store');

//DENDA
Route::get('/Denda', [DendaController::class, 'index']);