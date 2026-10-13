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
    Route::get('/mahasiswa', [MahasiswaController::class, 'index'])->name('mahasiswa.index');
    Route::get('/mahasiswa/{nim}', [MahasiswaController::class, 'show'])->name('mahasiswa.show');

    // HALAMAN MATA KULIAH
    Route::get('/matakuliah', [MataKuliahController::class, 'index'])->name('matakuliah.index');
    Route::get('/matakuliah/{kode}', [MataKuliahController::class, 'show'])->name('matakuliah.show');
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