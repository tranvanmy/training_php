<?php
    header('Location: http://www.freetuts.net/', true, 301);
    // $conn=new mysqli('localhost','root','','vmodev');
    // if($conn->connect_error){
    //     die("ket noi that bai : ".$conn->connect->error);
    // }
    // //caau lenh sql
    // $sql = "INSERT INTO news(title,content) VALUES (?,?)";
    // //tạo đối tượng repared
    // $stmt = $conn->prepare($sql);
    // //gán giá trị vào các tham số ẩn
    // $stmt->bind_param("ss",$title,$content);
    // //thực thi câu truy vấn lần 1
    // $title = 'tieu de 3';
    // $content = 'noi dung 3';
    // $stmt->execute();
    // //thực thi câu truy vấn lần 2
    // $title = 'tieu de 4';
    // $content = 'noi dung 4';
    // $stmt->execute();
    // echo 'thêm thành công';
    // $stmt->close();
    // $conn->close();

    try {
        $conn = new PDO("mysql:host=localhost;dbname=vmodev", 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare("INSERT INTO news (title, content) VALUES (:title, :content)");
        $stmt->bindParam(':title', $title);
        $stmt->bindParam(':content', $content);
        $title = 'Tiêu đề 1';
        $content = 'Nội dung 1';
        $stmt->execute();
        $title = 'Tiêu đề 2';
        $content = 'Nội dung 2';
        $stmt->execute();
     
        echo "Thao tác thành công!";
    } 
    catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
     
    // Ngắt kết nối
    $conn = null;
?>