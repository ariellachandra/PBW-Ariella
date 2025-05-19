<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Daftar nama Hewan</h3>

<?php
    $hewan = [
    "Karnivora" => "Harimau, Macan, Singa",
    "Herbivora" => "Kambing, Sapi, Jerapah",
    "Omnivora" => "Ayam, Tikus",
    ];

    foreach ($hewan as $pemakan => $nama) {
    echo "Pemakan: ". $pemakan .", Nama: ". $nama. "<br>";
    }
?>

</body>
</html>