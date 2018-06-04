<!doctype html>
<html lang="id">

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
              <h2>Layanan</h2>
              <a href="tambah/tambah-layanan.php" class="btn btn-link">
                <h3 style="color: #ff9933; font-weight: bold;">Tambah Data</h3>
              </a>
            </div>
          </div>
          <br>

          <!-- Nav pills -->
          <ul class="nav nav-pills nav-fill" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#layanan-en">English</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#layanan-id">Indonesia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#layanan-cn">Chinese</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div id="layanan-en" class="container tab-pane active"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $layanan_en = "SELECT * FROM layanan WHERE bahasa_layanan = 'en'";
                $hasil_layanan_en = mysqli_query($koneksi, $layanan_en);
                if (!$hasil_layanan_en) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover">
                <thead class="text-center">
                  <tr>
                    <th class="align-middle">Nama Layanan</th>
                    <th class="align-middle">Deskripsi Layanan</th>
                    <th class="align-middle">Gambar Layanan</th>
                    <th class="align-middle">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_layanan_en = mysqli_fetch_array($hasil_layanan_en, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td class="align-middle"><?php echo $row_layanan_en['nama_layanan']; ?></td>
                    <td class="align-middle"><?php echo $row_layanan_en['deskripsi_layanan']; ?></td>
                    <td class="align-middle"><img style="width: 320px; height: 240px;" src="../<?php echo $row_layanan_en['gambar_layanan']; ?>"></td>
                    <td class="align-middle">
                      <a href="ubah/ubah-layanan.php?id=<?php echo $row_layanan_en['id_layanan']; ?>" class="btn btn-link">Ubah</a>
                      <a href="#" class="btn btn-link">Hapus</a>
                    </td>
                  </tr>

                  <?php 
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <div id="layanan-id" class="container tab-pane fade"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $layanan_id = "SELECT * FROM layanan WHERE bahasa_layanan = 'id'";
                $hasil_layanan_id = mysqli_query($koneksi, $layanan_id);
                if (!$hasil_layanan_id) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover">
                <thead class="text-center">
                  <tr>
                    <th class="align-middle">Nama Layanan</th>
                    <th class="align-middle">Deskripsi Layanan</th>
                    <th class="align-middle">Gambar Layanan</th>
                    <th class="align-middle">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_layanan_id = mysqli_fetch_array($hasil_layanan_id, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td class="align-middle"><?php echo $row_layanan_id['nama_layanan']; ?></td>
                    <td class="align-middle"><?php echo $row_layanan_id['deskripsi_layanan']; ?></td>
                    <td class="align-middle"><img style="width: 320px; height: 240px;" src="../<?php echo $row_layanan_id['gambar_layanan']; ?>"></td>
                    <td class="align-middle">
                      <a href="ubah/ubah-layanan.php?id=<?php echo $row_layanan_id['id_layanan']; ?>" class="btn btn-link">Ubah</a>
                      <a href="#" class="btn btn-link">Hapus</a>
                    </td>
                  </tr>

                  <?php 
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <div id="layanan-cn" class="container tab-pane fade"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $layanan_cn = "SELECT * FROM layanan WHERE bahasa_layanan = 'cn'";
                $hasil_layanan_cn = mysqli_query($koneksi, $layanan_cn);
                if (!$hasil_layanan_cn) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover">
                <thead class="text-center">
                  <tr>
                    <th class="align-middle">Nama Layanan</th>
                    <th class="align-middle">Deskripsi Layanan</th>
                    <th class="align-middle">Gambar Layanan</th>
                    <th class="align-middle">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_layanan_cn = mysqli_fetch_array($hasil_layanan_cn, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td class="align-middle"><?php echo $row_layanan_cn['nama_layanan']; ?></td>
                    <td class="align-middle"><?php echo $row_layanan_cn['deskripsi_layanan']; ?></td>
                    <td class="align-middle"><img style="width: 320px; height: 240px;" src="../<?php echo $row_layanan_cn['gambar_layanan']; ?>"></td>
                    <td class="align-middle">
                      <a href="ubah/ubah-layanan.php?id=<?php echo $row_layanan_cn['id_layanan']; ?>" class="btn btn-link">Ubah</a>
                      <a href="#" class="btn btn-link">Hapus</a>
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