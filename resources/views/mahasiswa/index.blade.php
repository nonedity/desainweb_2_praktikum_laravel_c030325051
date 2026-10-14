<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Prodi</th>
                <th>Semester</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
           @foreach($mahasiswaList as $index -> $mhs)
           <tr>
            <td>{{ $index + 1 }}</td>
            <td>{{ $mhs['nim'] ?? '-' }}</td>
            <td>{{ $mhs['nama'] ?? '-' }}</td>
            <td>{{ $mhs['prodi'] ?? '-' }}</td>
            <td>
                <a href="{{ url('/akademik/mahasiswa/' . $mhs['nim']) }}">Detail</a>
            </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>