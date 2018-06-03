<!doctype html>
<html lang="id" class="h-100">

    <?php include 'head.html'; ?>

    <?php include 'fungsi/koneksi.php'; ?>

  </head>
  <body class="h-100">

    <?php include 'navbar.php'; ?>

    <div class="container-fluid h-100">
      <div class="row h-100">
        
        <?php include 'sidebar.html'; ?>

        <div class="col-md-10">
          <div class="row">
            <div class="col d-flex justify-content-between">
              <h2>Pengguna</h2>
            </div>
          </div>
          <br>

          <?php 
            include 'fungsi/koneksi.php';

            $user = "SELECT * FROM user";
            $hasil_user = mysqli_query($koneksi, $user);
            if (!$hasil_user) {
              echo "ERROR";
            }
          ?>

          <table class="table table-hover text-center">
            <thead>
              <tr>
                <th class="align-middle">Username</th>
                <th class="align-middle">Password</th>
                <th class="align-middle">Opsi</th>
              </tr>
            </thead>
            <tbody>
              <?php 
                while ($row_user = mysqli_fetch_array($hasil_user, MYSQLI_ASSOC)) {
              ?>

              <tr>
                <td class="align-middle"><?php echo $row_user['username']; ?></td>
                <td class="align-middle"><?php echo $row_user['password']; ?></td>
                <td class="align-middle">
                  <a href="ubah/ubah-pengguna.php?id=<?php echo $row_user['id_user']; ?>" class="btn btn-link">Ubah</a>
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