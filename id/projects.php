<!doctype html>
<html lang="en">

  <?php include ('../fungsi/koneksi.php'); ?>
  <?php include ('head.html'); ?>

  <body>
    <div class="container-fluid sticky-top menu">
        <div class="container">

            <?php include ('navbar.html') ?>
        
        </div>
    </div>

    <div class="container">
    	<div class="row text-center">
            <div class="col">
                <h1 class="mt-5" style="text-transform: uppercase;">Proyek</h1>
                <small>
                    <a href="home.php">Beranda</a> > Proyek
                </small>
            </div>
        </div>
        <div class="row my-5">

            <?php
                $proyek = "SELECT * FROM proyek WHERE bahasa_proyek = 'id'";
                $hasil_proyek = mysqli_query($koneksi, $proyek);

                $i = 0;

                while ($row_proyek = mysqli_fetch_array($hasil_proyek, MYSQLI_ASSOC)) {
            ?>

            <div class="col-md-4 py-5">
                <div class="container position-relative d-inline-block overlay-container p-0">
                    <img class="img-fluid" style="width: 100%; height: 240px;" src="../<?php echo $row_proyek['gambar_proyek']; ?>">
                    <div class="container position-absolute project-overlay p-0">
                        <div class="position-absolute project-overlay-text">
                            <h3><?php echo $row_proyek['nama_proyek']; ?></h3>
                            <p><?php echo $row_proyek['lokasi_proyek']; ?></p>
                        </div>
                    </div>
                </div>
            </div>


            <?php 
              $i++;
              if ($i % 3 == 0) {
                echo '</div><div class="row my-5">';
              }
            ?>

            <?php } ?>

            <!--
            <div class="col-md-4 py-5">
                <img class="img-fluid" style="width: 100%; height: 240px;" src="img/projects/projects-2.jpeg">
            </div>
            <div class="col-md-4 py-5">
                <img class="img-fluid" style="width: 100%; height: 240px;" src="img/projects/projects-3.jpeg"> 
            </div>
            -->

        </div>

        <!--
        <div class="row">
            <div class="col-md-4 py-5">
                <img class="img-fluid" style="width: 100%; height: 240px;" src="img/projects/projects-4.jpeg">
            </div>
            <div class="col-md-4 py-5">
                <img class="img-fluid" style="width: 100%; height: 240px;" src="img/projects/projects-5.jpeg">
            </div>
            <div class="col-md-4 py-5">
                <img class="img-fluid" style="width: 100%; height: 240px;" src="img/projects/projects-6.jpeg">
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 py-5">
                <img class="img-fluid" style="width: 100%; height: 240px;" src="img/projects/projects-7.jpeg">
            </div>
            <div class="col-md-4 py-5">
                <img class="img-fluid" style="width: 100%; height: 240px;" src="img/projects/projects-8.jpeg">
            </div>
            <div class="col-md-4 py-5">
                <img class="img-fluid" style="width: 100%; height: 240px;" src="img/projects/projects-9.jpg">
            </div>
        </div>
        -->

    </div>

    <?php include ('footer.html') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>