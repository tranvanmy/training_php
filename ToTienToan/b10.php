<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        for($i = 0; $i < 10; $i++){
            if($i == 1){
                echo "1 này";
            }
            if($i < 6){
                continue;
                echo "nhỏ hơn 6";
            }if($i == 7){
                echo "7 này";
            }if($i == 8){
                break;
            }
        }
    ?>
</body>
</html>