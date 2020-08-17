<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "Shortcut icon" href = "image/icon1.jpg">
    <title>Training Thực Tập Ngày 3</title>
</head>
<body>
    <?php
        // Khai báo cờ và gán cho cờ có giá trị là không tìm thấy
        $flag = false;
        
        // duyệt qua từng số
        for ($i = 1; $i <= 1000; $i++){
            if ($i % 57 == 56){
                $flag = true;
            }
        }
        
        if ($flag == true){
            echo 'YES';
        }
        else {
            echo 'NO';
        }
        ?>
</body>
</html>