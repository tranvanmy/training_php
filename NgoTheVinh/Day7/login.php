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
                    <input type="submit" name="login" value="Login">
    </form>
    <h1>
        <?php 
            if(isset($_POST['login'])){
                if(empty($_POST['username']) || empty($_POST['password'])){
                    echo 'Mời bạn nhập đủ tài khoản và mật khẩu';
                }else{
                    try {
                            $conn = new PDO("mysql:host=localhost;dbname=user",'root','');
                            $conn ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                            $stmt = $conn->prepare("SELECT * FROM account");
                            // $stmt->bindParam(':username', $username);
                            // $stmt->bindParam(':password', $password);
                            // 'username'= :username AND 'password':password
                            // $username = $_POST['username'];
                            // $password = $_POST['password'];
                            $stmt->execute();
                            
                            $stmt->setFetchMode(PDO::FETCH_ASSOC); 

                            $result = $stmt->fetchAll();
                            $kt = 0;
                            foreach ($result as $item){
                                if($item['username'] == $_POST['username'] && $item ['password'] == $_POST['password']){
                                    $kt =1;
                                    break;
                                }else {
                                    $kt =0;
                                }
                                // echo $item['username'];
                                
                            }
                            // echo $kt;
                            if($kt ==1){
                                echo 'Đăng nhập thành công';
                            }else echo 'Đăng nhập thất bại';
                    } catch (PDOException $th) {
                        echo 'Lỗi <br>'. $th ->getMessage();
                    }
                }
            }
        ?>
    </h1>
</body>
</html>