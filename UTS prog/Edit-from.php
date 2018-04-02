<h2>Formulir Ubah</h2>
<hr>
<form action="update.php" method="post"> 


<?php
include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
    die("koneksi gagal : " . $koneksi->connect_error);
}

$qry ="select * from mahasiswa where nim='".
    $_GET["nim"] . "'";
$data = $koneksi ->query($qry);

if ($data->num_rows <= 0) {
    echo "Mas/Mba isi datanya dengan sesuai ya!";
}else{
    while($hasil = $data->fetch_assoc()){
        global $nama;
        global $jurusan;
        $nama = $hasil["nama"];
        $jurusan = $hasil["jurusan"];
    }
}
?>

<table>

<tr>
    <td>NIM</td>
    <td>: <input type = "text" name="nim"><br>
</tr>
<tr>
    <td>NAMA</td>
    <td>: <input type="text" name="nama"></td>
</tr>
<tr>
    <td>JURUSAN</td>
    <td>: <input type="text" name="jurusan"></td>
</tr>
<tr>
    <td><input type="submit" value="simpan"></td>
    <td><input type="submit" value="batal"></td>


</tr>
</table>
</form>