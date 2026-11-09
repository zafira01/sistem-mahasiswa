# Sistem Informasi Data Mahasiswa

Aplikasi web berbasis **Laravel** untuk mengelola data mahasiswa secara digital. Aplikasi ini memungkinkan pengguna menambahkan, melihat, dan menyimpan informasi mahasiswa ke dalam database MySQL.

## Identitas Project

| Keterangan | Detail |
|---|---|
| Nama Project | Sistem Informasi Data Mahasiswa |
| Framework | Laravel |
| Bahasa Pemrograman | PHP |
| Database | MySQL |
| Editor | Visual Studio Code |

## Fitur Aplikasi

- **Data Mahasiswa**: menampilkan daftar mahasiswa yang telah dimasukkan.
- **Tambah Mahasiswa**: memasukkan data mahasiswa baru.
- **Identitas Mahasiswa**: menyimpan nama, NPM, jenis kelamin, dan alamat.
- **Tanggal Otomatis**: mencatat tanggal dan waktu ketika data mahasiswa ditambahkan.
- **Database MySQL**: menyimpan data mahasiswa agar tidak hilang ketika aplikasi ditutup.
- **Tampilan Web**: menyediakan antarmuka untuk mengelola data mahasiswa.

## Teknologi yang Digunakan

- PHP
- Laravel
- MySQL
- XAMPP
- HTML
- CSS
- Bootstrap (jika digunakan dalam project)
- Visual Studio Code
- Git dan GitHub

## Struktur Utama Project

| Lokasi | Fungsi |
|---|---|
| `app/Models/` | Mengelola model dan data mahasiswa |
| `app/Http/Controllers/` | Mengatur proses aplikasi |
| `database/migrations/` | Mengatur struktur tabel database |
| `resources/views/` | Menyimpan tampilan halaman web |
| `routes/web.php` | Mengatur alamat halaman aplikasi |
| `public/` | Menyimpan file publik seperti CSS dan gambar |
| `.env.example` | Contoh konfigurasi aplikasi |

## Cara Menjalankan Project

### 1. Persiapan

Pastikan perangkat sudah memiliki:
- PHP
- Composer
- MySQL atau XAMPP
- Git

### 2. Clone Repository

```bash
git clone https://github.com/zafira01/sistem-mahasiswa.git
cd sistem-mahasiswa
```

### 3. Install Dependencies

```bash
composer install
```

### 4. Konfigurasi Environment

```bash
copy .env.example .env
php artisan key:generate
```

Sesuaikan konfigurasi database pada file `.env`:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sistem_mahasiswa
DB_USERNAME=root
DB_PASSWORD=
```

Buat database bernama `sistem_mahasiswa` melalui phpMyAdmin.

### 5. Jalankan Migration

```bash
php artisan migrate
```

Jika tabel database sudah tersedia, periksa terlebih dahulu sebelum menjalankan migration agar tidak terjadi duplikasi tabel.

### 6. Jalankan Aplikasi

```bash
php artisan serve
```

Buka browser dan akses:

```text
http://127.0.0.1:8000/mahasiswa
```

## Repository GitHub

Source code project dapat dilihat melalui:

[GitHub - Sistem Informasi Data Mahasiswa](https://github.com/zafira01/sistem-mahasiswa)

---

**Sistem Informasi Data Mahasiswa**

Project pembelajaran mata kuliah Teknik Informatika.