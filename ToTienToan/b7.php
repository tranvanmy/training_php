<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //vòng for lồng nhau
    //$mang1[][] = array();
    for($i = 0; $i < 10; $i++){
        for($j = 0; $j < 10; $j++){
            if($i % 2 != 0){
                if($j % 2 != 0){
                    echo "*";
                    if($j == 9){
                        print("<br>");
                    }
                }else{
                    echo "#";
                }
            }
            if($i % 2 == 0){
                if($j % 2 == 0){
                    echo "*";
                }else{
                    echo "#";
                    if($j == 9){
                        print("<br>");
                    }
                }
            }
        }
    }
    ?>
</body>
</html>