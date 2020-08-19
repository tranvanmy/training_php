<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "Shortcut icon" href = "image/icon1.jpg">
    <title>Training Thực Tập Ngày 4</title>
</head>
<body>
    <?php
        if (isset($domain)){
            echo 'Biến domain đã tồn tại';
        }
        else{
            echo 'Biến domain chưa tồn tại';
        }
        //if (isset($_POST['submit']))
        //{
        //    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : '';
        //     $address = isset($_POST['address']) ? $_POST['address'] : '';
        //    $email = isset($_POST['email']) ? $_POST['email'] : '';
        //    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
        //}
        ?>
</body>
</html>