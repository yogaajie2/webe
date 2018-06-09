<!doctype html>
<html lang="en">

  <?php include ('../fungsi/koneksi.php'); ?>

  <head>

    <?php include ('head.html'); ?>

    <title>Layanan | Webe Piles</title>
  </head>

  <body>
    <div class="container-fluid sticky-top menu">
        <div class="container">

            <?php include ('navbar.html') ?>
        
        </div>
    </div>

    <div class="container">
    	<div class="row text-center">
            <div class="col">
                <h1 class="mt-5" style="text-transform: uppercase;">Layanan</h1>
                <small>
                    <a href="home.php">Beranda</a> > Layanan
                </small>
            </div>
        </div>
        <div class="row my-5">

            <?php
                $layanan = "SELECT * FROM layanan WHERE bahasa_layanan = 'cn'";
                $hasil_layanan = mysqli_query($koneksi, $layanan);

                $i = 0;

                while ($row_layanan = mysqli_fetch_array($hasil_layanan, MYSQLI_ASSOC)) {
            ?>

            <div class="col-md-4">
                <img class="image-fluid" style="width: 100%; height: 230px;" src="../<?php echo $row_layanan['gambar_layanan']; ?>">
                <h3 class="mt-3"><?php echo $row_layanan['nama_layanan']; ?></h3>
                <p><?php echo $row_layanan['deskripsi_layanan']; ?></p>
            </div>

            <?php 
              $i++;
              if ($i % 3 == 0) {
                echo '</div><div class="row my-5">';
              }
            ?>

            <?php } ?>

            <!--
            <div class="col-md-4">
                <img class="image-fluid" style="width: 100%; height: 230px;" src="img/services/spun-pile.jpg">
                <h3 class="mt-3">Spun Pile</h3>
                <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="col-md-4">
                <img class="image-fluid" style="width: 100%; height: 230px;" src="img/services/square-pile.jpg">
                <h3 class="mt-3">Square Pile</h3>
                <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            -->

        </div>

        <!--
        <div class="row mt-4">
            <div class="col-md-4">
                <img class="image-fluid" style="width: 100%; height: 230px;" src="img/services/pipe-pile.jpg">
                <h3 class="mt-3">Pipe Pile</h3>
                <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="col-md-4">
                <img class="image-fluid" style="width: 100%; height: 230px;" src="img/services/bored-pile.jpg">
                <h3 class="mt-3">Bored Pile</h3>
                <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
            <div class="col-md-4">
                <img class="image-fluid" style="width: 100%; height: 230px;" src="img/services/barrette-pile.jpg">
                <h3 class="mt-3">Barrette Pile</h3>
                <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
            </div>
        </div>
        -->        
    </div>

    <?php include ('footer.php') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>