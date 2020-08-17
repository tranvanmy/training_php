<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function sap_xep($mang){
            for($i = 0; $i < sizeof($mang); $i++){
                for($j = $i + 1; $j < sizeof($mang); $j++){
                    if($mang[$j] < $mang[$i]){
                        //hoán vị
                        $tg = $mang[$j];
                        $mang[$j] = $mang[$i];
                        $mang[$i] = $tg;
                    }
                }
            }

        return $mang;
    }
    
    function in_ra($mang){
        for($i = 0; $i < sizeof($mang); $i++){
            echo ($mang[$i]." ");
        }
    }
    $mang1 = array(1,5,7,3,5,9,6,5);
    $mang1 = sap_xep($mang1);
    in_ra($mang1);
    ?>
</body>
</html>