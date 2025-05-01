<!DOCTYPE html>
<html>
<head>
    <title>Perhitungan Total Pembelian</title>
    <style>
        body {
            font-family: Times New Roman;
        }
        .kotak {
            border: 1px solid black;
            padding: 20px;
            width: 500px;
            background: pink;

            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
        }
        h2 {
            margin-top: 0;
        }
    </style>
</head>
<body>

<?php
define("PAJAK", 0.10);

$barang = [
    "nama" => "Laptop",
    "harga" => 10000000
];

$jumlahBeli = 5;

$totalSebelumPajak = $barang["harga"] * $jumlahBeli;
$nilaiPajak = $totalSebelumPajak * PAJAK;
$totalBayar = $totalSebelumPajak + $nilaiPajak;
?>

<div class="kotak">
    <h2><strong>Perhitungan Total Pembelian (Dengan Array)</strong></h2>
    <hr>
    Nama Barang: <?= $barang["nama"] ?><br>
    Harga Satuan: Rp <?= number_format($barang["harga"], 0, ',', '.') ?><br>
    Jumlah Beli: <?= $jumlahBeli ?><br>
    Total Harga (Sebelum Pajak): Rp <?= number_format($totalSebelumPajak, 0, ',', '.') ?><br>
    Pajak (10%): Rp <?= number_format($nilaiPajak, 0, ',', '.') ?><br>
    <strong>Total Bayar: Rp <?= number_format($totalBayar, 0, ',', '.') ?></strong>
</div>

</body>
</html>
