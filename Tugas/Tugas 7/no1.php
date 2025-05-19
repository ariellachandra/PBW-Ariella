<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Jenis Kendaraan berdasar Jumlah Roda</h3>
<!-- <?php
    $roda = 4;
    echo "Ini dia kendaraan roda " . $roda . ": ";
    echo "<br>";

    switch ($roda) {
        case 1:
            echo "Tidak Ada";
            echo "<br>";
            echo "OH TIDAKKKKK";
            break;
        case 2:
            echo "Motor";
            echo "<br>";
            echo "Sepeda";
            echo "<br>";
            echo "Sepeda Listrik";
            echo "<br>";
            echo "Skuter";
            break;
        case 3:
            echo "Becak";
            echo "<br>";
            echo "Bajaj";
            echo "<br>";
            echo "Bemo";
            break;
        case 4:
            echo "Mobil";
            echo "<br>";
            echo "Bis";
            echo "<br>";
            echo "Truk";
            break;
        case 5:
            echo "Belum ada kendaraannya";
            break;
        case 6:
            echo "Truk Besar";
            echo "<br>";
            echo "Kendaraan Khusus Bro";
            break;
        default:
        echo "Gak tau dah kendaraan apa itu";}
?> -->

<form method="post">
    Masukkan jumlah roda: <input type="number" name="roda" required>
    <input type="submit" value="Cek Kendaraan">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roda = $_POST['roda'];
    echo "<br>Ini dia kendaraan roda " . $roda . ":<br>";

    switch ($roda) {
        case 1:
            echo "Tidak Ada<br>";
            echo "OH TIDAKKKKK";
            break;
        case 2:
            echo "Motor<br>";
            echo "Sepeda<br>";
            echo "Sepeda Listrik<br>";
            echo "Skuter";
            break;
        case 3:
            echo "Becak<br>";
            echo "Bajaj<br>";
            echo "Bemo";
            break;
        case 4:
            echo "Mobil<br>";
            echo "Bis<br>";
            echo "Truk";
            break;
        case 5:
            echo "Belum ada kendaraannya";
            break;
        case 6:
            echo "Truk Besar<br>";
            echo "Kendaraan Khusus Bro";
            break;
        default:
            echo "Gak tau dah kendaraan apa itu";
    }
}
?>
</body>
</html>