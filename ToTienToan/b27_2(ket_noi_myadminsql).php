<?php
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "test";

	$conn = mysqli_connect($host,$username,$password,$database);
	mysqli_query($conn,"SET NAMES 'utf8'");
	if($conn){
		echo "kết nối thành công";
	}else{
		echo "kết nối thất bại";
	}
?>