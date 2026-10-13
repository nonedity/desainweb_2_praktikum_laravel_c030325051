<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller {
    public function index() {
        return "Ini adalah halaman daftar Mahasiswa.";
    }
    public function show($nim) {
        return "Menampilkan detail Mahasiswa dengan NIM: " . $nim;
    }
}