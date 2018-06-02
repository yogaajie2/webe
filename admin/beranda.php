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
              <h2>Fitur</h2>
            </div>
          </div>
          <br>

          <!-- Nav pills -->
          <ul class="nav nav-pills nav-fill" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#fitur-en">English</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#fitur-id">Indonesia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#fitur-cn">Chinese</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div id="fitur-en" class="container tab-pane active"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $fitur_en = "SELECT * FROM fitur WHERE bahasa_fitur = 'en'";
                $hasil_fitur_en = mysqli_query($koneksi, $fitur_en);
                if (!$hasil_fitur_en) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover">
                <thead class="text-center">
                  <tr>
                    <th>Nama Fitur</th>
                    <th>Deskripsi Fitur</th>
                    <th>Gambar Fitur</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_fitur_en = mysqli_fetch_array($hasil_fitur_en, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td><?php echo $row_fitur_en['nama_fitur']; ?></td>
                    <td><?php echo $row_fitur_en['deskripsi_fitur']; ?></td>
                    <td><?php echo $row_fitur_en['gambar_fitur']; ?></td>
                    <td>
                      <a href="#" class="btn btn-link">Ubah</a>
                    </td>
                  </tr>

                  <?php 
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <div id="fitur-id" class="container tab-pane fade"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $fitur_id = "SELECT * FROM fitur WHERE bahasa_fitur = 'id'";
                $hasil_fitur_id = mysqli_query($koneksi, $fitur_id);
                if (!$hasil_fitur_id) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover">
                <thead class="text-center">
                  <tr>
                    <th>Nama Fitur</th>
                    <th>Deskripsi Fitur</th>
                    <th>Gambar Fitur</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_fitur_id = mysqli_fetch_array($hasil_fitur_id, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td><?php echo $row_fitur_id['nama_fitur']; ?></td>
                    <td><?php echo $row_fitur_id['deskripsi_fitur']; ?></td>
                    <td><?php echo $row_fitur_id['gambar_fitur']; ?></td>
                    <td>
                      <a href="#" class="btn btn-link">Ubah</a>
                    </td>
                  </tr>

                  <?php 
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <div id="fitur-cn" class="container tab-pane fade"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $fitur_cn = "SELECT * FROM fitur WHERE bahasa_fitur = 'cn'";
                $hasil_fitur_cn = mysqli_query($koneksi, $fitur_cn);
                if (!$hasil_fitur_cn) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover">
                <thead class="text-center">
                  <tr>
                    <th>Nama Fitur</th>
                    <th>Deskripsi Fitur</th>
                    <th>Gambar Fitur</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_fitur_cn = mysqli_fetch_array($hasil_fitur_cn, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td><?php echo $row_fitur_cn['nama_fitur']; ?></td>
                    <td><?php echo $row_fitur_cn['deskripsi_fitur']; ?></td>
                    <td><?php echo $row_fitur_cn['gambar_fitur']; ?></td>
                    <td>
                      <a href="#" class="btn btn-link">Ubah</a>
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
              <h2>Pekerjaan</h2>
            </div>
          </div>
          <br>

          <!-- Nav pills -->
          <ul class="nav nav-pills nav-fill" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#pekerjaan-en">English</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pekerjaan-id">Indonesia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#pekerjaan-cn">Chinese</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div id="pekerjaan-en" class="container tab-pane active"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $pekerjaan_en = "SELECT * FROM pekerjaan WHERE bahasa_pekerjaan = 'en'";
                $hasil_pekerjaan_en = mysqli_query($koneksi, $pekerjaan_en);
                if (!$hasil_pekerjaan_en) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Nama pekerjaan</th>
                    <th class="text-right">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_pekerjaan_en = mysqli_fetch_array($hasil_pekerjaan_en, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td><?php echo $row_pekerjaan_en['nama_pekerjaan']; ?></td>
                    <td class="text-right">
                      <a href="#" class="btn btn-link">Ubah</a>
                    </td>
                  </tr>

                  <?php 
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <div id="pekerjaan-id" class="container tab-pane fade"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $pekerjaan_id = "SELECT * FROM pekerjaan WHERE bahasa_pekerjaan = 'id'";
                $hasil_pekerjaan_id = mysqli_query($koneksi, $pekerjaan_id);
                if (!$hasil_pekerjaan_id) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Nama pekerjaan</th>
                    <th class="text-right">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_pekerjaan_id = mysqli_fetch_array($hasil_pekerjaan_id, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td><?php echo $row_pekerjaan_id['nama_pekerjaan']; ?></td>
                    <td class="text-right">
                      <a href="#" class="btn btn-link">Ubah</a>
                    </td>
                  </tr>

                  <?php 
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <div id="pekerjaan-cn" class="container tab-pane fade"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $pekerjaan_cn = "SELECT * FROM pekerjaan WHERE bahasa_pekerjaan = 'cn'";
                $hasil_pekerjaan_cn = mysqli_query($koneksi, $pekerjaan_cn);
                if (!$hasil_pekerjaan_cn) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Nama pekerjaan</th>
                    <th class="text-right">Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_pekerjaan_cn = mysqli_fetch_array($hasil_pekerjaan_cn, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td><?php echo $row_pekerjaan_cn['nama_pekerjaan']; ?></td>
                    <td class="text-right">
                      <a href="#" class="btn btn-link">Ubah</a>
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
              <h2>Client</h2>
              <a href="#" class="btn btn-link">Tambah Data</a>
            </div>
          </div>
          <br>

          <?php 
            include 'fungsi/koneksi.php';

            $client = "SELECT * FROM client";
            $hasil_client = mysqli_query($koneksi, $client);
            if (!$hasil_client) {
              echo "ERROR";
            }
          ?>

          <table class="table table-hover text-left">
            <thead>
              <tr>
                <th>Nama client</th>
                <th class="text-right">Opsi</th>
              </tr>
            </thead>
            <tbody>

              <?php 
                while ($row_client = mysqli_fetch_array($hasil_client, MYSQLI_ASSOC)) {
              ?>

              <tr>
                <td><?php echo $row_client['nama_client']; ?></td>
                <td class="text-right">
                  <a href="#" class="btn btn-link">Ubah</a>
                  <a href="#" class="btn btn-link">Hapus</a>
                </td>
              </tr>

              <?php 
                }
              ?>
            </tbody>
          </table>

          <div class="row">
            <div class="col d-flex justify-content-between">
              <h2>Testimonial</h2>
              <a href="#" class="btn btn-link">Tambah Data</a>
            </div>
          </div>
          <br>

          <!-- Nav pills -->
          <ul class="nav nav-pills nav-fill" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" data-toggle="pill" href="#testimonial-en">English</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#testimonial-id">Indonesia</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="pill" href="#testimonial-cn">Chinese</a>
            </li>
          </ul>

          <!-- Tab panes -->
          <div class="tab-content">
            <div id="testimonial-en" class="container tab-pane active"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $testimonial_en = "SELECT * FROM testimonial WHERE bahasa_testimonial = 'en'";
                $hasil_testimonial_en = mysqli_query($koneksi, $testimonial_en);
                if (!$hasil_testimonial_en) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover text-left">
                <thead>
                  <tr>
                    <th>Isi Testimonial</th>
                    <th>Sumber Testimonial</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_testimonial_en = mysqli_fetch_array($hasil_testimonial_en, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td><?php echo $row_testimonial_en['isi_testimonial']; ?></td>
                    <td><?php echo $row_testimonial_en['sumber_testimonial']; ?></td>
                    <td>
                      <a href="#" class="btn btn-link">Ubah</a>
                      <a href="#" class="btn btn-link">Hapus</a>
                    </td>
                  </tr>

                  <?php 
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <div id="testimonial-id" class="container tab-pane fade"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $testimonial_id = "SELECT * FROM testimonial WHERE bahasa_testimonial = 'id'";
                $hasil_testimonial_id = mysqli_query($koneksi, $testimonial_id);
                if (!$hasil_testimonial_id) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Isi Testimonial</th>
                    <th>Sumber Testimonial</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_testimonial_id = mysqli_fetch_array($hasil_testimonial_id, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td><?php echo $row_testimonial_id['isi_testimonial']; ?></td>
                    <td><?php echo $row_testimonial_id['sumber_testimonial']; ?></td>
                    <td>
                      <a href="#" class="btn btn-link">Ubah</a>
                      <a href="#" class="btn btn-link">Hapus</a>
                    </td>
                  </tr>

                  <?php 
                    }
                  ?>
                </tbody>
              </table>
            </div>
            <div id="testimonial-cn" class="container tab-pane fade"><br>

              <?php 
                include 'fungsi/koneksi.php';

                $testimonial_cn = "SELECT * FROM testimonial WHERE bahasa_testimonial = 'cn'";
                $hasil_testimonial_cn = mysqli_query($koneksi, $testimonial_cn);
                if (!$hasil_testimonial_cn) {
                  echo "ERROR";
                }
              ?>

              <table class="table table-hover">
                <thead>
                  <tr>
                    <th>Isi Testimonial</th>
                    <th>Sumber Testimonial</th>
                    <th>Opsi</th>
                  </tr>
                </thead>
                <tbody>
                  <?php 
                    while ($row_testimonial_cn = mysqli_fetch_array($hasil_testimonial_cn, MYSQLI_ASSOC)) {
                  ?>

                  <tr>
                    <td><?php echo $row_testimonial_cn['isi_testimonial']; ?></td>
                    <td><?php echo $row_testimonial_cn['sumber_testimonial']; ?></td>
                    <td>
                      <a href="#" class="btn btn-link">Ubah</a>
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