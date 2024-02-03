<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-12"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"> Data Siswa</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>NISN</th>
							<th>Nama Lengkap</th>
							<th>Jenis Kelamin</th>
							<th>Tanggal Lahir</th>
							<th>Telepon</th>
							<th>Email</th>
							<th>Kelas</th>
							<th>Jurusan</th>
							<th>Alamat</th>


						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from siswa order by nisn ASC");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['nisn']?></td>
							<td><?php echo $row['nama']?></td>
							<td><?php echo $row['jenis_kelamin']?></td>
							<td><?php echo $row['tanggal_lahir']?></td>
							<td><?php echo $row['telepon']?></td>
							<td><?php echo $row['email']?></td>
							<td><?php echo $row['kelas']?></td>
							<td><?php echo $row['jurusan']?></td>
							<td><?php echo $row['alamat']?></td>

							<td><a href="detail-siswa.php?id=<?php echo $row['siswa_id']?>">
                </a></td>
						</tr>
						<?php } ?>
						</table>
				</div>
      </div>
			</div><!-- Akhir Kolom Pertama -->
		</div><!-- Akhir Baris -->
		</div><!--  Akhir Page -->
		<?php include "footer.php";?>