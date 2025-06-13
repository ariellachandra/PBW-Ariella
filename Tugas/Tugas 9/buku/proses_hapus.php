<?php
include '../koneksi_db.php'; // Pastikan $conn didefinisikan di sini

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // Siapkan prepared statement untuk update (soft delete)
    $stmt = $conn->prepare("UPDATE buku SET is_deleted = 1 WHERE id = ?");
    $stmt->bind_param("i", $id);

    // Eksekusi dan tangani hasilnya
    if ($stmt->execute()) {
        echo "<script>alert('Buku berhasil dihapus'); window.location='../index.php';</script>";
    } else {
        echo "<script>alert('Gagal menghapus buku: " . addslashes($stmt->error) . "'); window.location='../index.php';</script>";
    }

    $stmt->close();
} else {
    echo "<script>alert('ID tidak valid'); window.location='../index.php';</script>";
}

$conn->close();
?>
