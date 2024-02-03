<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['siswa_id'];
$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$tanggal_lahir=$_POST['tanggal_lahir'];
$telepon=$_POST['telepon'];
$email=$_POST['email'];
$kelas=$_POST['kelas'];
$jurusan=$_POST['jurusan'];
$alamat=$_POST['alamat'];

$ubah=$koneksi->query("update siswa set nisn='$nisn', nama='$nama', jenis_kelamin='$jenis_kelamin', tanggal_lahir='$tanggal_lahir', telepon='$telepon', email='$email', kelas='$kelas', jurusan='$jurusan', alamat='$alamat' where siswa_id='$id'");

if($ubah==true){

    header("location:tampil-siswa.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>