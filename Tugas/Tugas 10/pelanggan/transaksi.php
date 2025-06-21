<?php
session_start();
if (!isset($_SESSION['login_Un51k4'])) {
    header("Location: ../login.php?message=" . urlencode("Silakan login dulu."));
    exit;
}

include '../koneksi_db.php';
include '../nav.php';

// Ambil daftar buku dan pelanggan
$buku_result = $conn->query("SELECT ID, Judul FROM Buku");
$pelanggan_result = $conn->query("SELECT ID, Nama FROM Pelanggan");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
   <title>Buat Pesanan</title>
</head>
<body>
<div class="container mt-4">
   <h2>Buat Pesanan Baru</h2>

   <?php if (isset($_GET['message'])): ?>
       <div class="alert alert-info"><?= htmlspecialchars($_GET['message']) ?></div>
   <?php endif; ?>

   <form method="post" action="proses_transaksi.php">
       <!-- Pilih Pelanggan -->
       <div class="mb-3">
           <label for="pelanggan_id" class="form-label">Pilih Pelanggan</label>
           <select class="form-select" name="pelanggan_id" id="pelanggan_id" required>
               <option value="">Pilih Pelanggan</option>
               <?php while ($row = $pelanggan_result->fetch_assoc()): ?>
                   <option value="<?= $row['ID'] ?>"><?= htmlspecialchars($row['Nama']) ?></option>
               <?php endwhile; ?>
           </select>
       </div>

       <!-- Pilih Buku -->
       <h4 class="mt-4">Pilih Buku</h4>
       <div class="mb-3">
           <label for="buku_id" class="form-label">Judul Buku</label>
           <select class="form-select" name="buku[1][id]" id="buku_id" required>
               <option value="">Pilih Buku</option>
               <?php while ($row = $buku_result->fetch_assoc()): ?>
                   <option value="<?= $row['ID'] ?>"><?= htmlspecialchars($row['Judul']) ?></option>
               <?php endwhile; ?>
           </select>
       </div>

       <!-- Kuantitas -->
       <div class="mb-3">
           <label for="kuantitas" class="form-label">Jumlah Buku</label>
           <input type="number" class="form-control" id="kuantitas" name="buku[1][kuantitas]" min="1" required>
       </div>

       <button type="submit" class="btn btn-primary">Buat Pesanan</button>
   </form>
</div>
</body>
</html>
