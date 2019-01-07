<!doctype html>
<html lang="en">

  <?php include ('fungsi/koneksi.php'); ?>

  <head>

    <?php include ('head.html'); ?>

    <title>Projects | Webe Piles</title>
  </head>

  <body>
    <div class="container-fluid sticky-top menu">
        <div class="container">

            <?php include ('navbar.php') ?>
        
        </div>
    </div>

    <div class="container">
    	<div class="row text-center">
            <div class="col">
                <h1 class="mt-5" style="text-transform: uppercase;">Projects</h1>
                <small>
                    <a href="home.php">Home</a> > Projects
                </small>
            </div>
        </div>
        <div class="row text-center mt-5 mb-0">
            <div class="col">
                <!-- Nav pills -->
                <ul class="nav nav-pills justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link btn jumbotron-button mx-2 active" data-toggle="pill" href="#all">All</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn jumbotron-button mx-2" data-toggle="pill" href="#borpile">Bored Pile</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn jumbotron-button mx-2" data-toggle="pill" href="#dryboring">Dry Boring</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn jumbotron-button mx-2" data-toggle="pill" href="#pancang">Pancang</a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane container active" id="all">
                <div class="row my-5">
                    <?php
                        $proyek = "SELECT * FROM proyek WHERE bahasa_proyek = 'en' ORDER BY id_proyek DESC";
                        $hasil_proyek = mysqli_query($koneksi, $proyek);

                        $i = 0;

                        while ($row_proyek = mysqli_fetch_array($hasil_proyek, MYSQLI_ASSOC)) {
                    ?>

                    <div class="col-md-4 py-5">
                        <div class="container position-relative d-inline-block p-0">
                            <img class="img-fluid" style="width: 100%; height: 240px;" src="<?php echo $row_proyek['gambar_proyek']; ?>">
                            <div class="container position-absolute project-overlay p-0">
                                <div class="position-absolute project-overlay-text">
                                    <a style="color: white;" href="project-details.php?id=<?php echo $row_proyek['id_proyek']; ?>">
                                        <h3><?php echo $row_proyek['nama_proyek']; ?></h3>
                                        <p><?php echo $row_proyek['lokasi_proyek']; ?></p>
                                    </a>
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
                </div>
            </div>
            <div class="tab-pane container fade" id="borpile">
                <div class="row my-5">
                    <?php
                        $proyek = "SELECT * FROM proyek WHERE bahasa_proyek = 'en' AND filter_proyek = 'borpile' ORDER BY id_proyek DESC";
                        $hasil_proyek = mysqli_query($koneksi, $proyek);

                        $i = 0;

                        while ($row_proyek = mysqli_fetch_array($hasil_proyek, MYSQLI_ASSOC)) {
                    ?>

                    <div class="col-md-4 py-5">
                        <div class="container position-relative d-inline-block p-0">
                            <img class="img-fluid" style="width: 100%; height: 240px;" src="<?php echo $row_proyek['gambar_proyek']; ?>">
                            <div class="container position-absolute project-overlay p-0">
                                <div class="position-absolute project-overlay-text">
                                    <a style="color: white;" href="project-details.php?id=<?php echo $row_proyek['id_proyek']; ?>">
                                        <h3><?php echo $row_proyek['nama_proyek']; ?></h3>
                                        <p><?php echo $row_proyek['lokasi_proyek']; ?></p>
                                    </a>
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
                </div>
            </div>
            <div class="tab-pane container fade" id="dryboring">
                <div class="row my-5">
                    <?php
                        $proyek = "SELECT * FROM proyek WHERE bahasa_proyek = 'en' AND filter_proyek = 'dryboring' ORDER BY id_proyek DESC";
                        $hasil_proyek = mysqli_query($koneksi, $proyek);

                        $i = 0;

                        while ($row_proyek = mysqli_fetch_array($hasil_proyek, MYSQLI_ASSOC)) {
                    ?>

                    <div class="col-md-4 py-5">
                        <div class="container position-relative d-inline-block p-0">
                            <img class="img-fluid" style="width: 100%; height: 240px;" src="<?php echo $row_proyek['gambar_proyek']; ?>">
                            <div class="container position-absolute project-overlay p-0">
                                <div class="position-absolute project-overlay-text">
                                    <a style="color: white;" href="project-details.php?id=<?php echo $row_proyek['id_proyek']; ?>">
                                        <h3><?php echo $row_proyek['nama_proyek']; ?></h3>
                                        <p><?php echo $row_proyek['lokasi_proyek']; ?></p>
                                    </a>
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
                </div>
            </div>
            <div class="tab-pane container fade" id="pancang">
                <div class="row my-5">
                    <?php
                        $proyek = "SELECT * FROM proyek WHERE bahasa_proyek = 'en' AND filter_proyek = 'pancang' ORDER BY id_proyek DESC";
                        $hasil_proyek = mysqli_query($koneksi, $proyek);

                        $i = 0;

                        while ($row_proyek = mysqli_fetch_array($hasil_proyek, MYSQLI_ASSOC)) {
                    ?>

                    <div class="col-md-4 py-5">
                        <div class="container position-relative d-inline-block p-0">
                            <img class="img-fluid" style="width: 100%; height: 240px;" src="<?php echo $row_proyek['gambar_proyek']; ?>">
                            <div class="container position-absolute project-overlay p-0">
                                <div class="position-absolute project-overlay-text">
                                    <a style="color: white;" href="project-details.php?id=<?php echo $row_proyek['id_proyek']; ?>">
                                        <h3><?php echo $row_proyek['nama_proyek']; ?></h3>
                                        <p><?php echo $row_proyek['lokasi_proyek']; ?></p>
                                    </a>
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
                </div>
            </div>
        </div>
    </div>

    <?php include ('footer.php') ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

  </body>
</html>