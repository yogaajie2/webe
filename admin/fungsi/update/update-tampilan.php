<?php
	include '../koneksi.php';

	$id = $_REQUEST['id'];
	$nama = $_REQUEST['nama'];

    $tampilan = "SELECT * FROM tampilan WHERE id_tampilan = '$id'";
    $hasil_tampilan = mysqli_query($koneksi, $tampilan);
    if (!$hasil_tampilan) {
      echo "ERROR";
    }

    while ($row_tampilan = mysqli_fetch_array($hasil_tampilan, MYSQLI_ASSOC)) {
    	$image = "../../../" . $row_tampilan['logo'];

	    if ($_FILES["logo"]["name"] == "") {
			$path = $row_tampilan['logo'];
		}
		else {
			//delete previous image
			unlink($image);
			//Upload image
			$target_dir = "../../../img/";
			$target_file = $target_dir . basename($_FILES["logo"]["name"]);
			$path = "img/" . basename($_FILES["logo"]["name"]);
			$uploadOk = 1;
			$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
			// Check if image file is a actual image or fake image
			if (isset($_POST["submit"])) {
			    $check = getimagesize ($_FILES["logo"]["tmp_name"]);
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
			    if (move_uploaded_file($_FILES["logo"]["tmp_name"], $target_file)) {
			        echo "The file ". basename( $_FILES["logo"]["name"]). " has been uploaded.";
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			    }
			}
		}
	}

	$sql = "UPDATE `tampilan` SET `nama_perusahaan`='$nama',`logo`='$path' WHERE `id_tampilan`='$id'";

	$result = mysqli_query($koneksi, $sql);

	header("location:../../tampilan.php");
?>