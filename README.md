# TUGAS 12 PEMROGRAMAN WEB II

## Identitas Mahasiswa

* **Nama** : Anis Nadhirotul Mustafida
* **NIM** : 60324043

---

## Deskripsi Project

Project ini merupakan aplikasi **Sistem Informasi Perpustakaan** berbasis Laravel yang digunakan untuk mengelola data buku. Aplikasi ini mendukung operasi CRUD (Create, Read, Update, Delete) serta fitur tambahan yang diberikan pada Tugas 12.

---

## Fitur yang Diimplementasikan

### 1. Validation Rules Advanced

* Custom Validation Rule untuk format kode buku.

* Format kode buku:

  BK-XXX-000

  Contoh:

  * BK-PROG-001
  * BK-DB-002

* Conditional Validation:

  * Jika kategori **Programming**, maka bahasa harus **Inggris**.
  * Jika tahun terbit kurang dari 2000, maka stok maksimal 5.

* Custom Error Message menggunakan Bahasa Indonesia.

---

### 2. Bulk Delete Operations

* Memilih beberapa buku menggunakan checkbox.
* Fitur **Select All** untuk memilih seluruh data.
* Menghapus banyak data sekaligus dalam satu proses.

---

### 3. Export Data Buku ke CSV

* Export seluruh data buku ke file CSV.
* File dapat langsung diunduh dan dibuka menggunakan Microsoft Excel.

---

## Screenshot

### Halaman Utama Perpustakaan
<img width="1453" height="687" alt="PERPUSTAKAAN " src="https://github.com/user-attachments/assets/8f02006b-1ac8-4635-9d19-f0a0d8c4dc59" />

### Hasil Export CSV
<img width="485" height="225" alt="hasil exsport" src="https://github.com/user-attachments/assets/30296edb-86dc-4ed0-ad84-23d4795180d6" />

### Hasil File CSV di Excel
<img width="1920" height="1080" alt="hasil excel" src="https://github.com/user-attachments/assets/fb081dc3-9ec7-45ac-b1f8-d8a6274e8e9c" />

### Hasil Bulk Delete
<img width="1902" height="1011" alt="hasil delete" src="https://github.com/user-attachments/assets/62c90ecd-c8d4-4550-a6da-f3dad1fdb968" />



## Teknologi yang Digunakan

* Laravel
* PHP
* Bootstrap 5
* MySQL
* Blade Template

---

## Cara Menjalankan Project

1. Clone repository

```bash
git clone https://github.com/username/nama-repository.git
```

2. Masuk ke folder project

```bash
cd nama-repository
```

3. Install dependency

```bash
composer install
```

4. Copy file environment

```bash
cp .env.example .env
```

5. Generate application key

```bash
php artisan key:generate
```

6. Jalankan migrasi database

```bash
php artisan migrate
```

7. Jalankan server

```bash
php artisan serve
```

8. Buka browser

```text
http://127.0.0.1:8000
```

---

## Kesimpulan

Pada Tugas 12 ini berhasil diimplementasikan:

* Validation Rules Advanced
* Bulk Delete Operations
* Export Data Buku ke CSV

Seluruh fitur berjalan dengan baik sesuai spesifikasi tugas yang diberikan.
