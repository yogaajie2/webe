<!doctype html>
<html lang="id" class="h-100">

    <?php include 'head.php'; ?>

    <?php include '../fungsi/koneksi.php'; ?>

  <body class="h-100">

    <?php include 'navbar.php'; ?>

    <div class="container-fluid h-100">
      <div class="row h-100">
        
        <?php include 'sidebar.html'; ?>

        <div class="col-md-10">
          <h1>Tambah Layanan</h1>
          <form action="../fungsi/insert/insert-layanan.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="nama">Nama Layanan</label>
              <input type="text" class="form-control" name="nama" id="nama">
            </div>
            <div class="form-group">
              <label for="editor">Deskripsi Layanan</label>
              <textarea class="form-control" name="deskripsi" id="editor" rows="5">
                Isi deskripsi layanan disini...
              </textarea>
            </div>
            <div class="form-group">
              <label for="bahasa">Bahasa Layanan</label>
              <select class="form-control" id="bahasa" name="bahasa">
                <option value="1">English</option>
                <option value="2">Indonesia</option>
                <option value="3">Chinese</option>
              </select>
            </div>
            <div class="form-group">
              <label for="gambar">Gambar Layanan</label>
              <input type="file" class="form-control" name="gambar" id="gambar">
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

    <script>
      ClassicEditor
          .create( document.querySelector( '#editor' ) )
          .catch( error => {
              console.error( error );
          } );
    </script>
  </body>
</html>