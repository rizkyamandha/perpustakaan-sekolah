<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php

$id=$_GET['id'];

include "../koneksi.php";

$hapus=$koneksi->query("delete from pendaftaran where pendaftaran_id='$id'");

if($hapus==true){

    header("location:tampil-pendaftaran.php?pesan=hapusBerhasil");

} else{
    echo "Error";
}


?>