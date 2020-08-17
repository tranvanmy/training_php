<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
                        $tg2 = $mang[$j+1];
                        $mang[$j+1] = $mang[$j];
                        $vt = $j;
                        $kt = true;
                        continue;
                    }
                    if($kt == true){
                        $mang[$j+1] = $tg2;
                        $tg2 = $mang[$j+1];
                        $mang[$vt] = $tg;
                        //$mang[$j] = $mang[$vt];
                    }
                }
            }
            for($i = 0; $i < count($mang); $i++){
                echo $mang[$i]." ";
            }
        }
        $mang1 = array(6,5,7,1,2,8,4,8,4,9);
        sap_xep_chen($mang1);
    ?>
</body>
</html>