# FashionPoint — Mini Project 1

## Sistem Informasi Persediaan Toko Pakaian

**Tema:** Product Information System

FashionPoint adalah mini project PHP untuk menyimpan, mengolah, dan menampilkan informasi produk pakaian.

### Arsitektur sesuai instruksi
1. **Data Layer** — `products.php`: multidimensional array berisi ID, Nama, Kategori, Harga, Stok, Deskripsi.
2. **Processing Layer** — `functions.php`: `hitungTotalNilaiStok()`, perhitungan nilai stok, dan kondisi stok kritis `< 3`.
3. **Presentation Layer** — `index.php`: menggunakan `require_once` dan `foreach` untuk merender data ke tabel HTML.

### Rumus
`Nilai Stok = Harga × Stok`

### Aturan stok
- Stok `< 3` = **Stok Kritis**
- Stok `>= 3` = **Aman**

### Struktur
```text
FashionPoint_Toko_Pakaian/
├── products.php
├── functions.php
├── index.php
└── README.md
```

### Cara menjalankan
1. Install XAMPP.
2. Letakkan folder di `C:\xampp\htdocs\`.
3. Jalankan Apache.
4. Buka `http://localhost/FashionPoint_Toko_Pakaian/`.
