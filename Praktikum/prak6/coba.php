<?php
//    $nama = "Ariella Chandra Naya";
//    $umur = 20;


//    // Menampilkan nilai variabel
//    echo "Nama: " . $nama . "<br>";
//    echo "Umur: " . $umur . " tahun<br>";

    // define("SITE_NAME", "unsika.ac.id");
    // define("VERSION", "1.0");


    // echo "Selamat datang di " . SITE_NAME . "<br>";
    // echo "Versi Sistem: " . VERSION . "<br>";

    $nama = "Ariella Chandra Naya";
    echo "Nama saya adalah ". $nama . "<br>";

    $umur = 25;
    echo "Umur saya " . $umur. " tahun" . "<br>";

    $berat = 47.5;
    echo "Berat badan saya ". $berat ." kg" . "<br>";

    $isLogin = true;

    $buah = ["apel", "jeruk", "mangga"];
    echo $buah[2] . "<br>";

    class Mahasiswa {
       public $nama;
       public function sapa() {
           return "Halo, saya $this->nama";
       }
   }
    $mhs = new Mahasiswa();
    $mhs->nama = "Chandra";
    echo $mhs->sapa();

    //$data = null;
    //var_dump($data);
?>

