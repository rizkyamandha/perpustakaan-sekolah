<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$kelas=$_POST['kelas'];
$jurusan=$_POST['jurusan'];
include "../koneksi.php";

$simpan=$koneksi->query("insert into pendaftaran(nisn,nama,jenis_kelamin,kelas,jurusan) 
                        values ('$nisn', '$nama', '$jenis_kelamin','$kelas', '$jurusan')");

if($simpan==true){

    header("location:tampil-pendaftaran.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>