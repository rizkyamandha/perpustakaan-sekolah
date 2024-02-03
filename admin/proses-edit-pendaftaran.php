<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

include "../koneksi.php";

$id=$_POST['pendaftaran_id'];
$nisn=$_POST['nisn'];
$nama=$_POST['nama'];
$jenis_kelamin=$_POST['jenis_kelamin'];
$kelas=$_POST['kelas'];
$jurusan=$_POST['jurusan'];


$ubah=$koneksi->query("update pendaftaran set nisn='$nisn', nama='$nama', jenis_kelamin='$jenis_kelamin', kelas='$kelas', jurusan='$jurusan' where pendaftaran_id='$id'");

if($ubah==true){

    header("location:tampil-pendaftaran.php?pesan=editBerhasil");
} else{
    echo "Error";
}

?>