<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h3>Cetak Bilangan Genap dari 2-10</h3>

<?php
        for ($i = 2; $i <= 10; $i += 2) {
            echo "<br>";
            echo "Angka ke- ". $i . "<br>";
        }

?>
</body>
</html>