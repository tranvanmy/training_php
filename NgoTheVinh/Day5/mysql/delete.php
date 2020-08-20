<?php 
    // Delete dữ liệu với MySQLi
    // $conn = new mysqli('localhost', 'root','','sinhvien');
    // if($conn -> connect_error){
    //     die('lỗi kết nối: '. $conn -> connect_error);
    // }

    // $sql = "DELETE FROM profilestudent WHERE id = 3";

    // if($conn->query($sql) === TRUE){
    //     echo ' xóa thành công';
    // }else echo 'xóa không thành công';
    // $conn ->close();


// Sử dụng MySQLi Procedural:

    // $conn =  mysqli_connect('localhost', 'root','','sinhvien'); 
    // if(mysqli_connect_error($conn)){
    //     echo'lỗi kết nối: '. $conn -> connect_error;
    // }

    // $sql = "DELETE FROM profilestudent WHERE id = ";

    // if(mysqli_query($conn,$sql)){
    //     echo ' xóa thành công';
    // }else echo 'xóa thất bại: '. mysqli_error($conn);
    // mysqli_close($conn);

//PDO

    try {
        $conn = new PDO("mysql:host=localhost;dbname=sinhvien",'root','');
        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        $sql = "DELETE FROM profilestudent WHERE id = 4";

        $conn ->exec($sql);
        echo 'xóa thành công';
        
    } catch (PDOException $th) {
        echo 'lỗi:  '.$th ->getMessage();
    }

    $conn = null;
?>