<?php
    // Kết nối
    // $conn = new mysqli('localhost', 'root', '', 'vmodev');
    // // Kiểm tra kết nối
    // if ($conn->connect_error) {
    //     die("Kết nối thất bại: " . $conn->connect_error);
    // } 
    // // Câu lệnh SQL
    // $sql = "INSERT INTO News (title, content) 
    //         VALUES ('tieu de 1', 'noi dung 1');";
    // $sql .= "INSERT INTO News (title, content) 
    //         VALUES ('tieu de 2', 'noi dung 2');";
    // // Thực thi câu lệnh
    // //câu lệnh multi_query
    // if ($conn->multi_query($sql) === TRUE) {
    //     echo "Thêm thành công";
    // } else {
    //     echo "Lỗi: " . $sql . "<br>" . $conn->error;
    // }
    // // Ngắt kết nối
    // $conn->close();

     Kết nối
    $conn = mysqli_connect('localhost', 'root', '', 'vmodev');
    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }
    // Câu lệnh SQL
    $sql = "INSERT INTO news (title, content) 
            VALUES ('tieu de 1', 'noi dung 1');";
    $sql .= "INSERT INTO news (title, content) 
            VALUES ('tieu de 2', 'noi dung 2');";
    // Thực thi câu lệnh
    if (mysqli_multi_query($conn, $sql)) {
        echo "Thêm thành công";
    } else {
        echo "Lỗi: " . $sql . "<br>" . mysqli_error($conn);
    }
    // Ngắt kết nối
    mysqli_close($conn);

    // try {
    //     // Kết nối
    //     $conn = new PDO("mysql:host=localhost;dbname=vmodev", 'root', '');
    //     // Thiết lập exception
    //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    //     // Bắt đầu transaction
    //     $conn->beginTransaction();
    //     // Thực thi từng câu truy vấn
    //     $conn->exec("INSERT INTO News (title, content) 
    //         VALUES ('tieu de 1', 'noi dung 1')");
    //     $conn->exec("INSERT INTO News (title, content) 
    //         VALUES ('tieu de 2', 'noi dung 2')");
    //     // Nếu mọi thứ thành công thì commit
    //     $conn->commit();
    //     echo "Thao tác thành công";
    // } 
    // catch (PDOException $e) {
    //     // Nếu xuất hiện lỗi thì rollback lại các thao tác
    //     $conn->rollback();
    //     echo "Lỗi: " . $e->getMessage();
    // }
    // // Ngắt kết nối
    // $conn = null;
?>