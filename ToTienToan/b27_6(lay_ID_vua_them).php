<?php
    $conn = new mysqli('localhost','root','','vmodev');
    if($conn->connect_error){
        die('ket noi that bai'.$conn->connect_error);
    }

    $sql = "INSERT INTO news(title,content) VALUES ('tieu de 2','noi dung 2')";

    if($conn->query($sql) == true){
        $last_id = $conn->insert_id;
        echo 'them thanh cong '.$last_id;
    }else{
        echo "loi ".$sql."<br>".$conn->error;
    }
    $conn->close();
?>