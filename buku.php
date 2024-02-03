<?php include "header.php"; ?>
		
		<!-- Awal Page -->
		<div class="container">
		<!-- Awal baris -->
		<div class="row">
			<div class="col-md-12"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
				<h2 style="text-muted"> Data Buku</h2>
					<table class="table table-bordered table-hover" id="data-table">
						<thead>
						<tr>
							<th>Judul</th>
							<th>Nomor Buku</th>
							<th>Penulis</th>
							<th>Penerbit</th>
							<th>Tahun Terbit</th>
						</tr>
						</thead>
						<?php

						include "koneksi.php";
						$sql=$koneksi->query("select * from buku order by no_buku ASC");

						while($row= $sql->fetch_assoc()){
						?>
						<tr>
							<td><?php echo $row['judul']?></td>
							<td><?php echo $row['no_buku']?></td>
							<td><?php echo $row['penulis']?></td>
							<td><?php echo $row['penerbit']?></td>
							<td><?php echo $row['tahun_terbit']?></td>

							<td><a href="detail-buku.php?id=<?php echo $row['buku_id']?>">
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