<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Nomor 4</title>
</head>
<body>

<h3>Penentuan Angka Genap atau Ganjil</h3>

<!-- <?php
    $angka = 15;
        echo "Angka " . $angka . " itu ganjil atau genap ya?";
        echo "<br>";
    $status = ($angka %2 == 0) ? "Genap" : "Ganjil";

    echo $status;
    echo "<br>";
?>    -->

<form method="post">
    Masukkan angka: <input type="number" name="angka" required>
    <input type="submit" value="Cek">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $angka = $_POST['angka'];
    echo "<br>Angka " . $angka . " itu ganjil atau genap ya?<br>";
    
    $status = ($angka % 2 == 0) ? "Genap" : "Ganjil";
    echo $status . "<br>";
}
?>

</body>
</html>

