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
$tanggal_lahir=$_POST['tanggal_lahir'];
$telepon=$_POST['telepon'];
$email=$_POST['email'];
$kelas=$_POST['kelas'];
$jurusan=$_POST['jurusan'];
$alamat=$_POST['alamat'];

include "../koneksi.php";

$simpan=$koneksi->query("insert into siswa(nisn,nama,jenis_kelamin,tanggal_lahir,telepon,email,kelas,jurusan,alamat) 
                        values ('$nisn', '$nama', '$jenis_kelamin','$tanggal_lahir', '$telepon', '$email', '$kelas','$jurusan', '$alamat')");

if($simpan==true){

    header("location:tampil-siswa.php?pesan=inputBerhasil");
} else{
    echo "Error";
}




?>