<?php
	include '../koneksi.php';

	$id=$_REQUEST['id'];

	$sql = "DELETE FROM testimonial WHERE id_testimonial = '$id'";

	$result = mysqli_query ($koneksi, $sql);
	header("location:../../beranda.php");
?>