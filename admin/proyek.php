<!doctype html>
<html lang="id">

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

  </head>
  <body>

    <?php include 'navbar.php'; ?>

    <div class="container-fluid">
      <div class="row">
        
        <?php include 'sidebar.html'; ?>

        <div class="col-md-10">
          <div class="row">
            <div class="col d-flex justify-content-between">
              <h2>Proyek</h2>
              <a href="tambah/tambah-proyek.php" class="btn btn-link">
                <h3 style="color: #ff9933; font-weight: bold;">Tambah Data</h3>
              </a>
            </div>
          </div>
          <br>

          <!-- Nav pills -->
          <ul class="nav nav-pills nav-fill" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#proyek-en">English</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#proyek-id">Indonesia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#proyek-cn">Chinese</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div id="proyek-en" class="container tab-pane active"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $proyek_en = "SELECT * FROM proyek WHERE bahasa_proyek = 'en'";
                $hasil_proyek_en = mysqli_query($koneksi, $proyek_en);
                if (!$hasil_proyek_en) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover text-center">
                <thead>
                  <tr>
                    <th class="align-middle">Nama proyek</th>
                    <th class="align-middle">Lokasi proyek</th>
                    <th class="align-middle">Gambar proyek</th>
                    <th class="align-middle">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_proyek_en = mysqli_fetch_array($hasil_proyek_en, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td class="align-middle"><?php echo $row_proyek_en['nama_proyek']; ?></td>
                    <td class="align-middle"><?php echo $row_proyek_en['lokasi_proyek']; ?></td>
                    <td class="align-middle"><img style="width: 320px; height: 240px;" src="../<?php echo $row_proyek_en['gambar_proyek']; ?>"></td>
                    <td class="align-middle">
                      <a href="ubah/ubah-proyek.php?id=<?php echo $row_proyek_en['id_proyek']; ?>" class="btn btn-link">Ubah</a>
                      <a href="fungsi/delete/delete-proyek.php?id=<?php echo $row_proyek_en['id_proyek']; ?>" class="btn btn-link">Hapus</a>
                    </td>
                  </tr>

                  <?php 
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <div id="proyek-id" class="container tab-pane fade"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $proyek_id = "SELECT * FROM proyek WHERE bahasa_proyek = 'id'";
                $hasil_proyek_id = mysqli_query($koneksi, $proyek_id);
                if (!$hasil_proyek_id) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover text-center">
                <thead>
                  <tr>
                    <th class="align-middle">Nama proyek</th>
                    <th class="align-middle">Lokasi proyek</th>
                    <th class="align-middle">Gambar proyek</th>
                    <th class="align-middle">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_proyek_id = mysqli_fetch_array($hasil_proyek_id, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td class="align-middle"><?php echo $row_proyek_id['nama_proyek']; ?></td>
                    <td class="align-middle"><?php echo $row_proyek_id['lokasi_proyek']; ?></td>
                    <td class="align-middle"><img style="width: 320px; height: 240px;" src="../<?php echo $row_proyek_id['gambar_proyek']; ?>"></td>
                    <td class="align-middle">
                      <a href="ubah/ubah-proyek.php?id=<?php echo $row_proyek_id['id_proyek']; ?>" class="btn btn-link">Ubah</a>
                      <a href="fungsi/delete/delete-proyek.php?id=<?php echo $row_proyek_id['id_proyek']; ?>" class="btn btn-link">Hapus</a>
                    </td>
                  </tr>

                  <?php 
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <div id="proyek-cn" class="container tab-pane fade"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $proyek_cn = "SELECT * FROM proyek WHERE bahasa_proyek = 'cn'";
                $hasil_proyek_cn = mysqli_query($koneksi, $proyek_cn);
                if (!$hasil_proyek_cn) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover text-center">
                <thead>
                  <tr>
                    <th class="align-middle">Nama proyek</th>
                    <th class="align-middle">Lokasi proyek</th>
                    <th class="align-middle">Gambar proyek</th>
                    <th class="align-middle">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_proyek_cn = mysqli_fetch_array($hasil_proyek_cn, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td class="align-middle"><?php echo $row_proyek_cn['nama_proyek']; ?></td>
                    <td class="align-middle"><?php echo $row_proyek_cn['lokasi_proyek']; ?></td>
                    <td class="align-middle"><img style="width: 320px; height: 240px;" src="../<?php echo $row_proyek_cn['gambar_proyek']; ?>"></td>
                    <td class="align-middle">
                      <a href="ubah/ubah-proyek.php?id=<?php echo $row_proyek_cn['id_proyek']; ?>" class="btn btn-link">Ubah</a>
                      <a href="fungsi/delete/delete-proyek.php?id=<?php echo $row_proyek_cn['id_proyek']; ?>" class="btn btn-link">Hapus</a>
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
      </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>