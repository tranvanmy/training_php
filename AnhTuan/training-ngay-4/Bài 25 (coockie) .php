<!DOCTYPE html>
  
<?php
    setcookie('username', 'tuananh', time() + 3600); // lưu trữ tên đăng nhập username = ‘tuananh’ trong một giờ
?>
  
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
    <body>
        <?php  // Lấy giá tri username vừa lưu trữ ở trên
            if (isset($_COOKIE['username']))
            {
            echo $_COOKIE['username'];
            }
            ?>
    </body>
</html>