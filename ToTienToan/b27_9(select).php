<?php
    //Sử dụng MySQLi Object-oriented:
    // $conn = new mysqli('localhost','root','','vmodev');
    // //kiem tra ket noi
    // if($conn->connect_error){
    //     die("ket noi that bai : ".$conn->connect_error);
    // }
    // //cau lenh sql
    // $sql='select id,title,content from news';
    // //truy van vaf gan vao bien result
    // $result = $conn->query($sql);
    // //kiem tra so luong tra ve co lown hown 0
    // if($result->num_rows > 0){
    //     //fetch_assoc tra ve tuwng dong voi cac key laf ten thuoc tinh
    //     while($row = $result->fetch_assoc()){
    //         echo "id : ".$row['id']." title : ".$row['title']." content : ".$row['content'];
    //         echo '<br>';
    //     }
    // }else{
    //     echo "khong co du lieu";
    // }
    // $conn->close();

    //sử dụng Sử dụng MySQLi Procedural:
    // $conn = mysqli_connect('localhost','root','','vmodev');
    // if(!$conn){
    //     die('ket noi that bai : '.mysqli_connect_error());
    // }
    // $sql = "SELECT id,title,content FROM news";
    // $result = mysqli_query($conn,$sql);
    // if(mysqli_num_rows($result) > 0){
    //     while($row = mysqli_fetch_assoc($result)){
    //         echo "id : ".$row['id']." title : ".$row['title']." content : ".$row['content'];
    //         echo '<br>';
    //     }
    // }else{
    //     echo "khong co du lieu";
    // }
    // mysqli_close($conn);

    //su dung  Select data với PDO
    try {
        $conn = new PDO("mysql:host=localhost;dbname=vmodev",'root','');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //su dung prepare
        $stmt = $conn->prepare("SELECT id,title,content FROM news");
        $stmt->execute();
        $stmt->setFetchMode(PDO::FETCH_ASSOC);
        //$result = $stmt->fetchAll();
        while($row = $stmt->fetch()){
            echo "id : ".$row['id']." title : ".$row['title']." content : ".$row['content'];
            echo '<br>';
        }
    } catch (PDOException $e) {
        echo "loi : ".$e->getMessage();
    }
    $conn=null;
?>