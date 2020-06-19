<?php
include 'koneksi.php';
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$insert = "INSERT INTO admin VALUES('','$nama','$alamat')";
	if(mysqli_query($conn,$insert)){
		echo "berhasil";
	}else{
		echo "error memasukkan data ".mysqli_error($conn);
	}

	mysqli_close($conn);
?>