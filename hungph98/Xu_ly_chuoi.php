<?php 
$str = 'Tôi đang ăn tối';
echo "Hưng nói \"$str\"";
?>
<br>
<?php 
echo (addcslashes('Phạm Hoàng Hưng','a..z'));
?>
<br>
<?php 
$str = 'Phạm Hoàng Hưng';
var_dump(explode(' ',$str));
?>
<br>
<?php 
$mang = array('TOP','10', 'THƯƠNG', 'VỤ',' THÀNH', 'CÔNG ','NHẤT', 'LỊCH', 'SỬ',' PREMIER', 'LEAGUE');
echo implode(' ',$mang);
?>
<br>
<?php 
$srt = 'Phạm Hoàng Hưng';
echo strlen($srt);
?>
<br>
<?php 
$array_keys = array('1','2','3');
$array_values = array('Phạm ','Hoàng','Hưng');	
print_r(array_combine($array_keys,$array_values));
?>
<br>
<?php
$array_1 = array('Đức Thắng','Tiên Lữ','Hưng Yên');
print_r(array_count_values($array_1));
?>
<br>
<?php 
$seacharray = array(
	'username' => 'hungph98',
	'email' => 'hunph62@wru.vn',
	'password' => 'hung123'
);
var_dump(array_key_exists('username', $seacharray));
var_dump(array_key_exists('address',$seacharray));
?>
<br>
<?php 
$mang = array('apple','banana','pineaple','banana');
var_dump(array_unique($mang));
?>
<br>
<?php 
$path = 'infor.php';
$fp = @fopen($path,'r');
if(!$fp){
	echo 'file không thể mở được';
}else{
	echo 'file mở thành công';
	while (!feof($fp)) {
		//echo fgetc($fp);
		//echo fgets($fp);
		$data = fread($fp,filesize('infor.php'));
		echo $data;
		//fclose($fp);
	}	

}

?>
<br>
<?php 
echo file_get_contents('infor.php');
?>
<br>
<?php 
echo file_put_contents('infor.php', 'Buổi tối vui vẻ')
?>
