<?php session_start();
// Nếu click vào nút Lưu Session
if (isset($_POST['save-session']))
{
    // Lưu Session
    $_SESSION['name'] = $_POST['username'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
       Username:<input type="text" name="username" value=""/>
                <input type="submit" name="save-session" value="Save Session"/>

    <h1>
            <?php
            // Hiển thị thông tin lưu trong Session
            // phải kiểm tra có tồn tại không trước khi hiển thị nó ra
            if (isset($_SESSION['name']))
            {
                echo 'Username là : ' . $_SESSION['name'];
            }
            ?>
    </h1>

    
</body>
</html>