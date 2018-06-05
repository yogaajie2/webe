<?php
	include '../koneksi.php';

	$id=$_REQUEST['id'];

	$sql = "DELETE FROM layanan WHERE id_layanan = '$id'";

	$result = mysqli_query ($koneksi, $sql);
	header("location:../../layanan.php");
?>