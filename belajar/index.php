<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title><?= "Hello,world"?></title>
</head>
<body>
	<?php 
	if(isset($_POST['submit']))
	{
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$insert = "INSERT INTO admin VALUES('$nama','$alamat')";
	if(mysqli_query($conn,$insert)){
		echo "berhasil";
	}else{
		echo "error memasukkan data ".mysqli_error($conn);
	}

	mysqli_close($conn);
}
?>
	<form action='' method='POST'>
		<input type="text" name="nama">
		<input type="text" name="alamat">
		<button type='submit' name='submit'>Kirim</button>
	</form>
	<hr/>
<?php
	$select = "SELECT * FROM admin";
	$result = mysqli_query($conn,$select);
	if(mysqli_num_rows($result) > 0){
		while($row = mysqli_fetch_assoc($result)){
			echo $row['nama']." ".$row['alamat']."<br>";
		}
	}
?>
</body>
</html>



	<?php
	
	// <!-- variabel -->
	// $panjang =  20;
	// $lebar = 30;
	// $hasil = $panjang*$lebar;
	// echo $panjang."*".$lebar." = ".$hasil."<BR>";


	// //variabel konstanta
	// define('PHI',3.44);
	// $PHI = 5;
	// echo PHI;
	// echo $PHI;

	//array dalam php
	// $buah = array('semangka','nanas','durian','kesalak');
	// $buah[] = 'apel';

	// foreach ($buah as $value) {
	// 	echo $value."<br>";
	// }

	// //asoasiatif array
	// $ment = array(
	// 	'nama' => array(
	// 		'a' => 'air',
	// 		'b' => 'angin',
	// 		'c' => 'api',
	// 		'd' => 'tanah'
	// 	),
	// 	'tmp' => 'bumi',
	// 	'banyak' => 'diminum'
	// );

	// foreach ($ment['nama'] as $value) {
	// 	echo $value."<br>";
		
	// }


	//function
	// function  hitungnilai($a,$b){
	// 	$luas = $a*$b;
	// 	return $luas;
	// }
	// $luas = hitungnilai(5,6);
	// echo $luas;

	// function tambah(&$a){
	// 	$a=$a+2;
	// }

	// $b = 5;
	// tambah($b);
	// echo  $b;
	?>
	

