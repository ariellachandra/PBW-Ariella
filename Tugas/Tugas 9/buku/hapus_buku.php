<?php
session_start();
if (!isset($_SESSION['login_Un51k4'])) {
    header("Location: ../login.php?message=" . urlencode("Silakan login dulu."));
    exit;
}

include '../koneksi_db.php';

// Query data buku yang sudah dihapus (soft delete: is_deleted = 1)
$result = $conn->query("SELECT * FROM buku WHERE is_deleted = 1");
?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1" />
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" />
   <title>Daftar Buku yang Sudah Dihapus</title>
</head>
<body>
   <?php include '../nav.php'; ?>

   <div class="container mt-4">
       <h2>Daftar Buku yang Sudah Dihapus</h2>

       <table class="table table-striped">
           <thead>
               <tr>
                   <th>ID</th>
                   <th>Judul</th>
                   <th>Penulis</th>
                   <th>Tahun Terbit</th>
               </tr>
           </thead>
           <tbody>
               <?php if ($result->num_rows > 0): ?>
                   <?php while ($row = $result->fetch_assoc()): ?>
                       <tr>
                           <td><?= htmlspecialchars($row['ID']) ?></td>
                           <td><?= htmlspecialchars($row['Judul']) ?></td>
                           <td><?= htmlspecialchars($row['Penulis']) ?></td>
                           <td><?= htmlspecialchars($row['Tahun_Terbit']) ?></td>
                       </tr>
                   <?php endwhile; ?>
               <?php else: ?>
                   <tr>
                       <td colspan="4" class="text-center">Tidak ada data buku yang sudah dihapus.</td>
                   </tr>
               <?php endif; ?>
           </tbody>
       </table>
   </div>

   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
