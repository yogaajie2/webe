<?php
	include '../koneksi.php';

	$nama = $_REQUEST['nama'];
	$deskripsi = $_REQUEST['deskripsi'];
	$bahasa = $_REQUEST['bahasa'];

	//Upload image
	$target_dir = "../../../img/services/";
	$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
	$path = "img/services/" . basename($_FILES["gambar"]["name"]);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	// Check if image file is a actual image or fake image
	if (isset($_POST["submit"])) {
	    $check = getimagesize ($_FILES["gambar"]["tmp_name"]);
	    if ($check !== false) {
	        echo "File is an image - " . $check["mime"] . ".";
	        $uploadOk = 1;
	    } else {
	        echo "File is not an image.";
	        $uploadOk = 0;
	    }
	}
	// Check if file already exists
	if (file_exists($target_file)) {
	    echo "Sorry, file already exists.";
	    $uploadOk = 0;
	}

	// Allow certain file formats
	if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
	&& $imageFileType != "gif" ) {
	    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
	    $uploadOk = 0;
	}
	// Check if $uploadOk is set to 0 by an error
	if ($uploadOk == 0) {
	    echo "Sorry, your file was not uploaded.";
	// if everything is ok, try to upload file
	} else {
	    if (move_uploaded_file($_FILES["gambar"]["tmp_name"], $target_file)) {
	        echo "The file ". basename( $_FILES["gambar"]["name"]). " has been uploaded.";
	    } else {
	        echo "Sorry, there was an error uploading your file.";
	    }
	}

	if ($bahasa == 1) {
		$lang = "en";
	} elseif ($bahasa == 2) {
		$lang = "id";
	} else {
		$lang = "cn";
	}

	$sql = "INSERT INTO `layanan` (`nama_layanan`,`deskripsi_layanan`,`gambar_layanan`,`bahasa_layanan`) VALUES ('$nama','$deskripsi','$path','$lang')";

	$result = mysqli_query($koneksi, $sql);

	header("location:../../layanan.php");
?>