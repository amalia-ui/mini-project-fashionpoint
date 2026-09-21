# FashionPoint
## Sistem Informasi Persediaan Toko Pakaian

FashionPoint merupakan mini project berbasis PHP yang digunakan untuk menampilkan informasi produk pakaian dan kondisi persediaan toko.

## Fitur

- Menampilkan daftar produk pakaian
- Menampilkan kategori, harga, dan stok
- Menghitung nilai stok setiap produk
- Menghitung total nilai stok
- Menampilkan status stok
- Menampilkan jumlah produk dengan stok kritis

## Pembagian Program

### 1. Data Layer

**File:** `products.php`

Berisi data produk yang terdiri dari:
- ID produk
- Nama produk
- Kategori
- Harga
- Stok
- Deskripsi

### 2. Processing Layer

**File:** `functions.php`

Berisi fungsi untuk melakukan proses perhitungan, seperti:
- Menghitung nilai stok
- Menghitung total nilai stok
- Mengecek stok kritis
- Menghitung jumlah stok kritis
- Mengubah format angka menjadi Rupiah

### 3. Presentation Layer

**File:** `index.php`

Digunakan untuk menampilkan data produk dalam bentuk tabel serta menampilkan hasil perhitungan dan status stok.

## Perhitungan

**Nilai Stok = Harga × Stok**

Ketentuan stok:
- Stok kurang dari 3 = Stok Kritis
- Stok 3 atau lebih = Aman

## Struktur File

```text
FashionPoint_Toko_Pakaian/
├── README.md
├── index.php
├── products.php
└── functions.php

### Cara menjalankan
1. Install XAMPP.
2. Letakkan folder di `C:\xampp\htdocs\`.
3. Jalankan Apache.
4. Buka `http://localhost/FashionPoint_Toko_Pakaian/`.
