<?php 
//     $conn = new mysqli('localhost','root','');
// //MySQLi Object-Oriented
//     // if($conn -> connect_error){
//     //     echo 'kết nối thất bai';
//     // }else echo 'connected';

//     // MySQLi Procedural
    // $conn = mysqli_connect('localhost','root','');

    // if(!$conn){
    //     die("kết nối thất bai:  " . mysqli_connect_error());
    // }else echo 'kết nối thành công';

//Kết nối MySQL bằng  PDO:
    // Nhánh kết nối thành công
    try {
        // Kết nối
        $conn = new PDO("mysql:host=localhost;dbname=test", 'root', '');
        
        // Thiết lập chế độ lỗi
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        // Thông báo thành công
        echo "Kết nối thành công";
    } 
    // Nhánh kết nối thất bại
    catch (PDOException $e) {
        echo "Kết nối thất bại: " . $e->getMessage();
    }

    
?>