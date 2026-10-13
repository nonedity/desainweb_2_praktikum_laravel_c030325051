<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MataKuliah;

class MataKuliahController extends Controller
{
    public function index()
    {
        return "tampil semua daftar kuliah";
    }
    public function create()
    {
        return "form tambah daftar kuliah";
    }
    public function store()
    {
        return "proses simpan daftar kuliah";
    }
    public function show(MataKuliah $mataKuliah)
    {
        return "tampilkan daftar kuliah dengan kode (model binding): {$mataKuliah->kode}";
    }
}