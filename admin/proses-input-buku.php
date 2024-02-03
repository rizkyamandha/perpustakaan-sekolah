<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$judul=$_POST['judul'];
$no_buku=$_POST['no_buku'];
$penulis=$_POST['penulis'];
$penerbit=$_POST['penerbit'];
$tahun_terbit=$_POST['tahun_terbit'];


include "../koneksi.php";

$simpan=$koneksi->query("insert into buku(judul,no_buku,penulis,penerbit,tahun_terbit) 
                        values ('$judul', '$no_buku', '$penulis','$penerbit', '$tahun_terbit')");

if($simpan==true){

    header("location:tampil-buku.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>