<?php
	include '../koneksi.php';

	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	$sql = "INSERT INTO `user` (`username`,`password`) VALUES ('$username','$password')";

	$result = mysqli_query($koneksi, $sql);

	header("location:../../pengguna.php");
?>