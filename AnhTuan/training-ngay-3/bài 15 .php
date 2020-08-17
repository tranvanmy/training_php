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
        $a = 77;
        $b = 66;
        $c = 55;
        function tim_max($a, $b, $c)
        {
            $max = $a;
            if ($max < $b){
                $max = $b;
            }
            if ($max < $c){
                $max = $c;
            }
            return $max;
        }
        echo tim_max($a,$b,$c); 
        ?>
</body>
</html>