<!doctype html>
<html lang="id" class="h-100">

    <?php
      // Initialize the session
      session_start();

      // If session variable is not set it will redirect to login page
      if(!isset($_SESSION['username']) || empty($_SESSION['username'])){
        header("location: index.php");
        exit;
      }
    ?>

    <?php include 'head.html'; ?>

    <?php include 'fungsi/koneksi.php'; ?>

  <body class="h-100">

    <?php include 'navbar.php'; ?>

    <div class="container-fluid h-100">
      <div class="row h-100">
        
        <?php include 'sidebar.html'; ?>

        <div class="col-md-10">
          <div class="row">
            <div class="col d-flex justify-content-between">
              <h2>Kontak</h2>
            </div>
          </div>
          <br>

          <?php 
            include 'fungsi/koneksi.php';

            $kontak = "SELECT * FROM kontak";
            $hasil_kontak = mysqli_query($koneksi, $kontak);
            if (!$hasil_kontak) {
              echo "ERROR";
            }
          ?>

          <table class="table table-hover text-center">
            <thead>
              <tr>
                <th class="align-middle">Alamat</th>
                <th class="align-middle">Telepon</th>
                <th class="align-middle">Email</th>
                <th class="align-middle">Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                while ($row_kontak = mysqli_fetch_array($hasil_kontak, MYSQLI_ASSOC)) {
              ?>

              <tr>
                <td class="align-middle"><?php echo $row_kontak['alamat']; ?></td>
                <td class="align-middle"><?php echo $row_kontak['telepon']; ?></td>
                <td class="align-middle"><?php echo $row_kontak['email']; ?></td>
                <td class="align-middle">
                  <a href="ubah/ubah-kontak.php?id=<?php echo $row_kontak['id_kontak']; ?>" class="btn btn-link">Ubah</a>
                </td>
              </tr>

              <?php 
                }
              ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>