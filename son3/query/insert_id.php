<?php
$link= new mysqli('localhost','root','','sondemo');
$sql = "INSERT INTO SinhVien(tensv,lop)
VALUES ('hoàng anh','58th2')";
if($link->query($sql)==TRUE){
    $last_id = $link->insert_id;
    echo "them thanh cong co ID là $last_id";
    
}
else{
    echo"lỗi:".$sql."<br/>".$link->error;
}
$link->close();
?>