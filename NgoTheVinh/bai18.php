<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        function sortInsertion($Arr){
            for ($i = 0; $i< count($Arr); $i ++){
                $position = $i;
                $current = $Arr[$i];

                while($position > 0 && $Arr[$position - 1] > $current){
                    $Arr[$position] = $Arr[$position -1];
                    $position --;
                }
                $Arr[$position] = $current;
            }
            return $Arr;
        }
        $ArrN = array(2,1,5,4,10,9);
        $ArrN = sortInsertion($ArrN);
        foreach($ArrN as $Ar){
            echo $Ar. ' ';
        }
    ?>
</body>
</html>