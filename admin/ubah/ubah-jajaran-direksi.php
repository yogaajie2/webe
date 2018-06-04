<!doctype html>
<html lang="id" class="h-100">

    <?php include 'head.html'; ?>

    <?php include '../fungsi/koneksi.php'; ?>

  <body class="h-100">

    <?php include 'navbar.php'; ?>

    <div class="container-fluid h-100">
      <div class="row h-100">
        
        <?php include 'sidebar.html'; ?>

        <?php 
          include '../fungsi/koneksi.php';

          $sql = "SELECT * FROM jajaran_direksi WHERE id_jajaran_direksi = $_GET[id]";
          $result = mysqli_query($koneksi, $sql);
          if (!$result) {
            echo "ERROR";
          }
        ?>

        <?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>

        <div class="col-md-10">
          <h1>Ubah Jajaran Direksi</h1>
          <form action="../fungsi/update/update-jajaran-direksi.php" method="POST" enctype="multipart/form-data">
            <div class="form-group">
              <label for="id">ID Jajaran Direksi</label>
              <input type="text" class="form-control" name="id" id="id" value="<?php echo $row['id_jajaran_direksi']; ?>" readonly>
            </div>
            <div class="form-group">
              <label for="nama">Nama</label>
              <input type="text" class="form-control" name="nama" id="nama" value="<?php echo $row['nama_jajaran_direksi']; ?>">
            </div>
            <div class="form-group">
              <label for="jabatan">Jabatan</label>
              <input type="text" class="form-control" name="jabatan" id="jabatan" value="<?php echo $row['jabatan_jajaran_direksi']; ?>">
            </div>
            <div class="form-group">
              <label for="editor">Tentang</label>
              <textarea class="form-control" name="deskripsi" id="editor" rows="5">
                <?php echo $row['tentang_jajaran_direksi']; ?>
              </textarea>
            </div>
            <div class="form-group">
              <label for="gambar">Gambar jajaran_direksi</label>
              <input type="file" class="form-control" name="gambar" id="gambar">
              <img style="width: 320px; height: 240px;" src="../../<?php echo $row['gambar_jajaran_direksi']; ?>">
            </div>
            <button type="submit" class="btn btn-outline-dark">Ubah Data</button>
          </form>
        </div>

        <?php } ?>

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