<?php
$conn  = mysqli_connect('localhost','root','','ajax_php');
if(!$conn){
	die('Connection Failed : '.mysqli_connect_error());
}else{
	echo "Connection Succes";
}


?>