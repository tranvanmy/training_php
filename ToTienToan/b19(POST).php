<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tô Tiến Toàn</title>
    <meta http-equiv = "Content-Type" content = "text/html; charset = UTF-8">
</head>
<body>
    <form action="" method = "POST">
        Username: <input type="text" name="username" value=""/><br>
        Password: <input type="password" name="password" value=""><br>
        <input type="submit" name="form_click" value="gửi dữ liệu"><br>
        <?php
            //nếu người dùng click vào button gửi dữ liệu
            //vì button đó tên là form_click nên đó cũng là
            //tên của key nằm trong biến $_POST
            if(isset($_POST['form_click'])){
                echo 'Tên đăng nhập là : '.$_POST['username'];
                echo '<br>';
                echo 'Mật khẩu là : '.$_POST['password'];
            }
        ?>
    </form>
</body>
</html>