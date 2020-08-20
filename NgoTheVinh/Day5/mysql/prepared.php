<?php 

//Prepared câu SQL trong MySQLi
//     $conn = new mysqli('localhost','root','','sinhvien');

//     if($conn -> connect_error){
//         die('lỗi kết nối: ' . $conn->connect_error) ;
//     }

//     $sql = "INSERT INTO profilestudent(fullname,Age,Address,birthDay)
//     VALUES(?,?,?,?)";

// // Tạo đối tượng repared
//     $stmt = $conn ->prepare($sql);
// //gán giá trị vào tham số
//     $stmt -> bind_param("siss",$fullname,$age,$address,$birthday);


//   // Thực thi câu truy vấn lần 1
//     $fullname = 'Kim chi';
//     $age = 20;
//     $address = 'Ninh binh';
//     $birthday= '2020/01/02';
//     $stmt ->execute();

//     // thực thi câu truy vấn lần2
//     $fullname = 'The Vinh';
//     $age = 22;
//     $address = 'Tan Yen';
//     $birthday = '1998/01/01';
//     $stmt ->execute();

//     $stmt ->close();
//     $conn -> close();



//Prepared câu SQL trong PDO

    try {
        $conn = new PDO("mysql:host=localhost;dbname=sinhvien",'root','');
        $conn -> setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
        $stmt = $conn ->prepare("INSERT INTO profilestudent(fullname,Age,Address,birthDay) 
        VALUES (:fullname,:age,:address,:birthday)");

        $stmt ->bindParam(':fullname', $fullname);
        $stmt ->bindParam(':age', $age);
        $stmt ->bindParam(':address', $address);
        $stmt ->bindParam(':birthday', $birthday);

        //thêm lần 1 
        $fullname = 'tran nhung';
        $age = 20;
        $address = 'ngoc chau';
        $birthday = '1999/03/02';
        $stmt -> execute();

        // them lan 2
        $fullname = 'le quyen';
        $age = 20;
        $address = 'd3';
        $birthday = '1998/03/02';
        $stmt -> execute();
        
    }catch(PDOException $e){
        echo $e ->getMessage();
    }
    $conn = null;
?>