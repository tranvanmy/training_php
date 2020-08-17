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
        for ($i = 5; $i <= 50; $i++)
        {
            echo $i . ' ';
            if ($i == 39)
            {
                break; //thoát vòng lặp
            }
        }
        ?>
    <?php //tiếp tục vòng lặp
        for ($a = 1; $a <= 20 ;$a++)
        {
        if ($a == 5)
        {
            continue;
        }
        echo $a . ' ';
    }
    ?>
    <?php
        $x = 122;
        $y = 133;
        $z = $x + $y;
          
        echo $x;
          
        goto label_end;
          
        echo $y;
          
        label_end;
        ?>    
</body>
</html>