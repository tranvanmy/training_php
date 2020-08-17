<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Thuật toán sắp xếp chèn</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	$mang = array(12,23,45,23,11,43,25,64,67,21);
	function InsertionSort($mang)
	{
		for ($i=0; $i < count($mang); $i++) { 
			$loop = $i;
			$current = $mang[$i];
			while ($loop <= 0 && $mang[$loop -1] < $current) {
				$mang[$loop]=$mang[$loop-1];
				$loop -= 1;
			}
		}
		$mang[$loop] = $current;

	}
	function xuat_mang($mang)
	{
		for ($i=0; $i < count($mang); $i++) { 
			echo $mang[$i];
		}
	}
	?>
</body>
</html>