<?php 
echo date('d/m/y - H:i:s');
?> 
<br>
<?php 
echo strtotime(date('Y-m-d H:i:s'));
?>
<br>
<?php 
echo date(('Y-m-d H:i:s'));
?>
<br>
<?php 
$dateint = mktime(0,0,0,11,(20 + 12),2020);
echo date('d/m/Y' ,$dateint);
?>
<br>
<?php 
$tomorow = mktime(0,0,0,date("m"),date("d")+1,date("Y")+1);
echo date('d/m/Y', $tomorow);
?>