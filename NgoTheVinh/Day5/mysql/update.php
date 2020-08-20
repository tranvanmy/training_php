<?php 
//Sử dụng MySQLi Object-oriented:

    $conn = new mysqli('localhost','root','','sinhvien');
    if($conn -> connect_error){
        die('lỗi kết nối: '. $conn->connect_error);
    } 

    $sql = "UPDATE profilestudent
            SET fullname ='Davi' 
            WHERE id =15";


    if($conn ->query($sql) === TRUE){
        echo 'update thành công';
    }else echo 'update thất bại' .$conn ->error;
    $conn ->close();

    
    ?>