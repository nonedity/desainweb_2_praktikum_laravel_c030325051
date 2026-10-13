<?php

use Illuminate\Support\Facades\Route;

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