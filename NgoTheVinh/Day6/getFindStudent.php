<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="get">
        <input type="text" name="name" value="">
        <input type="submit" name="seach" value="seach">
    </form>
    <h1>
        <?php 
            if(isset($_GET['seach'])){
                if(empty($_GET['name'])){
                    echo 'mời nhập đủ tên';
                }else{
                    try {
                        $conn = new PDO("mysql:host=localhost;dbname=sinhvien", 'root','');

                        $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                        // $fullname = $_GET['name'];

                        $fullname = $_GET['name'];
                        $stmt = $conn->prepare("SELECT * FROM profilestudent WHERE FullName like '%$fullname%'");
                        // FullName like %$fullname%
                        $stmt->execute();

                        $stmt->setFetchMode(PDO::FETCH_ASSOC); 

                        $result = $stmt->fetchAll();
                        foreach ($result as $item){
                            echo $item['FullName'] . ' - '. $item['Age'].' - '.$item['Address'];
                            echo '<br/>------------------<br/>';
                        }
                    } catch (PDOException $th) {
                        echo 'lỗi <br>'. $th->getMessage();
                        echo '<br/>------------------<br/>';

                    }
                }
            }


        ?>
    </h1>
</body>
</html>