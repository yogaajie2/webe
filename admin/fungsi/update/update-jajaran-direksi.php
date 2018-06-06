<?php
	include '../koneksi.php';

	$id = $_REQUEST['id'];
	$nama = $_REQUEST['nama'];
	$jabatan = $_REQUEST['jabatan'];
	$deskripsi = $_REQUEST['deskripsi'];

    $jajaran_direksi = "SELECT * FROM jajaran_direksi WHERE id_jajaran_direksi = '$id'";
    $hasil_jajaran_direksi = mysqli_query($koneksi, $jajaran_direksi);
    if (!$hasil_jajaran_direksi) {
      echo "ERROR";
    }

    while ($row_jajaran_direksi = mysqli_fetch_array($hasil_jajaran_direksi, MYSQLI_ASSOC)) {
    	$image = "../../../" . $row_jajaran_direksi['gambar_jajaran_direksi'];

	    if ($_FILES["gambar"]["name"] == "") {
			$path = $row_jajaran_direksi['gambar_jajaran_direksi'];
		}
		else {
			//delete previous image
			unlink($image);
			//Upload image
			$target_dir = "../../../img/contents/";
			$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
			$path = "img/contents/" . basename($_FILES["gambar"]["name"]);
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
		}
	}

	$sql = "UPDATE `jajaran_direksi` SET `nama_jajaran_direksi`='$nama',`jabatan_jajaran_direksi`='$jabatan',`tentang_jajaran_direksi`='$deskripsi',`gambar_jajaran_direksi`='$path' WHERE `id_jajaran_direksi`='$id'";

	$result = mysqli_query($koneksi, $sql);

	header("location:../../tentang-kami.php");
?>