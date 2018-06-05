<!doctype html>
<html lang="id" class="h-100">

    <?php include 'head.html'; ?>

    <?php include '../fungsi/koneksi.php'; ?>

  <body class="h-100">

    <?php include 'navbar.php'; ?>

    <div class="container-fluid h-100">
      <div class="row h-100">
        
        <?php include 'sidebar.html'; ?>

        <div class="col-md-10">
          <h1>Tambah Pengguna</h1>
          <form action="../fungsi/insert/insert-pengguna.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="username">Username</label>
              <input type="text" class="form-control" name="username" id="username">
            </div>
            <div class="form-group">
              <label for="password">Password</label>
              <input type="text" class="form-control" name="password" id="password">
            </div>
            <button type="submit" class="btn btn-outline-dark">Tambah Data</button>
          </form>
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