<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php"; ?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        <h1>Data Peminjaman</h1>
            <?php 

            if(@$_GET['pesan']=="inputBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Penyimpanan Berhasil!
                    </div>
            <?php

            }

            ?>


            <?php 

            if(@$_GET['pesan']=="hapusBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Data Berhasil Dihapus!
                    </div>
            <?php

            }

            ?>

            <?php 

            if(@$_GET['pesan']=="editBerhasil"){

            ?>
                    <div class="alert alert-success">
                    Perubahan Berhasil!
                    </div>
            <?php

            }

            ?>


        <table  class="table table-bordered table-hover" id="data-table">
        <thead>
            <tr>
                <th>Nisn</th><th>Nama Lengkap</th><th>Judul Buku</th><th>No Buku</th><th>Tanggal pinjam</th><th>Tanggal Pengembalian</th><th>Jumlah Pinjam</th>
                <th>
                    <a href="input-peminjaman.php">
                        <button class="btn btn-info glyphicon glyphicon-plus"></button>
                    </a>
                </th>
            </tr> 
        </thead> 
        <tbody>
        <?php

        include "../koneksi.php";
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
                
                <td>
                <a href="edit-peminjaman.php?id=<?php echo $row['peminjaman_id']?>">
                    <button class="btn btn-xs btn-danger glyphicon glyphicon-edit"></button>
                </a>

                <a href="hapus-peminjaman.php?id=<?php echo $row['peminjaman_id']?>" onclick=" return confirm('Anda yakin menghapus data?')">
                    <button class="btn btn-xs btn-warning glyphicon glyphicon-remove"></button>
                </a>

                </td>
            </tr>

        <?php    
        }
        ?>
        </tbody>
        </table>
        </div>
    </div>
</div>


<?php include "footer.php";?>