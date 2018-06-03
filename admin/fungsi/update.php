<?php
	include 'koneksi.php';

	$id = $_REQUEST['id'];
	$nama = $_REQUEST['nama'];
	$deskripsi = $_REQUEST['deskripsi'];

	/*image uploader
	$foto_dir = "img/rider/";
	$foto = $foto_dir . basename($_FILES["foto"]["name"]);

	$foto_motor_dir = "img/motor/";
	$foto_motor = $foto_motor_dir . basename($_FILES["foto-motor"]["name"]);
	*/

	$sql = "UPDATE `fitur` SET `nama_fitur`='$nama',`deskripsi_fitur`='$deskripsi' WHERE `id_fitur`='$id'";

	$result = mysqli_query($koneksi, $sql);

	header("location:../beranda.php");
?>