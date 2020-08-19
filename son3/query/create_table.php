<?php
$link= new mysqli('localhost','root','','sondemo');
if ($link->connect_error){
    die("keest noi khong thanh cong".$link->connect_error);
}
$sql ="CREATE TABLE SinhVien(
    id INT(5) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    tensv varchar(20) NOT NULL,
    lop varchar(10),
    ngaysinh varchar(10)
    )";
if($link->query($sql)==TRUE)
{
    echo"tạo Table thành công";

}
else{
    echo"tạo table thất baij". $link->error;
}
mysqli_select_db($link,'demo');
$sql = "CREATE TABLE News (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(30) NOT NULL,
    content TEXT,
    add_date TIMESTAMP
)";
 if($link->query($sql)==TRUE){
     echo"tao table 2 thành công";
 }
 else{
     echo"tao table 2 thất bại".$link->error;
 }
$link->close();

?>
