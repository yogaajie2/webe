<?php
	include '../koneksi.php';

	$id = $_REQUEST['id'];
	$isi = $_REQUEST['isi'];
	$sumber = $_REQUEST['sumber'];

	$sql = "UPDATE `testimonial` SET `isi_testimonial`='$isi',`sumber_testimonial`='$sumber' WHERE `id_testimonial`='$id'";

	$result = mysqli_query($koneksi, $sql);

	header("location:../../beranda.php");
?>