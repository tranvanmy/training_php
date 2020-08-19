<?php 

// MySQLi Object-oriented:

    // $conn = new mysqli('localhost','root','','sinhvien');

    // if($conn-> connect_error){
    //     echo 'lỗi kết nối'. $conn -> connect_error;
    // }
    // $sql = "INSERT INTO profilestudent(fullname,Age,Address,birthDay)
    // VALUES ('Ngo The a',20,'Bac giang','1998/01/01');";
    // $sql .= "INSERT INTO profilestudent(fullname,Age,Address,birthDay)
    // VALUES ('Nguyen thi no',21,'bac Ninh','1999/05/20');";

    // if($conn ->multi_query($sql) === TRUE){
    //     $lastID = $conn->insert_id;
    //     echo 'insert thành công , id: '.$lastID;
    // }else echo 'insert thất bại';

    // $conn->close();


 //Sử dụng MySQLi Procedural:

    // $conn = mysqli_connect('localhost','root','','sinhvien');
    
    // if(mysqli_error($conn)){
    //     echo 'lỗi kết nối';
    // }else echo 'connected <br/>';

    // $sql = "INSERT INTO profilestudent(fullname,Age,Address,birthDay)
    //      VALUES ('Ngo Van quang minh',21,'Bac giang','1998/01/01')";
    // if(mysqli_query($conn,$sql)){
    //     $lastID = mysqli_insert_id($conn);
    //     echo 'insert thành công, id: '. $lastID;
        
    // }else echo 'insert thất bại';

    // mysqli_close($conn);


// Sử dụng PDO
    // try {
    //     $conn = new PDO("mysql:host=localhost;dbname=sinhvien", 'root','');
    
    //     $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    //     $sql = "INSERT INTO profilestudent(fullname,Age,Address,birthDay)
    //          VALUES ('Nguyen van A',21,'Hà Nội','1998/01/20')";
    //     $conn->exec($sql);

    //     $lastID = $conn ->lastInsertId();
    //     echo "insert thành công , id: $lastID ";
    //     $conn = null;
    // } catch (PDOException $e) {
    //     echo $e -> getMessage();
    // }
    

    //multi inser PDO
        try {
            $conn =new PDO("mysql:host=localhost;dbname=sinhvien", 'root','');
            $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // Bắt đầu transaction
            $conn ->beginTransaction();

            $conn ->exec("INSERT INTO profilestudent(fullname,age,address,birthday)
            VALUES ('Ly',18,'Hà Nội', '2000/10/20')");
            $conn ->exec("INSERT INTO profilestudent(fullname,age,address,birthday)
            VALUES ('my',19,'Hà Nội', '2000/06/20')");
            
            $conn ->commit();
            echo 'insert thành công';
        } catch (PDOException $th) {
            echo $th -> getMessage();
        }
    

?>