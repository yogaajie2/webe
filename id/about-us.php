<!doctype html>
<html lang="en">

  <?php include ('../fungsi/koneksi.php'); ?>

  <head>

    <?php include ('head.html'); ?>

    <title>Tentang Kami | Webe Piles</title>
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
                <h1 class="mt-5" style="text-transform: uppercase;">Tentang Kami</h1>
                <small>
                    <a href="home.php">Beranda</a> > Tentang Kami
                </small>
            </div>
        </div>
        <div class="row mt-5">

            <?php
                $tentang_kami = "SELECT * FROM tentang_kami WHERE bahasa_tentang_kami = 'id'";
                $hasil_tentang_kami = mysqli_query($koneksi, $tentang_kami);

                while ($row_tentang_kami = mysqli_fetch_array($hasil_tentang_kami, MYSQLI_ASSOC)) {
            ?>

            <div class="col-md-6">
                <img class="img-fluid" style="width: 100%; height: 320px;" src="../<?php echo $row_tentang_kami['gambar_tentang_kami']; ?>">
                <h3 class="mt-3" style="text-transform: uppercase;"><?php echo $row_tentang_kami['judul_tentang_kami']; ?></h3>
                <p><?php echo $row_tentang_kami['isi_tentang_kami']; ?></p>
            </div>

            <?php } ?>

            <!--
            <div class="col-md-6">
                <img class="img-fluid" style="width: 100%; height: 320px;" src="../img/contents/contents-2.jpg">
                <h3 class="mt-3" style="text-transform: uppercase;">What We Do</h3>
                <p>Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<br>
                Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
            -->
        </div>
        <h1 class="mt-5" style="text-transform: uppercase;">Board of Directors</h1>
        <div class="row mt-3">

            <?php
                $jajaran_direksi = "SELECT * FROM jajaran_direksi WHERE bahasa_jajaran_direksi = 'id'";
                $hasil_jajaran_direksi = mysqli_query($koneksi, $jajaran_direksi);

                while ($row_jajaran_direksi = mysqli_fetch_array($hasil_jajaran_direksi, MYSQLI_ASSOC)) {
            ?>

            <div class="col-md-4">
                <img class="img-fluid" src="../<?php echo $row_jajaran_direksi['gambar_jajaran_direksi']; ?>">
                <h4 class="mt-3"><?php echo $row_jajaran_direksi['nama_jajaran_direksi']; ?></h4>
                <p style="font-style: italic;"><?php echo $row_jajaran_direksi['jabatan_jajaran_direksi']; ?></p>
                <p><?php echo $row_jajaran_direksi['tentang_jajaran_direksi']; ?></p>
            </div>

            <?php } ?>

            <!--
            <div class="col-md-4">
                <img class="img-fluid" src="../img/contents/profile.png">
                <h4 class="mt-3">Hasan Agus</h4>
                <p style="font-style: italic;">Vice Director</p>
                <p>Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
            </div>
            <div class="col-md-4">
                <img class="img-fluid" src="../img/contents/profile.png">
                <h4 class="mt-3">Priscilla Elsa</h4>
                <p style="font-style: italic;">Secretary</p>
                <p>Donec a felis sed ligula aliquet sollicitudin a in elit. Nunc at commodo erat, fringilla egestas tortor. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae.</p>
            </div>
            -->
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