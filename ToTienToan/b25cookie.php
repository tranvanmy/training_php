<!-- setcookie($name,$value,$expire,$path,$domain); -->
<!-- ví dụ lưu chữ tên đăng nhập username = 'totientoan' trong vòng 1h -->


<?php
    setcookie('username','totientoan',time() + 3600);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_COOKIE['username'])){
            echo $_COOKIE['username'];
        }
    ?>
</body>
</html>