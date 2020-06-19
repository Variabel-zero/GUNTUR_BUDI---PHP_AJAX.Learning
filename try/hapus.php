<?php
include 'koneksi.php';
	$select = "DELETE FROM admin WHERE id='".$_GET['id']."'";
	$result = mysqli_query($conn,$select);

?>