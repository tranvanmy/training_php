<?php
    try {
        $data = [['John','Doe'],['Jane','Roe'],['toan','to'],['tien','to']];
        $conn = new PDO("mysql:host=localhost;dbname=vmodev", 'root', '');
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $stmt = $conn->prepare('INSERT INTO news (title, content) values (?, ?)');
        $conn->beginTransaction();
        foreach ($data as $row)
        {
            $stmt->execute((array)$row);
        }
        $conn->commit();
        echo "thanh công";
    }catch (Exception $e){
        $conn->rollback();
        echo "Lỗi: " . $e->getMessage();
    }

    //var_dump([['John','Doe'],['Jane','Roe'],['toan','to'],['tien','to']]);
?>