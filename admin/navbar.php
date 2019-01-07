<div class="container-fluid" style="background-color: #2b2b2b;">

	<?php
		$tampilan = "SELECT * FROM tampilan";
		$hasil_tampilan = mysqli_query($koneksi, $tampilan);

		while ($row_tampilan = mysqli_fetch_array($hasil_tampilan, MYSQLI_ASSOC)) {
	?>

  <nav class="navbar">
    <a class="navbar-brand" href="beranda.php">
      <h1 class="text-uppercase"><?php echo $row_tampilan['nama_perusahaan']; ?></h1>
    </a>

	<?php } ?>

    <div class="navbar-nav ml-auto">
      <p class="navbar-text" style="color: #fff;">Selamat Datang, Admin. <a href="fungsi/logout.php">Logout</a></p>
    </div>
  </nav>
</div>