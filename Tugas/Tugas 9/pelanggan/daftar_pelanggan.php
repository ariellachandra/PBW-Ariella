<?php
include '../koneksi_db.php';
include '../nav.php';

// Query data pelanggan
$query = "SELECT * FROM pelanggan";
$result = $conn->query($query);

if (!$result) {
    die("Query error: " . $conn->error);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Daftar Pelanggan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Daftar Pelanggan</h2>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Email</th>
                <th>Telepon</th>
            </tr>
        </thead>
        <tbody>
            <?php if ($result->num_rows > 0): ?>
                <?php while ($row = $result->fetch_assoc()): ?>
                    <tr>
                        <td><?= htmlspecialchars($row['ID']); ?></td>
                        <td><?= htmlspecialchars($row['Nama']); ?></td>
                        <td><?= htmlspecialchars($row['Alamat']); ?></td>
                        <td><?= htmlspecialchars($row['Email']); ?></td>
                        <td><?= htmlspecialchars($row['Telepon']); ?></td>
                        <td>
                            <a href="form_edit_pelanggan.php?id=<?= urlencode($row['ID']); ?>" class="btn btn-warning btn-sm">Edit</a>
                            <a href="hapus_pelanggan.php?id=<?= urlencode($row['ID']); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus pelanggan ini?')">Hapus</a>
                        </td>
                    </tr>
                <?php endwhile; ?>
            <?php else: ?>
                <tr><td colspan="6">Tidak ada data pelanggan.</td></tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

   <!-- Bootstrap JS -->
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
