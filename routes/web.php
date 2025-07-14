<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PelangganController;
use App\Http\Controllers\ObatController;
use App\Http\Controllers\TransaksiController;
use App\Http\Controllers\DashboardController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect('/dashboard');
});

// Dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// CRUD Pelanggan
Route::resource('pelanggan', PelangganController::class);

// CRUD Obat
Route::resource('obat', ObatController::class);

// CRUD Transaksi
Route::resource('transaksi', TransaksiController::class);

// Cetak Struk Transaksi (bisa juga pakai controller khusus)
Route::get('/transaksi/{id}/struk', [TransaksiController::class, 'struk'])->name('transaksi.struk');
