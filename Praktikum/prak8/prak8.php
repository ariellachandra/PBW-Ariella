<?php
    $nilai = 75;
        if ($nilai >= 80) {
        echo "Nilai A" ;
        echo "<br>";
        } elseif ($nilai >= 70) {
        echo "Nilai B";
        echo "<br>";
        } else {
        echo "Nilai C";
        echo "<br>";
        }

    ///////////////////////////////////////////////

    $umur = 20;
    $ktp = true;
        if ($umur >= 17 && $ktp) {
        echo "Boleh memilih";
        echo "<br>";
        }

    ////////////////////////////////////////////////////

    if (!empty($_POST['nama'])) {
        echo "Nama: " . htmlspecialchars($_POST['nama']);
        } else {
        echo "Nama tidak boleh kosong!";
        echo "<br>";
        }
   
    //////////////////////////////////////////////////////
    
    $nilai = 45;
        if ($nilai >= 85) {
            echo "Nilai A" ;
            echo "<br>";
        } elseif ($nilai >= 75) {
            echo "Nilai B";
            echo "<br>";
        } elseif ($nilai >= 65) {
            echo "Nilai C";
            echo "<br>";
        } elseif ($nilai >= 50) {
            echo "Nilai D";
            echo "<br>";
        } elseif ($nilai >= 0) {
            echo "Nilai E";
            echo "<br>";
        } else{
            echo "Nilai Tidak Valid";
        }

?>