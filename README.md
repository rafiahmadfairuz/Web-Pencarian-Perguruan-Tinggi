<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Web Pencarian Perguruan Tinggi (Module LKS)

Proyek ini adalah **aplikasi Pencarian** yang dikembangkan dengan menggunakan **Laravel 11**, **Eloquent ORM**, dan berbagai fitur canggih lainnya. Dengan mengintegrasikan **query scope kompleks**, **middleware**, **policy gates**, dan **chart visualizations** menggunakan **Chart.js**, aplikasi ini memberikan pengalaman pengguna yang efisien dan aman.

## Fitur Utama

### Untuk Mahasiswa:
- **Pendaftaran Perguruan Tinggi**: Mahasiswa dapat melakukan pendaftaran ke berbagai perguruan tinggi melalui aplikasi ini, mengisi formulir dengan informasi pribadi dan pilihan fakultas/ jurusan. Status pendaftaran dapat dilihat dan dipantau.
- **Status Pendaftaran**: Mahasiswa dapat melacak status pendaftaran mereka (diterima/ditolak) melalui halaman profil. Pembaruan status dilakukan oleh admin secara real-time menggunakan **Livewire**.
- **Pencarian Perguruan Tinggi**: Fitur pencarian untuk memudahkan mahasiswa dalam menemukan perguruan tinggi, fakultas, dan jurusan berdasarkan preferensi mereka.


### Untuk Admin:
- **Manajemen Pendaftaran Mahasiswa**: Admin dapat mengelola pendaftaran mahasiswa, menerima atau menolak pendaftaran berdasarkan kriteria yang ditentukan.
- **CRUD Perguruan Tinggi, Fakultas, dan Jurusan**: Admin dapat menambah, mengedit, dan menghapus data perguruan tinggi, fakultas, dan jurusan dengan mudah melalui antarmuka aplikasi.
- **Visualisasi Data Pendaftaran**: Admin dapat memantau statistik pendaftaran menggunakan **Chart.js** untuk menampilkan grafik batang dan pie chart mengenai jumlah pendaftar, status pendaftaran, dan distribusi pendaftaran berdasarkan fakultas atau jurusan.
- **Aktif/Nonaktifkan Pengguna dan Program**: Admin dapat mengaktifkan atau menonaktifkan pengguna, fakultas, jurusan, dan program lainnya melalui antarmuka yang sederhana dan efektif.
- **Pengelolaan Keamanan dan Akses**: Sistem menggunakan **middleware** dan **policy gates** untuk memastikan bahwa hanya pengguna yang berwenang yang dapat mengakses bagian-bagian tertentu dari aplikasi, menjaga keamanan dan integritas data.


## Teknologi yang Digunakan
- **Laravel 11**: Framework PHP untuk mengembangkan aplikasi web dengan arsitektur MVC dan Eloquent ORM.
- **AJAX**: Digunakan untuk mengupdate data secara dinamis tanpa me-refresh halaman.
- **Chart.js**: Untuk menampilkan visualisasi data dalam bentuk grafik batang dan pie chart.
- **Middleware**: Untuk mengamankan dan mengontrol akses pada aplikasi.
- **Policy Gates**: Untuk mengontrol hak akses pengguna secara granular.
- **Eloquent ORM**: Untuk mengelola data dengan relasi yang kompleks secara efisien.
- **Blade Templating**: Untuk membangun tampilan front-end yang dinamis dan responsif.

## Keahlian yang Diterapkan
1. **Eloquent ORM dan Relasi Kompleks**: Mengoptimalkan pengelolaan data dengan menggunakan **Eloquent** dan **relasi antar tabel** (One-to-Many, Many-to-Many).
2. **Middleware**: Mengatur akses dan kontrol autentikasi untuk memastikan keamanan aplikasi.
3. **Policy dan Gate**: Menerapkan kontrol akses berbasis role untuk memberikan izin yang tepat pada pengguna.
4. **AJAX dan Responsivitas**: Meningkatkan pengalaman pengguna dengan menggunakan **AJAX** untuk **CRUD** yang cepat dan dinamis tanpa me-refresh halaman.
5. **Chart.js**: Menyajikan **grafik statistik** untuk visualisasi data pendaftaran dengan **bar chart** dan **pie chart**.
6. **Routing yang Efisien**: Menggunakan **route model binding** dan **named routes** untuk pengelolaan URL yang lebih baik dan mudah dipahami.

