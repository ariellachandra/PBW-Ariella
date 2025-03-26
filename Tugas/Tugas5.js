function cekNilai() {
    let nilai = document.getElementById("nilai").value;
    let hasil = document.getElementById("hasil");

    if (nilai === "" || isNaN(nilai) || nilai < 0 || nilai > 100) {
        hasil.innerHTML = "Nilai tidak valid!";
        hasil.className = "error";
        return;
    }

    let hurufMutu = "";
    if (nilai >= 80) hurufMutu = "A";
    else if (nilai >= 70) hurufMutu = "B";
    else if (nilai >= 60) hurufMutu = "C";
    else if (nilai >= 50) hurufMutu = "D";
    else hurufMutu = "E";

    hasil.innerHTML = "<strong>" + hurufMutu + "</strong>";
    hasil.className = "result";
}