<?php
	include '../koneksi.php';

	$id=$_REQUEST['id'];

	$sql = "DELETE FROM pesan WHERE id_pesan = '$id'";

	$result = mysqli_query ($koneksi, $sql);
	header("location:../../pesan.php");
?>