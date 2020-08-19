<?php
$link= new mysqli('localhost','root','','sondemo');
$sql = "INSERT INTO SinhVien(tensv,lop)
        VALUES ('hoàng sơn','58th2')";
        if($link->query($sql)==TRUE){
                echo"them thành công";
        
        }
        else{
            echo"them thất bại" .$sql ."<br/>" . $link->error;
        }
        $link->close();
?>