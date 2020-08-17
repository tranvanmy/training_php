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
        function sap_xep_chen($mang){
            for($i = 0; $i < count($mang); $i++){
                $vt = $i;
                $tg = $mang[$i];
                $kt = false;
                $tg2 = 0;
                for($j = 0; $j < $i-1; $j++){
                    if($mang[$i] < $mang[$j] && $kt == false){
                        $kt = true;
                        $tg = $mang[$i];
                        $mang[$j] = $tg;
                        continue;
                    }
                    if($kt == true){
                        $mang[$j+1] = $tg2;
                        $tg2 = $mang[$j+1];
                        
                        //$mang[$j] = $mang[$vt];
                    }
                }
            }
            for($i = 0; $i < count($mang); $i++){
                echo $mang[$i]." ";
            }
        }
        $mang1 = array(11,22,44,33,55,66,77,88,99,111,222,333,444,555,666);
        sap_xep_chen($mang1);
    ?>
</body>
</html>