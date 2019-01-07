<div class="row mx-0" style="background-color: #ff9933;">
    <div class="col">
        <span class="float-right">
            <small>
                <a href="home.php" style="color: #fff;">EN | </a>
                <a href="id/home.php" style="color: #fff;">ID | </a>
                <a href="#" style="color: #fff;">CN</a>
            </small>
        </span>
    </div>
</div>

<?php
	$tampilan = "SELECT * FROM tampilan";
	$hasil_tampilan = mysqli_query($koneksi, $tampilan);

	while ($row_tampilan = mysqli_fetch_array($hasil_tampilan, MYSQLI_ASSOC)) {
?>

<nav class="navbar navbar-expand-md shadow-sm">
    <a class="navbar-brand" href="home.php">
    	<img src="<?php echo $row_tampilan['logo']; ?>" width="90" height="60" class="d-inline-block align-top">
        <h1 style="text-transform: uppercase; color: #000;" class="d-inline-block"><?php echo $row_tampilan['nama_perusahaan']; ?></h1>
    </a>

<?php } ?>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarcollapse" aria-controls="navbarcollapse" aria-expanded="false">
        <i class="fas fa-bars"></i>
    </button>
    <div class="collapse navbar-collapse" id="navbarcollapse">
        <div class="navbar-nav ml-auto" style="text-transform: uppercase;">
            <a class="nav-item nav-link active" href="home.php">Home</a>
            <a class="nav-item nav-link" href="about-us.php">About Us</a>
            <a class="nav-item nav-link" href="services.php">Services</a>
            <a class="nav-item nav-link" href="projects.php">Projects</a>
            <a class="nav-item nav-link" href="contact.php">Contact</a>
        </div>
    </div>
</nav>