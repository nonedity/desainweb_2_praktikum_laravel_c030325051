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
    return view('profil')
        ->with('mahasiswa', 'Sunta Aditya Pangestu')
        ->with('nim', 'C030325051')
        ->with('prodi', 'Teknik Informatika');
});

// ROUTE AKADEMIK/STATISTIK
Route::get('/akademik/statistik', function () {
    return view('akademik.statistik');
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
    return view('sapa');
});

Route::get('/mahasiswa/tugas5', function () {
    $mahasiswaList = [
        ['nama' => "<script>alert('XSS')</script>Hacker", 'nim' => 'C030325102', 'prodi' => 'D3 Teknik Informatika'],
        ['nama' => 'Fulan', 'nim' => null, 'prodi' => 'D3 Teknik Informatika'],
        ['nama' => 'Fulana', 'nim' => null, 'prodi' => 'D3 Teknik Informatika'],
        ['nama' => null, 'nim' => 'C030325001', 'prodi' => 'D3 Teknik Informatika'],
        ['nama' => 'Fulani', 'nim' => 'C030325003', 'prodi' => null],
        ['nama' => 'Fulano', 'nim' => 'C030325002', 'prodi' => 'D3 Teknik Informatika'],
    ];

    return view('mahasiswa.tugas5', compact('mahasiswaList'));
});
