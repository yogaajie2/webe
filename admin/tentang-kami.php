<!doctype html>
<html lang="id">

    <?php include 'head.php'; ?>

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
              <h2>Tentang Kami</h2>
            </div>
          </div>
          <br>

          <!-- Nav pills -->
          <ul class="nav nav-pills nav-fill" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#tentang-kami-en">English</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#tentang-kami-id">Indonesia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#tentang-kami-cn">Chinese</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div id="tentang-kami-en" class="container tab-pane active"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $tentang_kami_en = "SELECT * FROM tentang_kami WHERE bahasa_tentang_kami = 'en'";
                $hasil_tentang_kami_en = mysqli_query($koneksi, $tentang_kami_en);
                if (!$hasil_tentang_kami_en) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover">
                <thead class="text-center">
                  <tr>
                    <th class="align-middle">Judul</th>
                    <th class="align-middle">Isi</th>
                    <th class="align-middle">Gambar</th>
                    <th class="align-middle">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_tentang_kami_en = mysqli_fetch_array($hasil_tentang_kami_en, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td class="align-middle"><?php echo $row_tentang_kami_en['judul_tentang_kami']; ?></td>
                    <td class="align-middle"><?php echo $row_tentang_kami_en['isi_tentang_kami']; ?></td>
                    <td class="align-middle"><img style="width: 320px; height: 240px;" src="../<?php echo $row_tentang_kami_en['gambar_tentang_kami']; ?>"></td>
                    <td class="align-middle">
                      <a href="ubah/ubah-tentang-kami.php?id=<?php echo $row_tentang_kami_en['id_tentang_kami']; ?>" class="btn btn-link">Ubah</a>
                    </td>
                  </tr>

                  <?php 
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <div id="tentang-kami-id" class="container tab-pane fade"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $tentang_kami_id = "SELECT * FROM tentang_kami WHERE bahasa_tentang_kami = 'id'";
                $hasil_tentang_kami_id = mysqli_query($koneksi, $tentang_kami_id);
                if (!$hasil_tentang_kami_id) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover">
                <thead class="text-center">
                  <tr>
                    <th class="align-middle">Judul</th>
                    <th class="align-middle">Isi</th>
                    <th class="align-middle">Gambar</th>
                    <th class="align-middle">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_tentang_kami_id = mysqli_fetch_array($hasil_tentang_kami_id, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td class="align-middle"><?php echo $row_tentang_kami_id['judul_tentang_kami']; ?></td>
                    <td class="align-middle"><?php echo $row_tentang_kami_id['isi_tentang_kami']; ?></td>
                    <td class="align-middle"><img style="width: 320px; height: 240px;" src="../<?php echo $row_tentang_kami_id['gambar_tentang_kami']; ?>"></td>
                    <td class="align-middle">
                      <a href="ubah/ubah-tentang-kami.php?id=<?php echo $row_tentang_kami_id['id_tentang_kami']; ?>" class="btn btn-link">Ubah</a>
                    </td>
                  </tr>

                  <?php 
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <div id="tentang-kami-cn" class="container tab-pane fade"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $tentang_kami_cn = "SELECT * FROM tentang_kami WHERE bahasa_tentang_kami = 'cn'";
                $hasil_tentang_kami_cn = mysqli_query($koneksi, $tentang_kami_cn);
                if (!$hasil_tentang_kami_cn) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover">
                <thead class="text-center">
                  <tr>
                    <th class="align-middle">Judul</th>
                    <th class="align-middle">Isi</th>
                    <th class="align-middle">Gambar</th>
                    <th class="align-middle">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_tentang_kami_cn = mysqli_fetch_array($hasil_tentang_kami_cn, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td class="align-middle"><?php echo $row_tentang_kami_cn['judul_tentang_kami']; ?></td>
                    <td class="align-middle"><?php echo $row_tentang_kami_cn['isi_tentang_kami']; ?></td>
                    <td class="align-middle"><img style="width: 320px; height: 240px;" src="../<?php echo $row_tentang_kami_cn['gambar_tentang_kami']; ?>"></td>
                    <td class="align-middle">
                      <a href="ubah/ubah-tentang-kami.php?id=<?php echo $row_tentang_kami_cn['id_tentang_kami']; ?>" class="btn btn-link">Ubah</a>
                    </td>
                  </tr>

                  <?php 
                    }
                  ?>
                </tbody>
              </table>
            </div>
          </div>

          <div class="row">
            <div class="col d-flex justify-content-between">
              <h2>Jajaran Direksi</h2>
            </div>
          </div>
          <br>

          <!-- Nav pills -->
          <ul class="nav nav-pills nav-fill" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#jajaran-direksi-en">English</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#jajaran-direksi-id">Indonesia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#jajaran-direksi-cn">Chinese</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div id="jajaran-direksi-en" class="container tab-pane active"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $jajaran_direksi_en = "SELECT * FROM jajaran_direksi WHERE bahasa_jajaran_direksi = 'en'";
                $hasil_jajaran_direksi_en = mysqli_query($koneksi, $jajaran_direksi_en);
                if (!$hasil_jajaran_direksi_en) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover">
                <thead class="text-center">
                  <tr>
                    <th class="align-middle">Nama</th>
                    <th class="align-middle">Jabatan</th>
                    <th class="align-middle">Tentang</th>
                    <th class="align-middle">Gambar</th>
                    <th class="align-middle">Opsi</th>
                  </tr>
                </thead>
                <tbody>

                  <?php 
                    while ($row_jajaran_direksi_en = mysqli_fetch_array($hasil_jajaran_direksi_en, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td class="align-middle"><?php echo $row_jajaran_direksi_en['nama_jajaran_direksi']; ?></td>
                    <td class="align-middle"><?php echo $row_jajaran_direksi_en['jabatan_jajaran_direksi']; ?></td>
                    <td class="align-middle"><?php echo $row_jajaran_direksi_en['tentang_jajaran_direksi']; ?></td>
                    <td class="align-middle"><img style="width: 320px; height: 240px;" src="../<?php echo $row_jajaran_direksi_en['gambar_jajaran_direksi']; ?>"></td>
                    <td class="text-right align-middle">
                      <a href="ubah/ubah-jajaran-direksi.php?id=<?php echo $row_jajaran_direksi_en['id_jajaran_direksi']; ?>" class="btn btn-link">Ubah</a>
                    </td>
                  </tr>

                  <?php 
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <div id="jajaran-direksi-id" class="container tab-pane fade"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $jajaran_direksi_id = "SELECT * FROM jajaran_direksi WHERE bahasa_jajaran_direksi = 'id'";
                $hasil_jajaran_direksi_id = mysqli_query($koneksi, $jajaran_direksi_id);
                if (!$hasil_jajaran_direksi_id) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover">
                <thead class="text-center">
                  <tr>
                    <th class="align-middle">Nama</th>
                    <th class="align-middle">Jabatan</th>
                    <th class="align-middle">Tentang</th>
                    <th class="align-middle">Gambar</th>
                    <th class="align-middle">Opsi</th>
                  </tr>
                </thead>
                <tbody>

                  <?php 
                    while ($row_jajaran_direksi_id = mysqli_fetch_array($hasil_jajaran_direksi_id, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td class="align-middle"><?php echo $row_jajaran_direksi_id['nama_jajaran_direksi']; ?></td>
                    <td class="align-middle"><?php echo $row_jajaran_direksi_id['jabatan_jajaran_direksi']; ?></td>
                    <td class="align-middle"><?php echo $row_jajaran_direksi_id['tentang_jajaran_direksi']; ?></td>
                    <td class="align-middle"><img style="width: 320px; height: 240px;" src="../<?php echo $row_jajaran_direksi_id['gambar_jajaran_direksi']; ?>"></td>
                    <td class="text-right align-middle">
                      <a href="ubah/ubah-jajaran-direksi.php?id=<?php echo $row_jajaran_direksi_id['id_jajaran_direksi']; ?>" class="btn btn-link">Ubah</a>
                    </td>
                  </tr>

                  <?php 
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <div id="jajaran-direksi-cn" class="container tab-pane fade"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $jajaran_direksi_cn = "SELECT * FROM jajaran_direksi WHERE bahasa_jajaran_direksi = 'cn'";
                $hasil_jajaran_direksi_cn = mysqli_query($koneksi, $jajaran_direksi_cn);
                if (!$hasil_jajaran_direksi_cn) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover">
                <thead class="text-center">
                  <tr>
                    <th class="align-middle">Nama</th>
                    <th class="align-middle">Jabatan</th>
                    <th class="align-middle">Tentang</th>
                    <th class="align-middle">Gambar</th>
                    <th class="align-middle">Opsi</th>
                  </tr>
                </thead>
                <tbody>

                  <?php 
                    while ($row_jajaran_direksi_cn = mysqli_fetch_array($hasil_jajaran_direksi_cn, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td class="align-middle"><?php echo $row_jajaran_direksi_cn['nama_jajaran_direksi']; ?></td>
                    <td class="align-middle"><?php echo $row_jajaran_direksi_cn['jabatan_jajaran_direksi']; ?></td>
                    <td class="align-middle"><?php echo $row_jajaran_direksi_cn['tentang_jajaran_direksi']; ?></td>
                    <td class="align-middle"><img style="width: 320px; height: 240px;" src="../<?php echo $row_jajaran_direksi_cn['gambar_jajaran_direksi']; ?>"></td>
                    <td class="text-right align-middle">
                      <a href="ubah/ubah-jajaran-direksi.php?id=<?php echo $row_jajaran_direksi_cn['id_jajaran_direksi']; ?>" class="btn btn-link">Ubah</a>
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