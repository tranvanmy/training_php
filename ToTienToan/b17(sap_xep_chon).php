<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //sap xep tang dan
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

        $mang1 = array(6,5,7,1,2,8,4,8,4,9);
        sap_xep($mang1);
        
    ?>
</body>
</html>