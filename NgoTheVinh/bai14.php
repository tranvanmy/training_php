<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        function checkNum($arrNum, $num){
            for($i = 0; $i< count($arrNum); $i ++){
                if($arrNum[$i] == $num){
                    return true;
                }
            }
            return false;
        }
        $findToNum = 33;
        $arr = array(12,201,22,33,44,11,55);
        echo count($arr);
        echo " ". sizeof($arr);
        // echo ' ok';
        // if(checkNum($arr, $findToNum)){

        //     echo $findToNum. ' có trong mảng';
        // }
        
    ?>

   

    
</body>
</html>