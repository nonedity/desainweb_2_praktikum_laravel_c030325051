<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;

class MahasiswaController extends Controller
{
    public function index()
    {
        $data = [
            'nim' => 'C030325051',
            'nama' => 'Sunta Aditya Pangestu',
            'prodi' => 'Teknik Informatika'
        ];
        return view('mahasiswa.index', $data);
    }
}