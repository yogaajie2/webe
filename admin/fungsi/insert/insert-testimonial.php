<?php
	include '../koneksi.php';

	$isi = $_REQUEST['isi'];
	$sumber = $_REQUEST['sumber'];
	$bahasa = $_REQUEST['bahasa'];

	if ($bahasa == 1) {
		$lang = "en";
	} elseif ($bahasa == 2) {
		$lang = "id";
	} else {
		$lang = "cn";
	}

	$sql = "INSERT INTO `testimonial` (`isi_testimonial`,`sumber_testimonial`,`bahasa_testimonial`) VALUES ('$isi','$sumber','$lang')";

	$result = mysqli_query($koneksi, $sql);

	header("location:../../beranda.php");
?>