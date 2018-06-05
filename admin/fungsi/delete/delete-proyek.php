<?php
	include '../koneksi.php';

	$id=$_REQUEST['id'];

	$sql = "DELETE FROM proyek WHERE id_proyek = '$id'";

	$result = mysqli_query ($koneksi, $sql);
	header("location:../../proyek.php");
?>