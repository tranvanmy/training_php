<?php
    //Sử dụng MySQLi Object-oriented (đối tượng)
    //vẫn là kết nối
    //$conn = new mysqli('localhost','root','','vmodev');
    //kiểm tra kết nối
    // if($conn->connect_error){
    //     echo 'kết nối thất bại : ' .$conn->connect_error;
    // }

    // //câu lệnh sql
    // $sql = "CREATE TABLE News(
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     title VARCHAR(30) NOT NULL,
    //     content TEXT,
    //     add_date TIMESTAMP
    // )";

    // //thực thi câu tryu vấn
    // if($conn->query($sql) === TRUE){
    //     echo "tạo bảng thành công";
    // }else{
    //     echo 'tạo bảng thất bại : '.$conn->error;
    // }
    // $conn->close();

    //Sử dụng MySQLi Procedural (hàm thủ tục)
    // $conn = mysqli_connect('localhost','root','');
    // if(!$conn){
    //     die("kết nối thất bại : ".mysqli_connect_error());
    // }
    // $sql1 = "CREATE DATABASE vmodev";
    // if(mysqli_query($conn,$sql1)){
    //     echo 'tạo database thành công';
    //     mysqli_select_db($conn,'vmodev');
    //     // Câu lệnh SQL
    //     $sql = "CREATE TABLE News (
    //         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //         title VARCHAR(30) NOT NULL,
    //         content TEXT,
    //         add_date TIMESTAMP
    //     )";
    //     if(mysqli_query($conn,$sql)){
    //         echo "tạo bảng thành công";
    //     }else{
    //         echo "tạo bảng thất bại : ".mysqli_error($conn);
    //     }
    // }else{
    //     echo "tạo database thất bại : ".mysqli_error($conn);
    // }
    // mysqli_close($conn);

    //Sử dụng PDO
    // try {
    //     // Kết nối
    //     $conn = new PDO("mysql:host=localhost;dbname=FreetutsDemo", 'root', 'vertrigo');
         
    //     // Thiết lập chế độ exception
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
     
    //     // Câu lệnh SQL
    //     $sql = "CREATE TABLE News (
    //         id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //         title VARCHAR(30) NOT NULL,
    //         content TEXT,
    //         add_date TIMESTAMP
    //     )";
     
    //     // Thực thi câu truy vấn
    //     $conn->exec($sql);
         
    //     echo "Tạo table thành công";
    // } 
    // catch (PDOException $e) {
    //     echo $e->getMessage();
    // }
     
    // // Ngắt kết nối
    // $conn = null;

    //insert dữ liệu
    $conn = mysqli_connect('localhost','root','','vmodev');
    if(!$conn){
        die('kết nối database thất bại : '.mysqli_connect_error($conn));
    }
    $sql2 = "INSERT INTO news(title,content) VALUES ('tieu de','noi dung')";
    if(mysqli_query($conn,$sql2)){
        echo "thêm dữ liệu thành công .";
    }else{
        echo 'lỗi '.$sql2.'<br>'.mysqli_errer($conn);
    }
    mysqli_close($conn);
?>