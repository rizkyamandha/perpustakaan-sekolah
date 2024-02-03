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
                <form action="proses-edit-peminjaman.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from peminjaman where peminjaman_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nisn">Nisn</label>
                        <input type="hidden" name="peminjaman_id" value="<?php echo $row['peminjaman_id']?>" class="form-control">
                        <input type="number" name="nisn" value="<?php echo $row['nisn']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                 
                    <div class="form-group">
                        <label for="judul_buku">Judul Buku</label>
                        <input type="text" name="judul_buku" value="<?php echo $row['judul_buku']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="no_buku">No Buku</label>
                        <input type="text" name="no_buku" value="<?php echo $row['no_buku']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="tanggal_pinjam">Tanggal Pinjam</label>
                        <input type="date" name="tanggal_pinjam" value="<?php echo $row['tanggal_pinjam']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                        <input type="date" name="tanggal_pengembalian" value="<?php echo $row['tanggal_pengembalian']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_pinjam">Jumlah Pinjam</label>
                        <input type="text" name="jumlah_pinjam" value="<?php echo $row['jumlah_pinjam']?>" class="form-control">
                    </div>


                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>