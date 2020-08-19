<?php 

//Sử dụng MySQLi Object-oriented:

    // $conn = new mysqli('localhost', 'root','','sinhvien');
    // if($conn -> connect_error){
        // die('lỗi kết nối : '. $conn -> connect_error);
    // }
    // $sql = "SELECT * FROM profilestudent";

    // $result = $conn ->query($sql);

    // if($result -> num_rows >0){
    //     while ($row =$result ->fetch_assoc()){
    //         echo 'Name: '.$row['FullName'] . '<br/>' . "Age: ". $row['Age'] .'<br/>'. 'Address: '. $row['Address'];
    //         echo '<br/>------------------<br/>';
    //     }
    // }else echo 'no record';
    // $conn ->close(); 


//Sử dụng MySQLi Procedural:
    // $conn =  mysqli_connect('localhost', 'root','','sinhvien');
    // if(mysqli_connect_error($conn)){
    //     echo 'lỗi kết nối : '. mysqli_connect_error();
    // }
    // $sql = "SELECT * FROM profilestudent";

    // $result = mysqli_query($conn,$sql);

    // if(mysqli_num_rows($result)){
    //     while ($row = mysqli_fetch_assoc($result)){
    //         echo 'Name: '.$row['FullName'] . '<br/>' . "Age: ". $row['Age'] .'<br/>'. 'Address: '. $row['Address'];
    //         echo '<br/>------------------<br/>';
    //     }
    // }else echo 'no record';
    // mysqli_close($conn); 


// PDO

    $conn = new PDO("mysql:host=localhost;dbname=sinhvien",'root','');

    $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

      // Sử đụng Prepare 
    $stmt = $conn -> prepare("SELECT * FROM profilestudent");

    $stmt -> execute();

    // Khai báo fetch kiểu mảng kết hợp
    $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    // Lấy danh sách kết quả
    $result = $stmt->fetchAll();

    // Lặp kết quả
    foreach ($result as $item){
        echo $item['FullName'] . ' - '.'Tuổi: '. $item['Age'];
        echo '<br/>------------------<br/>';
    }

?>