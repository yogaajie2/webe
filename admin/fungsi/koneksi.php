<?php
	//Parameter ('hostname', 'username', 'password', 'namadb') 
	$koneksi = mysqli_connect('localhost', 'root', '', 'webepiles');

	//Pilih database
	mysqli_select_db($koneksi, 'webepiles');

	//Error checking
	if (!$koneksi) {
		echo "Gagal koneksi";
	}
?>