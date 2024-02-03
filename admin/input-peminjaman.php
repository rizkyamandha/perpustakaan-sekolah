<?php
  session_start();
  if (empty($_SESSION['user_id'])){
    header("location:../login.php");
  }
?>
<?php include "header.php";?>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="proses-input-peminjaman.php" method="POST">
                    <div class="form-group">
                        <label for="nim">Nisn</label>
                        <input type="number" name="nisn" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    
                    <div class="form-group">
                        <label for="judul_buku">Judul Buku</label>
                        <input type="text" name="judul_buku" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="no_buku">No Buku</label>
                        <input type="text" name="no_buku" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_pinjam">Tanggal Pinjam</label>
                        <input type="date" name="tanggal_pinjam" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_pengembalian">Tanggal Pengembalian</label>
                        <input type="date" name="tanggal_pengembalian" class="form-control">
                    </div>
                    

                    <div class="form-group">
                        <label for="jumlah_pinjam">Jumlah Peminjaman</label>
                       <input type="text" name="jumlah_pinjam" class="form-control">
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php";?>