<?php

include "koneksi.php";
$koneksiObj = new koneksi();
$koneksi = $koneksiObj->ambilKoneksi();

if($koneksi->connect_error) {
    die("koneksi gagal : " . $koneksi->connect_error);
} else {
    echo "koneksi ke basis data SUKSES!";
}


$query = " delete from mahasiswa where nim = '".$_GET['nim']."' ";


if($koneksi->query($query)==true){
    echo "<br>Data dengan nim ".$_GET["nim"].
    " sudah DIHAPUS. Data bisa dilihat ".
    '<a href="main.php">disini</a>';
}else{
    echo "error : " . $query." -> " . $koneksi->error;
}

?>