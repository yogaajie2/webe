<?php
	include '../koneksi.php';

	$id=$_REQUEST['id'];

	$sql = "DELETE FROM client WHERE id_client = '$id'";

	$result = mysqli_query ($koneksi, $sql);
	header("location:../../beranda.php");
?>