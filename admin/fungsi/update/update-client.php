<?php
	include '../koneksi.php';

	$id = $_REQUEST['id'];
	$nama = $_REQUEST['nama'];

	$sql = "UPDATE `client` SET `nama_client`='$nama' WHERE `id_client`='$id'";

	$result = mysqli_query($koneksi, $sql);

	header("location:../../beranda.php");
?>