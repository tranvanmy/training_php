<?php
$link = new mysqli('localhost', 'root', '','');
 
if($link->connect_error ){
    die("kết nối thất bại: " . $link->connect_error);
}

else{
    echo "kết nối thành công";
}
echo "<br/>";

$sql = "CREATE DATABASE sondemo";
if($link->query($sql)==TRUE){
    echo"Tạo database thành công";

}
else{
    echo" Tạo database thất bại" . $link->error;
}
$link->close();

?>