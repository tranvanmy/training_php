<?php 

//MySQLi Object-oriented
    // $conn = new mysqli('localhost','root','');
    // if($conn -> connect_error){
    //     echo 'connect thất bại';
    // }
    // $sql = "CREATE DATABASE sinhvien";
    // if($conn -> query($sql) === TRUE){
    //     echo 'tạo DB thành công';
    // }else echo 'tạo DB thất bại';

    // $conn -> close();


//Sử dụng MySQLi Procedural:

    // $conn = mysqli_connect('localhost','root','');
    // if(!$conn){
    //     die('kết nối thất bai'. mysqli_connect_error());
    // }

    // $sql = "CREATE DATABASE sinhvienProc";
    // if(mysqli_query($conn,$sql)){
    //     echo 'tạo db thành công';
    // }else echo 'tạo db thất bại';

    // mysqli_close($conn);


//Sử dụng PDO:

try {
    $conn = new PDO("mysql:host=localhost",'root','');

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE DATABASE sinhvienPDO";

    $conn ->exec($sql);

    echo 'tạo db thành công';
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>