<?php
// $timezone = DateTimeZone::listIdentifiers() ;
// foreach ($timezone as $item){
//     echo $item . '<br/>';
// }
date_default_timezone_set('Asia/Ho_Chi_Minh');
// date($format, $timestamp ='time()');
echo date('d/m/Y - H:i:s')."<br/>";
echo date('\B\â\y \g\i\ờ \l\à H \g\i\ờ')."<br/>";
$dateint=mktime(2,4,6,8,(19+30),2020);
echo date('d/m/Y',$dateint);
?>