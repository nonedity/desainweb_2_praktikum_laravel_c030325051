Nama: Sunta Aditya Pangestu
NIM: C030325051
Kelas/Prodi: 3C / D3 Teknik Informatika

Daftar route:list
```text
  GET|HEAD        / ........................................................................................................................................................................ routes/web.php:7
  GET|HEAD        admin/dashboard ......................................................................................................................................................... routes/web.php:48
  GET|HEAD        admin/laporan ........................................................................................................................................................... routes/web.php:51
  GET|HEAD        akademik/mahasiswa ............................................................................................................................ mahasiswa.index › MahasiswaController@index
  POST            akademik/mahasiswa ............................................................................................................................ mahasiswa.store › MahasiswaController@store
  GET|HEAD        akademik/mahasiswa/create ................................................................................................................... mahasiswa.create › MahasiswaController@create
  GET|HEAD        akademik/mahasiswa/{mahasiswa} .................................................................................................................. mahasiswa.show › MahasiswaController@show
  PUT|PATCH       akademik/mahasiswa/{mahasiswa} .............................................................................................................. mahasiswa.update › MahasiswaController@update
  DELETE          akademik/mahasiswa/{mahasiswa} ............................................................................................................ mahasiswa.destroy › MahasiswaController@destroy
  GET|HEAD        akademik/mahasiswa/{mahasiswa}/edit ............................................................................................................. mahasiswa.edit › MahasiswaController@edit
  GET|HEAD        akademik/matakuliah ......................................................................................................................... matakuliah.index › MataKuliahController@index
  POST            akademik/matakuliah ......................................................................................................................... matakuliah.store › MataKuliahController@store
  GET|HEAD        akademik/matakuliah/create ................................................................................................................ matakuliah.create › MataKuliahController@create
  GET|HEAD        akademik/matakuliah/{matakuliah} .............................................................................................................. matakuliah.show › MataKuliahController@show
  GET|HEAD        akademik/statistik ...................................................................................................................................................... routes/web.php:34
  GET|HEAD        halo .................................................................................................................................................................... routes/web.php:11
  GET|HEAD        kontak .................................................................................................................................................................. routes/web.php:21
  GET|HEAD        mahasiswa/tugas5 ........................................................................................................................................................ routes/web.php:61
  GET|HEAD        profil .................................................................................................................................................................. routes/web.php:26
  GET|HEAD        sapa .................................................................................................................................................................... routes/web.php:57
  GET|HEAD        storage/{path} ....................................................................... storage.local › vendor/laravel/framework/src/Illuminate/Filesystem/FilesystemServiceProvider.php:111
  PUT             storage/{path} ................................................................ storage.local.upload › vendor/laravel/framework/src/Illuminate/Filesystem/FilesystemServiceProvider.php:119
  GET|HEAD        tentang ................................................................................................................................................................. routes/web.php:16
  GET|HEAD        up ............................................................................................ vendor/laravel/framework/src/Illuminate/Foundation/Configuration/ApplicationBuilder.php:224

                                                                                                                                                                                          Showing [24] routes
```
## Cara Menjalankan Project
1. Ekstrak folder project ke direktori web server lokal (Laragon/XAMPP).
2. Buka terminal pada folder project, lalu jalankan perintah:
composer install
3. Salin file konfigurasi env:
copy .env.example .env
4. Generate key aplikasi:
php artisan key:generate
5. Jalankan server lokal:
php artisan serve
6. Buka browser dan akses URL: http://127.0.0.1:8000/akademik/mahasiswa
