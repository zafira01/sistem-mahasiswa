# Sistem Informasi Inventaris Barang (Metode EOQ)

Aplikasi web berbasis **Laravel 12** untuk mengelola stok barang dan menentukan jumlah serta waktu pemesanan ulang barang menggunakan metode **Economic Order Quantity (EOQ)** dan **Reorder Point (ROP)**.

## Identitas Kelompok

| No | Nama | NPM |
|---|---|---|
| 1 | Rismatur Rahmi | 24105111073 |
| 2 | Asmaul Husna | 24105111081 |
| 3 | Zafira Ismy Samahya | 24105111061 |

## Identitas Project

| Keterangan | Detail |
|---|---|
| Nama Project | Sistem Informasi Inventaris Barang (Metode EOQ) |
| Framework | Laravel 12 |
| Bahasa Pemrograman | PHP |
| Database | MySQL |
| Metode | Economic Order Quantity (EOQ) dan Reorder Point (ROP) |
| Editor | Visual Studio Code |

## Fitur Aplikasi

### 1. Data Barang
- Menambahkan data barang.
- Mengedit data barang.
- Menghapus data barang.
- Mencari data barang.
- Mengelola parameter EOQ, seperti biaya pemesanan, biaya penyimpanan, lead time, dan safety stock.
- Stok awal dicatat secara otomatis sebagai transaksi barang masuk.

### 2. Transaksi Barang
- Mencatat transaksi barang masuk.
- Mencatat transaksi barang keluar.
- Stok barang berubah secara otomatis berdasarkan transaksi.
- Transaksi barang keluar ditolak apabila stok tidak mencukupi.
- Menghapus transaksi akan mengembalikan stok secara otomatis.

### 3. Analisis EOQ
- Menghitung kebutuhan barang tahunan.
- Menghitung jumlah pemesanan ekonomis (EOQ).
- Menghitung Reorder Point (ROP).
- Menghitung frekuensi pemesanan.
- Menghitung total biaya persediaan.
- Menampilkan status stok barang berdasarkan hasil analisis, yaitu:
  - Aman
  - Pesan Ulang
  - Kritis

### 4. Beranda (Dashboard)
- Menampilkan ringkasan data inventaris.
- Menampilkan daftar barang yang perlu dipesan ulang.
- Menampilkan informasi transaksi terbaru.
- Memudahkan pengguna memantau kondisi stok barang.

## Teknologi yang Digunakan

- **Laravel 12** sebagai framework backend.
- **PHP** sebagai bahasa pemrograman.
- **MySQL** sebagai database.
- **HTML, CSS, dan JavaScript** untuk pengembangan tampilan web.
- **Visual Studio Code** sebagai code editor.

## Tujuan Aplikasi

Aplikasi ini dibuat untuk mempermudah pengelolaan persediaan barang secara digital, membantu pencatatan transaksi barang masuk dan keluar, serta menentukan jumlah dan waktu pemesanan barang yang optimal menggunakan metode Economic Order Quantity (EOQ) dan Reorder Point (ROP).