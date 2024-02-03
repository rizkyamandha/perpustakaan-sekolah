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
                <form action="proses-edit-buku.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from buku where buku_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="hidden" name="buku_id" value="<?php echo $row['buku_id']?>" class="form-control">
                        <input type="text" name="judul" value="<?php echo $row['judul']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="no_buku">No Buku</label>
                        <input type="text" name="no_buku" value="<?php echo $row['no_buku']?>" class="form-control">
                    </div>

                    
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" name="penulis" value="<?php echo $row['penulis']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" name="penerbit" value="<?php echo $row['penerbit']?>" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tahun_terbit">Tahun Terbit</label>
                        <input type="date" name="tahun_terbit" value="<?php echo $row['tahun_terbit']?>" class="form-control">
                    </div>
                    

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>