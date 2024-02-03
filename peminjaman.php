<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-12"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"> Peminjaman</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>NISN</th>
							<th>Nama Lengkap</th>
							<th>Judul Buku</th>
							<th>Nomor Buku</th>
							<th>Tanggal Pinjam</th>
							<th>Tanggal Pengembalian</th>
							<th>Jumlah Pinjam</th>


						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from peminjaman order by nisn ASC");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['nisn']?></td>
							<td><?php echo $row['nama']?></td>
							<td><?php echo $row['judul_buku']?></td>
							<td><?php echo $row['no_buku']?></td>
							<td><?php echo $row['tanggal_pinjam']?></td>
							<td><?php echo $row['tanggal_pengembalian']?></td>
							<td><?php echo $row['jumlah_pinjam']?></td>
							
							<td><a href="detail-peminjaman.php?id=<?php echo $row['peminjaman_id']?>">
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