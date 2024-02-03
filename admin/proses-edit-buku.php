<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['buku_id'];
$judul=$_POST['judul'];
$no_buku=$_POST['no_buku'];
$penulis=$_POST['penulis'];
$penerbit=$_POST['penerbit'];
$tahun_terbit=$_POST['tahun_terbit'];

$ubah=$koneksi->query("update buku set judul='$judul', no_buku='$no_buku', penulis='$penulis', penerbit='$penerbit', tahun_terbit='$tahun_terbit' where buku_id='$id'");

if($ubah==true){

    header("location:tampil-buku.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>