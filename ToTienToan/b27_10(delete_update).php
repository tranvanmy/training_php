<?php
    //Sử dụng MySQLi Object-oriented:
    $conn = new mysqli('localhost','root','','vmodev');
    if($conn->connect_error){
        die("ket noi that bai : ".$conn->connect_error);
    }
    //$sql = "DELETE FROM news WHERE id = 1";
    $sql = "UPDATE news SET title = 'toan to', content = 'hahahhah' WHERE id = 3";
    if($conn->query($sql) == true){
        echo "xoas thanh cong :";
    }else{
        echo "xoa that bai : ".$conn->error;
    }
    $conn->close();

    //mysqli ham thu tuc
    // $conn = mysqli_connect('localhost', 'root', '', 'vmodev');
    // // Kiểm tra kết nối
    // if (!$conn) {
    //     die("Kết nối thất bại: " . mysqli_connect_error());
    // }
    // // Câu SQL delete
    // $sql = "DELETE FROM news WHERE id=2";
    $sql = "UPDATE news SET title = 'toan to', content = 'hahahhah' WHERE id = 3";
    // // Thực hiện câu truy vấn
    // if (mysqli_query($conn, $sql)) {
    //     echo "Xóa thành công";
    // } else {
    //     echo "Xóa thất bại: " . mysqli_error($conn);
    // }
    // // ngắt kết nối
    // mysqli_close($conn);

    //PDO
    // try {
    //     // Kết nối
    //     $conn = new PDO("mysql:host=localhost;dbname=vmodev", 'root', '');
    //     // Thiết lập exception
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     // Câu SQL
    //     $sql = "DELETE FROM news WHERE id=1";
    $sql = "UPDATE news SET title = 'toan to', content = 'hahahhah' WHERE id = 3";
    //     // Thực thi câu truy vấn
    //     $conn->exec($sql);
    //     echo "Xóa thành công!";
    // } 
    // catch (PDOException $e) {
    //     echo 'Lỗi' . "<br>" . $e->getMessage();
    // }
    // // Ngắt kết nối
    // $conn = null;
?>