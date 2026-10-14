<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswaList = [
            ['nama' => "<script>alert('XSS')</script>Hacker", 'nim' => 'C030325102', 'prodi' => 'D3 Teknik Informatika'],
            ['nama' => 'Fulan', 'nim' => null, 'prodi' => 'D3 Teknik Informatika'],
            ['nama' => 'Fulana', 'nim' => null, 'prodi' => 'D3 Teknik Informatika'],
            ['nama' => null, 'nim' => 'C030325001', 'prodi' => 'D3 Teknik Informatika'],
            ['nama' => 'Fulani', 'nim' => 'C030325003', 'prodi' => null],
            ['nama' => 'Fulano', 'nim' => 'C030325002', 'prodi' => 'D3 Teknik Informatika'],
        ];

        return view('mahasiswa.index', compact('mahasiswaList'));
    }

    public function show($nim)
    {
        return view('mahasiswa.show', compact('nim'));
    }
}