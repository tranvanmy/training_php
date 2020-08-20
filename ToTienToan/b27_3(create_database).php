<?php
    //Sử dụng MySQLi Object-oriented(hướng đối tượng)
    // $conn =new mysqli('localhost','root','');
    // if($conn->connect_error){
    //     die('kết nối thất bại : '.$conn->connect_error);
    // }

    // //câu lệnh tạo database
    // $sql = "CREATE DATABASE vmodev";

    // //thực thi câu truy vấn
    // if($conn->query($sql) === true){
    //     echo "tạo database thành công";
    // }else{
    //     echo "tạo database thất bại: ".$conn->error;
    // }
    // //ngắt kết nối khi tạo xong
    // $conn->close();

    //Sử dụng MySQLi Procedural (hàm thủ tục)
    // $conn = mysqli_connect('localhost','root','');
    // if(!$conn){
    //     die('kết nối thất bại: '.mysqli_connect_error());
    // }
    // $sql = "CREATE DATABASE FreettusDemo";
    //     // Thực thi câu truy vấn
    // if (mysqli_query($conn, $sql)) {
    //     echo "Tạo database thành công";
    // } else {
    //     echo "Tạo database thất bại: " . mysqli_error($conn);
    // }
    // // Tạo xong thì ngắt kết nối
    // mysqli_close($conn);    

    try {
        // Chuỗi kết nối
        $conn = new PDO("mysql:host=localhost", 'root', '');
         
        // Thiết lập chế độ exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         
        // Câu truy vấn
        //$sql = "CREATE DATABASE FreetutsDemo";
        $sql = "DROP DATABASE vmodev";
         
        // Thực thi câu truy vấn
        $conn->exec($sql);
         
        // Thông báo thành công
        echo "Tạo database thành công";
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
     
    // Ngắt kết nối
    $conn = null;   
?>        