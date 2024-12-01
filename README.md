<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# Web Pencarian Perguruan Tinggi 

Proyek ini adalah **aplikasi Pencarian** yang dikembangkan dengan menggunakan **Laravel 11**, **Eloquent ORM**, dan berbagai fitur canggih lainnya. Dengan mengintegrasikan **query scope kompleks**, **middleware**, **policy gates**, dan **chart visualizations** menggunakan **Chart.js**, aplikasi ini memberikan pengalaman pengguna yang efisien dan aman.

## Fitur Utama

### 1. **CRUD dengan AJAX**
Aplikasi ini mengimplementasikan **CRUD (Create, Read, Update, Delete)** yang dinamis menggunakan **AJAX** untuk memastikan pembaruan data tanpa perlu me-refresh halaman. Setiap perubahan pada data akan segera terlihat oleh pengguna, membuat aplikasi ini interaktif dan efisien.

### 2. **CRUD Gambar**
Fitur pengelolaan gambar disediakan dengan menggunakan fitur **CRUD** untuk mengunggah, memperbarui, dan menghapus gambar. Gambar yang diunggah akan dikelola secara efisien, memberikan kemudahan bagi pengguna dalam mengelola file media terkait.

### 3. **Pendaftaran ke Perguruan Tinggi**
Fitur **pendaftaran mahasiswa** memungkinkan pengguna untuk mendaftar ke berbagai perguruan tinggi. Setiap pendaftaran akan melalui proses **verifikasi admin**, yang dapat menerima atau menolak pendaftaran berdasarkan kriteria yang ditentukan.

### 4. **Chart Visualisasi Data (Chart.js)**
Admin memiliki akses untuk melihat statistik pendaftaran melalui **grafik batang** dan **pie chart** menggunakan **Chart.js**. Grafik ini menunjukkan **jumlah total pendaftar**, serta membedakan status pendaftaran antara yang **diterima** atau **ditolak**. Fitur ini memberikan gambaran visual yang jelas tentang proses pendaftaran.

### 5. **Fitur Aktif/Nonaktif Fakultas, Jurusan, dan Pengguna**
Admin dapat mengelola status **aktif/nonaktif** untuk **fakultas**, **jurusan**, dan **pengguna** melalui antarmuka yang sederhana namun powerful. Fitur ini membantu admin untuk memantau dan mengontrol siapa yang dapat mengakses informasi dan melakukan pendaftaran.

### 6. **Query Scope dan Relasi yang Kompleks**
Aplikasi ini mengimplementasikan **query scope yang kompleks** untuk mengeksekusi query yang lebih efisien dan terstruktur, serta memanfaatkan **relasi antar model Eloquent** untuk mempermudah pengelolaan data yang memiliki hubungan antar tabel, seperti pengguna, fakultas, dan jurusan.

### 7. **Middleware dan Policy Gates**
Untuk meningkatkan **keamanan aplikasi**, digunakan **middleware** untuk mengontrol akses ke berbagai bagian aplikasi, memastikan hanya pengguna yang berwenang yang dapat mengakses informasi sensitif. Selain itu, **policy gates** digunakan untuk memberikan kontrol lebih lanjut terkait izin akses pengguna pada setiap entitas, baik itu pengguna biasa atau admin.

### 8. **Routing yang Terstruktur**
Routing pada aplikasi ini didesain dengan baik, memastikan **keamanan** dan **kecepatan** navigasi antar halaman. **Route Model Binding** dan **Named Routes** digunakan untuk menyederhanakan pengelolaan URL dan memastikan sistem yang terstruktur dengan baik.

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

