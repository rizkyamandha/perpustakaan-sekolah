
<?php

include "koneksi.php";
$nisn = $koneksi->real_escape_string($_POST['nisn']); 
$nama = $koneksi->real_escape_string($_POST['nama']); 
$jenis_kelamin = $koneksi->real_escape_string($_POST['jenis_kelamin']); 
$kelas = $koneksi->real_escape_string($_POST['kelas']);
$jurusan = $koneksi->real_escape_string($_POST['jurusan']);  


$simpan=$koneksi->query("insert into pendaftaran(nisn,nama,jenis_kelamin,kelas,jurusan) 
                        values ('$nisn', '$nama', '$jenis_kelamin', '$kelas', '$jurusan')");

if($simpan==true){

    header("location:pendaftaran.php?pesan=inputBerhasil");
} else{
    echo "Error";
}

?>