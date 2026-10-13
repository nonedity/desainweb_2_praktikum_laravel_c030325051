<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        return "tampil semua mahasiswa";
    }
    public function create()
    {
        return 'form tambah mahasiswa';
    }
    public function store()
    {
        return 'simpan data mahasiswa baru';
    }
    public function show(Mahasiswa $mahasiswa)
    {
        return "menampilkan detail mahasiswa dengan nim (model binding) {$mahasiswa->nama}";
    }
    public function edit($nim)
    {
        return 'form edit mahasiswa dengan nim: ' . $nim;
    }
    public function update(Request $request, $nim)
    {
        return 'proses update mahasiswa dengan nim: ' . $nim;
    }
    public function destroy($nim)
    {
        return "proses hapus mahasiswa dengan nim: " . $nim;
    }
}