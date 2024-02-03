<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$judul_buku=$_POST['judul_buku'];
$no_buku=$_POST['no_buku'];
$tanggal_pinjam=$_POST['tanggal_pinjam'];
$tanggal_pengembalian=$_POST['tanggal_pengembalian'];
$jumlah_pinjam=$_POST['jumlah_pinjam'];


include "../koneksi.php";

$simpan=$koneksi->query("insert into peminjaman(nisn,nama,judul_buku,no_buku,tanggal_pinjam,tanggal_pengembalian,jumlah_pinjam) 
                        values ('$nisn', '$nama', '$judul_buku','$no_buku', '$tanggal_pinjam', '$tanggal_pengembalian', '$jumlah_pinjam')");

if($simpan==true){

    header("location:tampil-peminjaman.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>