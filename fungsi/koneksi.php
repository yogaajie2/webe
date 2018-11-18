<?php
	//Parameter ('hostname', 'username', 'password', 'namadb') 
	$koneksi = mysqli_connect('webepiles.com', 'webepiles_agushasan', 'BonifasiuS2018', 'webepiles_content');

	//Pilih database
	mysqli_select_db($koneksi, 'webepiles_content');

	//Error checking
	if (!$koneksi) {
		echo "Gagal koneksi";
	}
?>