<?php
include 'koneksi.php';



	$select = "SELECT * FROM admin";
	$result = mysqli_query($conn,$select);
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			$link_hapus = "<a class='hapusData' href='hapus.php?id=".$row['id']."' >Hapus</a>";
			$link_ubah = "<a class='ubahData' href='ubah.php?id=".$row['id']."' nama='".$row['nama']."' alamat='".$row['alamat']."' >Ubah</a>";
			echo $row['nama']." ".$row['alamat'].' | '.$link_hapus.' | '.$link_ubah."<br/>";
		}
	}
?>