<?php
$link = new mysqli('localhost','root','','sondemo');
$sql= "DELETE FROM SinhVien WHERE id=23";
if($link->query($sql)){
    echo"Xóa thành công";

}else{
    echo"xóa thất bại".$link->error;
}
$link->close();
?>