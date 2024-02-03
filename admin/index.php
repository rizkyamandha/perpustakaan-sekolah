<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
					<div class="jumbotron">
						<h2 class="text-center">SELAMAT DATANG ( <?php echo $_SESSION['username'];?> )</h2>
						<p class="text-center">Ini adalah website perpustakaan Smkn 1 Sinabang. Website ini saya buat untuk tugas project akhir saya</p>
						<p class="text-center"><a class="btn btn-success btn-lg" href="tampil-siswa.php" role="button">siswa</a>
						<a class="btn btn-info btn-lg" href="tampil-user.php"role="button">User</a></p>
				</div>
      </div>
		</div>
</div><!-- Akhir Jumbotron -->
<?php include "footer.php";?>