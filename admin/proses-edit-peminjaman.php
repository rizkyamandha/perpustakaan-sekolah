<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['peminjaman_id'];
$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$judul_buku=$_POST['judul_buku'];
$no_buku=$_POST['no_buku'];
$tanggal_pinjam=$_POST['tanggal_pinjam'];
$tanggal_pengembalian=$_POST['tanggal_pengembalian'];
$jumlah_pinjam=$_POST['jumlah_pinjam'];


$ubah=$koneksi->query("update peminjaman set nisn='$nisn', nama='$nama', judul_buku='$judul_buku', no_buku='$no_buku', tanggal_pinjam='$tanggal_pinjam', tanggal_pengembalian='$tanggal_pengembalian', jumlah_pinjam='$jumlah_pinjam' where peminjaman_id='$id'");

if($ubah==true){

    header("location:tampil-peminjaman.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>