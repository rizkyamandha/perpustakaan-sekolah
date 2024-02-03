<?php include "header.php"; ?>
    <!-- Awal script Slider/ Carousel -->
    <div id="contoh-carousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#contoh-carousel" data-slide-to="0" class="active"></li>
        <li data-target="#contoh-carousel" data-slide-to="1"></li>
        <li data-target="#contoh-carousel" data-slide-to="2"></li>
      </ol>

      <div class="carousel-inner" role="listbox">
      <!-- Awal script Slider pertama -->
        <div class="item active">
          <img src="images/pustaka6.jpg" alt="Berisi keterangan gambar">
        </div><!-- Akhir script Slider pertama -->

        <!-- Awal script Slider kedua -->
        <div class="item">
          <img src="images/pustaka9.jpg" alt="Berisi keterangan gambar">
        </div><!-- Akhir script Slider kedua -->

        <!-- Awal script Slider ketiga -->
        <div class="item">
          <img src="images/pustaka8.jpg" alt="Berisi keterangan gambar">
        </div><!-- Akhir script Slider ketiga -->
    </div>

    <!-- Awal script Button Geser Kiri dan Kanan -->
    <a class="left carousel-control" href="#contoh-carousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
    </a>
    
    <a class="right carousel-control" href="#contoh-carousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
    </a><!-- Akhir script Button Geser Kiri dan Kanan -->
    
    </div><!-- Akhir script Slider/Carousel -->

    
 <p><b>
<?php include "footer.php"; ?></b></p>