<!-- <?php 
   try {
    $conn = new PDO("mysql:host=localhost;dbname=student",'root','');
    $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE profile(
        id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        fullname VARCHAR(30) NOT NULL,
        address TEXT,
        birthday DATE,
    )";
    $conn ->exec($sql);
    echo 'tạo db thành công' ;
   } catch (PDOException $th) {
       echo 'lỗi <br/>'.$th ->getMessage();
   }
    

?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Full Name: <input type="text" name="fullname" value=""/>
        Address: <input type="text" name="address" value=""/>
        birthday: <input type="text" name="birthday" value=""/>
        <input type="submit" name="add" value="add" />
    </form>

    <h1>
        <?php 
            if(isset($_POST['add'])){
                if(empty($_POST['fullname']) || empty($_POST['address']) || empty($_POST['birthday'])){
                    echo 'Mời bạn nhập đủ thông tin';
                }else{
                    try {
                        $conn = new PDO("mysql:host=localhost;dbname=student",'root','');
                        $conn ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                        
                        $conn ->beginTransaction();

                        $fullname = $_POST['fullname'];
                        $address = $_POST['address'];
                        $birthday = $_POST['birthday'];
                        $conn->exec("INSERT INTO profile (fullname, address,birthday) 
                        VALUES ('$fullname','$address','$birthday')");
                        
                        $conn ->commit();
                        echo 'add thành công';
                    } catch (PDOException $th) {
                        echo 'Lỗi <br/>'.$th->getMessage();
                    }
                    $conn =null;
                    // echo $_POST['fullname'] .'+ '. $_POST['birthday'] ;
                }
            }
        ?>
    </h1>
</body>
</html>