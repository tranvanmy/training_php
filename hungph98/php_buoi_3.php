<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Nội dung PHP buổi 3</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	$mang = array(13,14,27,56,4,32,31,21);
	$kiem_tra = 56;
	for ($i=0; $i < count($mang); $i++) { 
		if ($mang[$i] == $kiem_tra) {	
			echo 'Số cần tìm '.$kiem_tra. ' ở vị trí thứ '.$i;
			break;
		}
	}
	?>
	<br>
	<?php 
	$mang = array(22,65,67,32,42,61,34,5,2,43);
	$can_tim = 65;
	function kiem_tra($mang,$can_tim)
	{
		for ($i=0; $i < count($mang); $i++) { 
			if ($mang[$i] == $can_tim){
				return true;
			}
		}
	}
	if(kiem_tra($mang,$can_tim))
		echo $can_tim." Có trong mảng ";
	?>
	<br>
	<!-- <?php 
	$mang = array();
	for ($i=0; $i < 100 ; $i++) { 
		echo $mang[$i] = $i." , ";	
	}
	function chia_het_cho_3($mang){
		foreach ($mang as $key => $So) {
			if ($So % 3 == 0) {
				echo 'Số cần tìm '.$So;
			}
		}
	}
	chia_het_cho_3($mang);
	?> -->
	<?php 
	$flag = null;
	for ($i=0; $i < 3 ; $i++) { 
		if($i % 4 == 0)
		{
			$flag = true;
		}
	}
	if($flag == true)
		echo "Yes";
	else
		echo "No";
	?>
	<br>
	<?php 
	$mang = array(10,6,300,2,1,6,5);
	$max = 0;
	for ($i=0; $i < count($mang) ; $i++) { 
		if($mang[$max] < $mang[$i])
			$max = $i;
	}
	echo $mang[$max];

	// function tim_max($mang)
	// {
	// 	$max = 0;
	// 	for ($i=0; $i < count($mang) ; $i++) { 
	// 		if($mang[$max] < $mang[$i])
	// 		{
	// 			$max = $i;
	// 		}
	// 	}
	// 	return $max;
	// }
	?>
	<br>
	<?php 
	$mang = array(10,1,3,5,2,7,9,11,31,21);
	function SelectionSortAscending($mang)
	{
		for ($i=0; $i < count($mang) - 1; $i++) { 
			$max = $i;
			for ($j=$i+1; $j < count($mang) ; $j++) { 
				if ($mang[$max] < $mang[$j] ) {
					$max = $j;
				}
			}	
			$tem = $mang[$i];
			$mang[$i] = $mang[$max];
			$mang[$max] = $tem;
		}
		return $mang;
	}
	?>
</body>
</html>