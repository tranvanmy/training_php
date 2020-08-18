<?php
    session_start();
    if(isset($_POST['save_session'])){
        //lưu session
        $_SESSION['toan'] = $_POST['username'];
    }
    if(isset($_POST['delete_session'])){
        //xóa session toan
        unset($_SESSION['toan']);
        //xóa hết session
        session_destroy();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport-Type" http-equiv = "Content" content="text/html; charset = UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php
            //Hiển thị thông tin lưu trữ trong session
            //kiểm tra có tồn tại hay không trước khi in ra
            if (isset($_SESSION['toan'])) {
                echo 'ten dang nhap la : '.$_SESSION['toan'];
            } else {
                # code...
            }
        ?>
    </h1>
    <form action="" method = "post">
            <input type="text" name="username" value=""><br>
            <input type="submit" name="save_session" value="Lưu session">
            <input type="submit" name="delete_session" value="Xóa session">
    </form>
</body>
</html>