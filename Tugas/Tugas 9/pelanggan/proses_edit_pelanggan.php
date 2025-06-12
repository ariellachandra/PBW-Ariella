<?php
include '../koneksi_db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['ID'];
    $nama = $_POST['Nama'];
    $alamat = $_POST['Alamat'];
    $email = $_POST['Email'];
    $telepon = $_POST['Telepon'];

    $stmt = $conn->prepare("UPDATE pelanggan SET Nama=?, Alamat=?, Email=?, Telepon=? WHERE ID=?");
    $stmt->bind_param("ssssi", $nama, $alamat, $email, $telepon, $id);

    if ($stmt->execute()) {
        echo "<script>alert('Data pelanggan berhasil diperbarui'); window.location='daftar_pelanggan.php';</script>";
    } else {
        echo "<script>alert('Gagal memperbarui data'); window.location='daftar_pelanggan.php';</script>";
    }

    $stmt->close();
    $conn->close();
}
?>
