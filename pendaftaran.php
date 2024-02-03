<?php include "header.php"; ?>
        
        <!-- Awal Page -->
        <div class="container">
        <!-- Awal baris -->
        <div class="row">
            <div class="col-md-12"><!-- Awal Kolom Pertama -->
            <div class="panel panel-default">
                <div class="panel-body">
                <h2 class="text-center">Pendaftaran Perpustakaan SMKN 1 Sinabang</h2>

                <?php 

                    if(@$_GET['pesan']=="inputBerhasil"){

                    ?>
                                    <div class="alert alert-success">
                                    Terima kasih, data anda berhasil terkirim!
                                    </div>
                    <?php

                    }

                    ?>

                    <form action="proses-pendaftaran.php" method="post">
                    <div class="form-group">
                        <label for="nim">Nisn</label>
                        <input type="number" name="nisn" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" name="nama" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select name="jenis_kelamin" class="form-control">
                            <option value="Laki-laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                 
                    <div class="form-group">
                        <label for="nama">Kelas</label>
                        <input type="text" name="kelas" class="form-control">
                    </div>
                    
                    <div class="form-group">
                        <label for="jenis_kelamin">Jurusan</label>
                        <select name="jurusan" class="form-control">
                            <option value="Management">Management</option>
                            <option value="Otomotif">Otomotif</option>
                            <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                        </select>
                    </div>

                    <input type="submit" name="kirim" value="SIMPAN" class="btn btn-info">
                    <input type="reset" name="kosongkan" value="Kosongkan" class="btn btn-danger">
                </form>
            </div>
        </div>
    </div>
<?php include "footer.php";?>