<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a1 = 4;
        $a2 = 8;
        $a3 = 9;
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
        echo tim_max($a1, $a2, $a3);
    ?>
</body>
</html>