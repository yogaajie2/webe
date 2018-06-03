<?php
	include '../koneksi.php';

	$id = $_REQUEST['id'];
	$nama = $_REQUEST['nama'];

	$sql = "UPDATE `pekerjaan` SET `nama_pekerjaan`='$nama' WHERE `id_pekerjaan`='$id'";

	$result = mysqli_query($koneksi, $sql);

	header("location:../../beranda.php");
?>