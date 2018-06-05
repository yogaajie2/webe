<?php
	include '../koneksi.php';

	$nama = $_REQUEST['nama'];

	$sql = "INSERT INTO `client` (`nama_client`) VALUES ('$nama')";

	$result = mysqli_query($koneksi, $sql);

	header("location:../../beranda.php");
?>