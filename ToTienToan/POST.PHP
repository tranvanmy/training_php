<!DOCTYPE html>
<html>
    <head>
        <title>Freetuts.net - xử lý form với POST</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <h1>freetuts.net - ứng dụng đăng nhập</h1>
        <form method="post" action="post.php">
            Username: <input type="text" name="username" value=""/> <br/> <br/>
            Password: <input type="post" name="password" value=""/> <br/> <br/>
            <input type="submit" name="btn" value="Đang Nhập"/>
        </form>
        <?php 
            if($_POST['btn']){
                $name = isset($_POST['username']) ? $_POST['username']:'';
                $pass = isset($_POST['password']) ? $_POST['password']: '';
                if($name == "" || $pass == ""){
                    echo 'bạn chưa nhập đầy đủ thông tin';
                }elseif($name != 'toan' || $pass != '123456'){
                    echo 'thông tin tài khoản sai';
                }else {
                    echo "đăng nhập thành công";
                }
            }
        ?>
    </body>
</html>