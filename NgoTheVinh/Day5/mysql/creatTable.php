<?php 

// mysqli Object-oriented:
    // $conn = new mysqli('localhost','root','','sinhvien');

    // if($conn ->connect_error){
    //     echo 'kết nối lỗi: '. $conn ->connect_error;
    // }

    // $sql = "CREATE TABLE profileStudent(
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     FullName VARCHAR(20) NOT NULL,
    //     Age INT(3),
    //     Address TEXT,
    //     birthDay TIMESTAMP 
    // )";

    // if($conn -> query($sql)){
    //     echo 'tạo bảng thành công';
    // }else 'Lỗi tạo';

    // $conn->close();


// Sử dụng MySQLi Procedural:

    // $conn = mysqli_connect('localhost','root','','sinhvienproc');

    // if(!$conn){
    //     die("kết nối không thành công". mysqli_connect_error());
    // }
    
    // $sql = "CREATE TABLE profileStudent3(
    //     id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //     Fullname VARCHAR(20) NOT NULL,
    //     Age INT(3),
    //     Address TEXT,
    //     BirthDay Date
    // )";

    // if(mysqli_query($conn,$sql)){
    //     echo 'tạo bảng thành công';
    // }else echo 'tạo table thất bại';

    // mysqli_close($conn);


//Sử dụng PDO:

try {
    $conn = new PDO("mysql:host=localhost;dbname=sinhvienpdo",'root','');

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE profSinhVien(
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        Name VARCHAR(30) NOT NULL,
        Address TEXT,
        Age INT(2)

    )";

    $conn->exec($sql);
    echo 'tạo table thành công';
} catch (PDOException $e ) {
    echo $e -> getMessage();
}
    
?>