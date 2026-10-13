<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller {
    public function index() {
        return "Ini adalah halaman daftar Mata Kuliah.";
    }
    public function show($kode) {
        return "Menampilkan detail Mata Kuliah dengan Kode: " . $kode;
    }
}