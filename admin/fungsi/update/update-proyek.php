<?php
	include '../koneksi.php';

	$id = $_REQUEST['id'];
	$nama = $_REQUEST['nama'];
	$deskripsi = $_REQUEST['deskripsi'];

    $proyek = "SELECT * FROM proyek WHERE id_proyek = '$id'";
    $hasil_proyek = mysqli_query($koneksi, $proyek);
    if (!$hasil_proyek) {
      echo "ERROR";
    }

    while ($row_proyek = mysqli_fetch_array($hasil_proyek, MYSQLI_ASSOC)) {
    	$image = "../../../" . $row_proyek['gambar_proyek'];

	    if ($_FILES["gambar"]["name"] == "") {
			$path = $row_proyek['gambar_proyek'];
		}
		else {
			//delete previous image
			unlink($image);
			//Upload image
			$target_dir = "../../../img/projects/";
			$target_file = $target_dir . basename($_FILES["gambar"]["name"]);
			$path = "img/projects/" . basename($_FILES["gambar"]["name"]);
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

	$sql = "UPDATE `proyek` SET `nama_proyek`='$nama',`lokasi_proyek`='$deskripsi',`gambar_proyek`='$path' WHERE `id_proyek`='$id'";

	$result = mysqli_query($koneksi, $sql);

	header("location:../../proyek.php");
?>