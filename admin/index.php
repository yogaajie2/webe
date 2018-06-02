<!doctype html>
<html lang="en" class="h-100">

	<?php include 'head.html' ?>

    <?php 
      include 'fungsi/koneksi.php';

      $sql = "SELECT * FROM user";
      $result = mysqli_query($koneksi, $sql);
      if (!$result) {
        echo "ERROR";
      }
    ?>

    <?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>

    <title>Sistem Admin Konten Website Webe Piles | Login</title>
  </head>
  <body class="h-100">
    <div class="container-fluid h-100">
      <div class="container h-25 d-flex align-items-center justify-content-center">
        <h1 class="display-4">Sistem Admin Konten Website Webe Piles</h1>
      </div>
      <div class="container h-50 d-flex align-items-center justify-content-center">
        <div class="row border p-5">
          <div class="col">
            <h2 class="text-center mb-4">Login</h2>
            <form action="fungsi/login.php" method="POST">
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
              </div>
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan Password">
              </div>
              <button type="submit" class="btn btn-block btn-dark">Login</button>
            </form>
          </div>
        </div>
      </div>
      <div class="container h-25 d-flex align-items-center justify-content-center">
        <div class="row">
          <div class="col text-center">
            <h2>&copy; 2018</h2>
          </div>
        </div>
      </div>
    </div>

    <?php } ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>