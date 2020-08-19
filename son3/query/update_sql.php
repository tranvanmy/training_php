<?php
$link = new mysqli('localhost','root','','sondemo');
$sql= "UPDATE SinhVien SET tensv='son dep trai' WHERE id=1";
if($link->query($sql)){
    echo"update thành công";

}else{
    echo"update thất bại".$link->error;
}
$link->close();
?>