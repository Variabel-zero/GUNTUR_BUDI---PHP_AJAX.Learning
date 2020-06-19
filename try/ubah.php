<?php
include 'koneksi.php';
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	
	$select = "UPDATE admin SET nama='$nama',alamat='$alamat' WHERE id='".$_GET['id']."'";
	$result = mysqli_query($conn,$select);

?>