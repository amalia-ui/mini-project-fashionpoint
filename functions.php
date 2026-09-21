<?php
// PROCESSING LAYER
function hitungNilaiStok($harga, $stok) { return $harga * $stok; }
function hitungTotalNilaiStok($products) {
    $total = 0;
    foreach ($products as $product) $total += hitungNilaiStok($product['harga'], $product['stok']);
    return $total;
}
function isStokKritis($stok) { return $stok < 3; }
function hitungJumlahStokKritis($products) {
    $jumlah = 0;
    foreach ($products as $product) if (isStokKritis($product['stok'])) $jumlah++;
    return $jumlah;
}
function formatRupiah($angka) { return 'Rp ' . number_format($angka, 0, ',', '.'); }
?>
