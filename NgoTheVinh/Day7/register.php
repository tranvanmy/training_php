<?php 
    // try {
    //     $conn = new PDO("mysql:host=localhost;dbname=user",'root','');
    //     $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //     $sql = "CREATE TABLE account(
    //         id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    //         username CHAR(30) UNIQUE NOT NULL,
    //         password CHAR(20) NOT NULL
    //     )";

    //     $conn ->exec($sql);
    //     echo 'tạo table thành công';
    // } catch (PDOException $th) {
    //     echo 'Lỗi <br>'. $th ->getMessage();
    // }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post">
        Username: <input type="text" name="username" value=""> <br/>
        Password: <input type="password" name="password" value=""><br/>
                    <input type="submit" name="register" value="Register">
    </form>
    <h1>
        <?php 
            if(isset($_POST['register'])){
                if(empty($_POST['username']) || empty($_POST['password'])){
                    echo 'Mời bạn nhập đủ tài khoản và mật khẩu';
                }else{
                    try {
                            $conn = new PDO("mysql:host=localhost;dbname=user",'root','');
                            $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            $stmt = $conn->prepare("INSERT INTO account(username,password)  VALUES (:username, :password)");
                            $stmt->bindParam(':username', $username);
                            $stmt->bindParam(':password', $password);

                            $username = $_POST['username'];
                            $password = $_POST['password'];
                            $stmt->execute();
                            echo 'Đăng kí thành công';
                    } catch (PDOException $th) {
                        echo 'Lỗi <br>'. $th ->getMessage();
                    }
                }
            }
        ?>
    </h1>
</body>
</html>