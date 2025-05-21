<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Praktikum</title>
</head>
<body>



<?php if (!isset($_GET['soal'])): ?>
    <h2>Latihan Praktikum</h2>
<nav>
    <ul>
        <li><a href="?soal=1">Nomor 1</a></li>
        <li><a href="?soal=2">Nomor 2</a></li>
        <li><a href="?soal=3">Nomor 3</a></li>
        <li><a href="?soal=4">Nomor 4</a></li>
    </ul>
</nav>
<?php endif; ?>

<?php
if (isset($_GET['soal'])) {
    $soal = $_GET['soal'];

    if ($soal == '1') {
        include 'no1.php';
    } elseif ($soal == '2') {
        include 'no2.php';
    } elseif ($soal == '3') {
        include 'no3.php';
    } elseif ($soal == '4') {
        include 'no4.php';
    } else {
        echo "<p>Soal tidak ditemukan.</p>";
    }

} else {
    echo "<p><h2>Sekian Terima Kasih</h2></p>";
}
?>

</body>
</html>