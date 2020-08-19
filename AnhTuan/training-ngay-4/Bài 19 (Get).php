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
        $_GET = array
            (
            'id' => '2904',
            'title' => 'Intern day 4'
        );

        // Lấy ID
        $id = $_GET['id'];
        echo $id; // kết quả là 12
        
        // Lấy tiêu đề
        $title = $_GET['Title'];
        echo $title; // kết quả là method_get
        ?>
</body>
</html>