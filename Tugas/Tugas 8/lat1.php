<form action="" method="post">
    <table>
        <tr>
            <td>Nama</td>
            <td>: <input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>Nilai</td>
            <td>: <input type="number" name="nilai" required></td>
        </tr>
    </table>
        <tr>
            <td></td>
            <td><input type="submit" value="Proses"></td>
        </tr>
</form>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];
    $nilai = $_POST["nilai"];
    $predikat = "";
    $status = "";
    

        if ($nilai >= 85) {
            $predikat ="A";
            $status = "Lulus Alhamdulillah";
            echo "<br>";
        } elseif ($nilai >= 75) {
            $predikat ="B";
            $status = "Lulus Alhamdulillah";
            echo "<br>";
        } elseif ($nilai >= 65) {
            $predikat ="C";
            $status = "Lulus Alhamdulillah";
            echo "<br>";
        } elseif ($nilai >= 50) {
            $predikat ="D";
            $status = "Ya Allah belum Lulus, semangat terus!";
            echo "<br>";
        } elseif ($nilai >= 0) {
            $predikat = "E";
            $status = "Ya Allah belum Lulus, semangat terus!";
            echo "<br>";
        } else{
            $predikat = "Nilai Tidak Valid";
            $status = "Status Tidak Diketahui";
            echo "<br>";
        }
        
    echo "<table>";
    echo "<tr><td>Nama</td><td>: $nama</td></tr>";
    echo "<tr><td>Nilai</td><td>: $nilai</td></tr>";
    echo "<tr><td>Predikat</td><td>: $predikat</td></tr>";
    echo "<tr><td>Status</td><td>: $status</td></tr>";
    echo "</table>";


}
?>