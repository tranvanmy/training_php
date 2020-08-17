<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "Shortcut icon" href = "image/icon1.jpg">
    <title>Training Thực Tập Ngày 3</title>
</head>
<body>
    <?php//vong lap for
        $ten = array(
            'Đỗ',
            'Đức',
            'Anh',
            'Tuấn',
            'Bla bla',
            'Blo blo'
        );

        for ($i = 0; $i < count($ten) ; $i ++){
                echo $ten[$i];
        }
        ?>
        <?php
            $i = 1; // Biến dùng để lặp
            while ($i <= 10){ // Nếu $i <= 10 thì mới lặp
                echo $i . ' - '; // Xuất ra màn hình
                $i++; 
            ?>
</body>
</html>