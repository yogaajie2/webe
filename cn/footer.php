<?php include ('../fungsi/koneksi.php'); ?>

<footer class="container-fluid py-3 mt-5">
	<div class="container">
		<div class="row mt-5">
			<div class="col-md-3 my-3">
				<p class="text-uppercase font-weight-bold">Tentang Perusahaan</p>
				<br>
				<p>Kegiatan usaha PT. WEBE PILES diawali dengan pekerjaan pondasi <i>bore pile </i>sistem<i> wash boring</i>, namun terus berkembang sejalan dengan perkembangan teknologi. PT. WEBE PILES dengan pengalaman yang kompeten memperluas sistem kerja pondasi yang berbeda seperti <i>dry boring</i> maupun <i>diaphragm wall</i>.</p>
			</div>
			<div class="col-md-3 my-3">
				<p class="text-uppercase font-weight-bold">Perusahaan</p>
				<br>
				<div class="row">
					<div class="col-6">
						<a href="index.php">Beranda</a><br>
						<a href="about-us.php">Tentang Kami</a>
					</div>
					<div class="col-6">
						<a href="services.php">Layanan</a><br>
						<a href="projects.php">Proyek</a>
					</div>
				</div>
			</div>
			<div class="col-md-3 my-3">
				<p class="text-uppercase font-weight-bold">Kontak</p>
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
			<div class="col-md-3 my-3">
				<p class="text-uppercase font-weight-bold">Jam Kerja</p>
				<br>
				<div class="row">
					<div class="col-6">
						<p>Senin-Jum'at:</p>
						<p>Sabtu:</p>
						<p>Minggu:</p>
					</div>
					<div class="col-6">
						<p>08.00 - 16.00</p>
						<p>08.00 - 14.00</p>
						<p>Tutup</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>