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
              <h2>Pesan</h2>
            </div>
          </div>
          <br>

          <!-- Nav pills -->
          <ul class="nav nav-pills nav-fill" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#pesan-en">English</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pesan-id">Indonesia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pesan-cn">Chinese</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div id="pesan-en" class="container tab-pane active"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $pesan_en = "SELECT * FROM pesan WHERE bahasa_pesan = 'en'";
                $hasil_pesan_en = mysqli_query($koneksi, $pesan_en);
                if (!$hasil_pesan_en) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover">
                <thead class="text-center">
                  <tr>
                    <th class="align-middle">Nama pengirim</th>
                    <th class="align-middle">Email pengirim</th>
                    <th class="align-middle">Perusahaan pengirim</th>
                    <th class="align-middle">Telepon pengirim</th>
                    <th class="align-middle">Subjek pesan</th>
                    <th class="align-middle">Pesan</th>
                    <th class="align-middle">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_pesan_en = mysqli_fetch_array($hasil_pesan_en, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td class="align-middle"><?php echo $row_pesan_en['nama_pengirim']; ?></td>
                    <td class="align-middle"><?php echo $row_pesan_en['email_pengirim']; ?></td>
                    <td class="align-middle"><?php echo $row_pesan_en['perusahaan_pengirim']; ?></td>
                    <td class="align-middle"><?php echo $row_pesan_en['telepon_pengirim']; ?></td>
                    <td class="align-middle"><?php echo $row_pesan_en['subjek_pesan']; ?></td>
                    <td class="align-middle"><?php echo $row_pesan_en['pesan']; ?></td>
                    <td class="align-middle">
                      <a href="fungsi/balas-pesan.php?id=<?php echo $row_pesan_en['id_pesan']; ?>" class="btn btn-link">Ubah</a>
                      <a href="fungsi/delete/delete-pesan.php?id=<?php echo $row_pesan_en['id_pesan']; ?>" class="btn btn-link">Hapus</a>
                    </td>
                  </tr>

                  <?php 
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <div class="tab-content">
            <div id="pesan-id" class="container tab-pane fade"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $pesan_id = "SELECT * FROM pesan WHERE bahasa_pesan = 'id'";
                $hasil_pesan_id = mysqli_query($koneksi, $pesan_id);
                if (!$hasil_pesan_id) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover">
                <thead class="text-center">
                  <tr>
                    <th class="align-middle">Nama pengirim</th>
                    <th class="align-middle">Email pengirim</th>
                    <th class="align-middle">Perusahaan pengirim</th>
                    <th class="align-middle">Telepon pengirim</th>
                    <th class="align-middle">Subjek pesan</th>
                    <th class="align-middle">Pesan</th>
                    <th class="align-middle">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_pesan_id = mysqli_fetch_array($hasil_pesan_id, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td class="align-middle"><?php echo $row_pesan_id['nama_pengirim']; ?></td>
                    <td class="align-middle"><?php echo $row_pesan_id['email_pengirim']; ?></td>
                    <td class="align-middle"><?php echo $row_pesan_id['perusahaan_pengirim']; ?></td>
                    <td class="align-middle"><?php echo $row_pesan_id['telepon_pengirim']; ?></td>
                    <td class="align-middle"><?php echo $row_pesan_id['subjek_pesan']; ?></td>
                    <td class="align-middle"><?php echo $row_pesan_id['pesan']; ?></td>
                    <td class="align-middle">
                      <a href="fungsi/balas-pesan.php?id=<?php echo $row_pesan_id['id_pesan']; ?>" class="btn btn-link">Ubah</a>
                      <a href="fungsi/delete/delete-pesan.php?id=<?php echo $row_pesan_id['id_pesan']; ?>" class="btn btn-link">Hapus</a>
                    </td>
                  </tr>

                  <?php 
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <div class="tab-content">
            <div id="pesan-cn" class="container tab-pane fade"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $pesan_cn = "SELECT * FROM pesan WHERE bahasa_pesan = 'cn'";
                $hasil_pesan_cn = mysqli_query($koneksi, $pesan_cn);
                if (!$hasil_pesan_cn) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover">
                <thead class="text-center">
                  <tr>
                    <th class="align-middle">Nama pengirim</th>
                    <th class="align-middle">Email pengirim</th>
                    <th class="align-middle">Perusahaan pengirim</th>
                    <th class="align-middle">Telepon pengirim</th>
                    <th class="align-middle">Subjek pesan</th>
                    <th class="align-middle">Pesan</th>
                    <th class="align-middle">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_pesan_cn = mysqli_fetch_array($hasil_pesan_cn, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td class="align-middle"><?php echo $row_pesan_cn['nama_pengirim']; ?></td>
                    <td class="align-middle"><?php echo $row_pesan_cn['email_pengirim']; ?></td>
                    <td class="align-middle"><?php echo $row_pesan_cn['perusahaan_pengirim']; ?></td>
                    <td class="align-middle"><?php echo $row_pesan_cn['telepon_pengirim']; ?></td>
                    <td class="align-middle"><?php echo $row_pesan_cn['subjek_pesan']; ?></td>
                    <td class="align-middle"><?php echo $row_pesan_cn['pesan']; ?></td>
                    <td class="align-middle">
                      <a href="fungsi/balas-pesan.php?id=<?php echo $row_pesan_cn['id_pesan']; ?>" class="btn btn-link">Ubah</a>
                      <a href="fungsi/delete/delete-pesan.php?id=<?php echo $row_pesan_cn['id_pesan']; ?>" class="btn btn-link">Hapus</a>
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