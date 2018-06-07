<?php
	include 'fungsi/koneksi.php';

	$nama = $_REQUEST['nama'];
	$email = $_REQUEST['email'];
	$perusahaan = $_REQUEST['perusahaan'];
	$telepon = $_REQUEST['telepon'];
	$subjek = $_REQUEST['subjek'];
	$pesan = $_REQUEST['pesan'];

	$sql = "INSERT INTO `pesan` (`nama_pengirim`,`email_pengirim`,`perusahaan_pengirim`,`telepon_pengirim`,`subjek_pesan`,`pesan`,`bahasa_pesan`) VALUES ('$nama','$email','$perusahaan','$telepon','$subjek','$pesan','en')";

	$result = mysqli_query($koneksi, $sql);

	header("location: contact.php");
?>