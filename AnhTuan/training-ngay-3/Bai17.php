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
        function sap_xep($mang){
            for($i = 0; $i < count($mang); $i++){
                $min = $mang[$i];
                $vt = $i; 
                for($j = $i + 1; $j < count($mang); $j++){
                    if($min > $mang[$j]){
                        $min = $mang[$j];
                        $vt = $j;
                    }
                }
                $tg = $mang[$i];
                $mang[$i] = $mang[$vt];
                $mang[$vt] = $tg;

            }
            for($i = 0; $i < count($mang); $i++){
                echo $mang[$i]." ";
            }
        }

        $mang1 = array(12,24,15,78,21,9,56,32,14,25,18,44,77,88,99,133);
        sap_xep($mang1);
        
    ?>
</body>
</html>