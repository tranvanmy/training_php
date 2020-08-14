<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thông tin thực tập sinh</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	$Name = 'Phạm Hoàng Hưng <br>';
	$Date = 'Sep 22 2020 <br>';
	$age = '22 <br>';
	$adress = 'Đức Thắng - Tiên Lữ - Hưng Yên ';
	echo $Name;
	echo $Date;
	echo $age;
	echo $adress;
	?>
	<br>
	<br>
	<br>
	<h4>Tính tổng</h4>
	<?php 
	$n = 100;
	$tong = 0;
	for ($i=1; $i < $n ; $i++) { 
		$tong += 1/$i;
	}
	echo $tong;
	?>
	<br>
	<br>
	<br>
	<h4>Tính tổng</h4>
	<?php 
	$n = 100;
	$x = 5;
	$S = 0;
	for ($i=0; $i < 100 ; $i++) { 
		$S += $x*2*$i;
	}
	echo $S;
	?>
	<br>
	<br>
	<br>
	<?php
	$number = 15;
	kiem_tra_so_chan($number);
	function kiem_tra_so_chan($number)
	{
		if($number % 2 == 0)
			echo 'số chẵn';
		else
			echo 'số lẻ';
	}
	?>
	<br>
	<br>
	<?php
	$mang = array(1,3,12,4,7,21,37,15,19,40);
	$mang = sap_xep_mang($mang);
	function sap_xep_mang($mang){
		$so_phan_tu = count($mang)
		for ($i=0; $i < ($so_phan_tu -1); $i++) { 
			{
				for ($j=0; $j < $so_phan_tu ; $j++) { 
					if ($mang[$i] > $mang[$j]) {
						$tem = $mang[$j];
						$mang[$j] = $mang[$i];
						$mang[$i] = $tem;
					}
				}
			}
			return $mang;
		}
	}
	xuat_mang($mang);
	function xuat_mang($mang);
	{
		$so_phan_tu = count($mang);
		for ($i=0; $i < $so_phan_tu ; $i++) { 
			echo $mang[$i]. ' ';
		}
	}
	?>
</html>