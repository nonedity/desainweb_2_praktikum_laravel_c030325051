<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\MataKuliahController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/halo', function () {
    return 'Halo, ini adalah route pertama saya!';
});

// HALAMAN TENTANG
Route::get('/tentang', function () {
    return 'Ini adalah route halaman Tentang!';
});

// HALAMAN KONTAK
Route::get('/kontak', function () {
    return 'Ini adalah route halaman Kontak';
});

// HALAMAN PROFIL
Route::get('/profil', function () {
    return 'Ini adalah route halaman Profil';
});

// ROUTE PREFIX AKADEMIK
Route::prefix('akademik')->group(function () {
    // HALAMAN MAHASISWA
    Route::resource('mahasiswa', MahasiswaController::class);
    // HALAMAN MATA KULIAH
    Route::resource('matakuliah', MataKuliahController::class)->only(['index', 'show', 'create', 'store']);
});

// HALAMAN GROUP ADMIN
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', function () {
        return 'Halaman Dashboard Admin';
    });
    Route::get('/laporan', function () {
        return 'Halaman Laporan Admin';
    });
});

// HALAMAN SAPA
Route::get('/sapa', function () {
    return 'Ini adalah route halaman Sapa';
});
