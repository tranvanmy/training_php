<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //while
        $so1 = $so2 = 9;
        while($so1 > 0){
            while($so2 > 0){
                if($so1 % 2 != 0){
                    if($so2 % 2 != 0){
                        echo "*";
                        if($so2 == 1){
                            print("<br>");
                        }
                    }else{
                        echo "#";
                    }
                }
                if($so1 % 2 == 0){
                    if($so2 % 2 == 0){
                        echo "*";
                    }else{
                        echo "#";
                        if($so2 == 1){
                            echo "<br>";
                        }
                    }
                }
                $so2--;
            }
            $so2 = 9;
            $so1--;
        }
    ?>
</body>
</html>