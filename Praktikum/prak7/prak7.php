<?php
/////////////////////////switch/////////////////////////
$hari = "Minggu";


switch ($hari) {
   case "Senin":
       echo "Hari pertama kerja!";
       echo "<br>";
       echo "OH TIDAKKKKK";
       break;
   case "jum'at":
       echo "Solat jumat!";
       break;
   case "Minggu":
       echo "Libur akhir pekan!";
       echo "<br>";
       echo "YAYYYYYYY";
       break;
   default:
       echo "Hari biasa.";}

/////////////////for//////////////////////////
for ($i = 1; $i <= 5; $i++) {
    echo "<br>";
   echo "Angka ke- " .$i. "<br>";
}
/////////////////////////////////////////////

////////////////array//////////////////
$buah = ["Apel", "Jeruk", "Mangga"];
for ($i = 0; $i < count($buah); $i++) {
    echo "<br>";
   echo $buah[$i] . "<br>";
}
////////////////////////////////////////////

$minuman = ["Teh Poci", "Good day Freeze", "Jus Alpukat", "Teh Manis", "Es Jeruk Peras", "Air Mineral"];
for ($i = 0; $i < count($minuman); $i++) {
    echo "<br>";
   echo $minuman[$i] . "<br>";
}
////////////////////////////////////////////////

////////////////////////while////////////////////////////
$nilai = 1;


while ($nilai <= 5) {
   echo "Nilai: ". $nilai ."<br>";
   $nilai++;
}
/////////////////////////////////////////////////////////

////////////////////foreach//////////////////////////
$mahasiswa = [
   "10001" => "Andi",
   "10002" => "Budi",
   "10003" => "Citra"
];
foreach ($mahasiswa as $nim => $nama) {
   echo "NIM: ". $nim .", Nama:". $nama."<br>";
}
///////////////////////////////////////////////////

///////////////////teranry operator////////////////
$umur = 18;
$status = ($umur >= 17) ? "Dewasa" : "Anak-anak";


echo $status;
echo "<br>";
///////////////////////////////////////////////////

/////////////////////1//////////////////////////////
$roda = 7;
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
///////////////////////////////////////////////////////////

////////////////////////////2/////////////////////////////
for ($i = 2; $i <= 10; $i += 2) {
    echo "<br>";
    echo "Angka ke- ". $i . "<br>";
}
//////////////////////////////////////////////////////////

?>
