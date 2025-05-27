<form action="" method="post">
    <table>
        <tr>
            <td>NPM</td>
            <td>: <input type="text" name="npm" required></td>
        </tr>
        <tr>
            <td>NAMA</td>
            <td>: <input type="text" name="nama" required></td>
        </tr>
        <tr>
            <td>PRODI</td>
            <td>: <input type="text" name="prodi" required></td>
        </tr>
        <tr>
            <td>SEMESTER</td>
            <td>: <input type="text" name="semester" required></td>
        </tr>
        <tr>
            <td>BIAYA UKT</td>
            <td>: <input type="text" name="ukt" required></td>
        </tr>
    </table>
        <tr>
            <td></td>
            <td><input type="submit" value="Proses"></td>
        </tr>
</form>


<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $npm = $_POST["npm"];
    $nama = $_POST["nama"];
    $prodi = $_POST["prodi"];
    $semester = $_POST["semester"];
    $ukt = $_POST["ukt"];
    $diskon = 0;

    if ($ukt >= 5000000) {
        $diskon = 10;
        if ($semester > 8) {
            $diskon = 15;
        }
    }

    $jumlahDiskon = ($diskon / 100) * $ukt;
    $totalBayar = $ukt - $jumlahDiskon;

    echo "<table>";
    echo "<tr><td>NPM</td><td>: $npm</td></tr>";
    echo "<tr><td>NAMA</td><td>: $nama</td></tr>";
    echo "<tr><td>PRODI</td><td>: $prodi</td></tr>";
    echo "<tr><td>SEMESTER</td><td>: $semester</td></tr>";
    echo "<tr><td>BIAYA UKT</td><td>: Rp. " . number_format($ukt, 0, ',', '.') . "</td></tr>";
    echo "<tr><td>DISKON</td><td>: $diskon%</td></tr>";
    echo "<tr><td>YANG HARUS DIBAYAR</td><td>: Rp. " . number_format($totalBayar, 0, ',', '.') . "</td></tr>";
    echo "</table>";
}
?>