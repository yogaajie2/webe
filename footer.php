<?php include ('fungsi/koneksi.php'); ?>

<footer class="container-fluid py-3 mt-5">
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-3">
				<p class="text-uppercase font-weight-bold">About Company</p>
				<br>
				<p>PT. WEBE PILES begins with bore pile foundation work using the wash boring system, but continues to grow in line with technological developments. PT. WEBE PILES with competent experience expands on different foundation work systems such as dry boring and diaphragm wall.</p>
			</div>
			<div class="col-md-3">
				<p class="text-uppercase font-weight-bold">Company</p>
				<br>
				<div class="row">
					<div class="col-md-6">
						<a href="index.php">Home</a><br>
						<a href="about-us.php">About Us</a>
					</div>
					<div class="col-md-6">
						<a href="services.php">Services</a><br>
						<a href="projects.php">Projects</a>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<p class="text-uppercase font-weight-bold">Contact</p>
				<br>

				<?php
                    $kontak = "SELECT * FROM kontak";
                    $hasil_kontak = mysqli_query($koneksi, $kontak);

                    while ($row_kontak = mysqli_fetch_array($hasil_kontak, MYSQLI_ASSOC)) {
                ?>

				<div class="row">
					<div class="col">
						<p>
					        <strong>PT. Webe Piles</strong><br>
					        <?php echo $row_kontak['alamat']; ?>
				        </p>
				        <p class="font-weight-bold"><?php echo $row_kontak['telepon']; ?></p>
				        <a href="#"><?php echo $row_kontak['email']; ?></a>
					</div>
				</div>

				<?php } ?>

			</div>
			<div class="col-md-3">
				<p class="text-uppercase font-weight-bold">Office Hours</p>
				<br>
				<div class="row">
					<div class="col-6">
						<p>Mon - Fri :</p>
						<p>Saturday :</p>
						<p>Sunday :</p>
					</div>
					<div class="col-6">
						<p>08.00 - 16.00</p>
						<p>08.00 - 14.00</p>
						<p>Closed</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>