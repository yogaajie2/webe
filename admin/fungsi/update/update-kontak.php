<?php
	include '../koneksi.php';

	$id = $_REQUEST['id'];
	$alamat = $_REQUEST['alamat'];
	$telepon = $_REQUEST['telepon'];
	$email = $_REQUEST['email'];

	$sql = "UPDATE `kontak` SET `alamat`='$alamat',`telepon`='$telepon',`email`='$email' WHERE `id_kontak`='$id'";

	$result = mysqli_query($koneksi, $sql);

	header("location:../../kontak.php");
?>