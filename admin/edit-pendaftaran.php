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
                <form action="proses-edit-pendaftaran.php" method="POST">
                <?php
                $id=$_GET['id'];
                include "../koneksi.php";
                $tampil=$koneksi->query("select * from pendaftaran where pendaftaran_id='$id'");
                $row=$tampil->fetch_assoc();
                ?>
                    <div class="form-group">
                        <label for="nisn">Nisn</label>
                        <input type="hidden" name="pendaftaran_id" value="<?php echo $row['pendaftaran_id']?>" class="form-control">
                        <input type="number" name="nisn" value="<?php echo $row['nisn']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" value="<?php echo $row['nama']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="<?php echo $row['jenis_kelamin']?>" selected><?php echo $row['jenis_kelamin']?></option>
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                   
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" name="kelas" value="<?php echo $row['kelas']?>" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jurusan">Jurusan</label>
                        <select name="jurusan" class="form-control">
                            <option value="<?php echo $row['jurusan']?>" selected><?php echo $row['jurusan']?></option>
                            <option value="Management">Management</option>
                            <option value="Otomotif">Otomotif</option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        </select>
                    </div>

                    <input type="submit" name="kirim" value="UBAH" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>

<?php include "footer.php";?>