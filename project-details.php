<!doctype html>
<html lang="en">

    <?php 
      include 'fungsi/koneksi.php';

      $sql = "SELECT * FROM proyek WHERE id_proyek = $_GET[id]";
      $result = mysqli_query($koneksi, $sql);
      if (!$result) {
        echo "ERROR";
      }

      $i = 0;
    ?>

  <head>

    <?php include ('head.html'); ?>

    <?php while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) { ?>

    <title><?php echo $row['nama_proyek']; ?></title>
  </head>

  <body>
    <div class="container-fluid sticky-top menu">
        <div class="container">

            <?php include ('navbar.php') ?>
        
        </div>
    </div>
    
    <div class="container">
        <div class="row text-center">
            <div class="col">
                <h1 class="mt-5" style="text-transform: uppercase;"><?php echo $row['nama_proyek']; ?></h1>
                <small>
                    <a href="home.php">Home</a> > <a href="projects.php">Projects</a> > <?php echo $row['nama_proyek']; ?>
                </small>
            </div>
        </div>
        <h1 class="mt-5" style="text-transform: uppercase;">Project Details</h1>
        <div class="row mt-5">
            <table class="table table-striped">
                <tbody>
                    <tr>
                        <td>Nama Proyek</td>
                        <td><?php echo $row['nama_proyek']; ?></td>
                    </tr>
                    <tr>
                        <td>Tipe Proyek</td>
                        <td><?php echo $row['tipe_proyek']; ?></td>
                    </tr>
                    <tr>
                        <td>Lokasi Proyek</td>
                        <td><?php echo $row['lokasi_proyek']; ?></td>
                    </tr>
                    <tr>
                        <td>Nama Client</td>
                        <td><?php echo $row['nama_client']; ?></td>
                    </tr>
                    <tr>
                        <td>Waktu Proyek</td>
                        <td><?php echo $row['waktu_proyek']; ?></td>
                    </tr>
                    <tr>
                        <td>Durasi Proyek</td>
                        <td><?php echo $row['durasi_proyek']; ?></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <?php include ('footer.php') ?>

    <?php } ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>