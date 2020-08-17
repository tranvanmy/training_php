<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "Shortcut icon" href = "image/icon1.jpg">
    <title>Training Thực Tập Ngày 3</title>
<body>
    <?php
        function tinhtong($t)
            {
                if ($t == 1){
                    return $t; 
                    }
                return $t + tinhtong($t-1);
        }
            echo tinhtong(2904);
        ?> <br \>
    <?php
        function total($n)
            {
                $tong = 0;
                for ($a = 1; $a <= $n; $a ++){
                    $tong += $a; 
                    }
                return $tong;
        }
        echo tinhtong(10101);
        ?> <br \>
        
</body>
</html>