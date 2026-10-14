<!DOCTYPE html>
<html>
<head>
    <title>Tugas Mandiri 5</title>
</head>
<body>
    <h2>Daftar Mahasiswa (Uji Blade & XSS)</h2>
    <ul>
        @foreach($mahasiswaList as $mhs)
            <li>
                <!-- Komentar biasa tanpa kurung kurawal -->
                Nama: {{ $mhs['nama'] ?? 'Tanpa Nama' }} | 
                NIM: {{ $mhs['nim'] ?? 'NIM Kosong' }} | 
                Prodi: {{ $mhs['prodi'] ?? 'Prodi Kosong' }}
            </li>
        @endforeach
    </ul>
</body>
</html>