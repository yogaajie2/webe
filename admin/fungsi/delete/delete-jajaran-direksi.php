<?php
	include '../koneksi.php';

	$id=$_REQUEST['id'];

	$sql = "DELETE FROM jajaran_direksi WHERE id_jajaran_direksi = '$id'";

	$result = mysqli_query ($koneksi, $sql);
	header("location:../../tentang-kami.php");
?>