<?php
$link= new mysqli('localhost','root','','sondemo');
$sql = "INSERT INTO SinhVien(tensv,lop)
        VALUES ('hoang vinh','58th2');";
$sql  .= "INSERT INTO SinhVien(tensv,lop)
VALUES ('hoang loan','58th2');";        
        if($link->multi_query($sql)==TRUE){
                echo"them thành công";
        
        }
        else{
            echo"them thất bại" .$sql ."<br/>" . $link->error;
        }
        $link->close();
?>