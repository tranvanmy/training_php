<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <!-- TT sắp xếp chọn -->
     <?php 
        function checkNum1($a){
            for($i = 0; $i< count($a) - 1; $i ++){
                $min = $i;
                for($j = $i + 1; $j < count($a); $j++){
                    if($a[$j] < $a[$min] ){
                        $min = $j;
                    }
                }
                $tmp = $a[$i];
                $a[$i] =  $a[$min];
                $a[$min] = $tmp;
            }
            return $a;
        }
        
        $arr = array(1,2,10,7,4,16);
        $arr = checkNum1($arr);
        foreach($arr as $arrN){
            echo $arrN. " ";
        }
    ?>
</body>
</html>