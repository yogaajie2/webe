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
                <th>Alamat</th>
                <th>Telepon</th>
                <th>Email</th>
                <th>Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                while ($row_kontak = mysqli_fetch_array($hasil_kontak, MYSQLI_ASSOC)) {
              ?>

              <tr>
                <td><?php echo $row_kontak['alamat']; ?></td>
                <td><?php echo $row_kontak['telepon']; ?></td>
                <td><?php echo $row_kontak['email']; ?></td>
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
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>