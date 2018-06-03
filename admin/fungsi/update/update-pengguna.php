<?php
	include '../koneksi.php';

	$id = $_REQUEST['id'];
	$username = $_REQUEST['username'];
	$password = $_REQUEST['password'];

	$sql = "UPDATE `user` SET `username`='$username',`password`='$password' WHERE `id_user`='$id'";

	$result = mysqli_query($koneksi, $sql);

	header("location:../../pengguna.php");
?>