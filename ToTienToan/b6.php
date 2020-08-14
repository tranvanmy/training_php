<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $mang = array(1,2,3,4,5,6,7);
        // for($i = 0; $i < sizeof($mang); $i++){
        //     if($mang[$i]%2 == 0){
        //         echo $mang[$i]." so chan<br>";
        //     }else{
        //         echo $mang[$i]." so le<br>";
        //     }
        // }
        
        //switch case
        // $mang1 = array(1,9,7,5,6,4,4,3);
        // for($i = 0; $i < sizeof($mang1); $i++){
        //     switch($mang1[$i]){
        //         case 0 :
        //             echo "số 0<br>";
        //             break;
        //         case 1 :
        //             echo "so 1<br>";
        //             break;
        //         case 2 :
        //             echo "so 2<br>";
        //             break;
        //         case 3 :
        //             echo "so 3<br>";
        //             break;
        //         case 4 :
        //             echo "so 4<br>";
        //             break;
        //         case 5 :
        //             echo "so 5<br>";
        //             break;
        //         case 6 :
        //             echo "so 6<br>";
        //             break;  
        //         case 7 :
        //             echo "so 7<br>";
        //             break;
        //         case 8 :
        //             echo "so 8<br>";
        //             break;
        //         case 9 :
        //             echo "so 9<br>";
        //             break;
        //         default : 
        //             echo "số khác <br>";
        //             break;
        //     }
        // }

        //switch lồng nhau
        $so1 = 16;
        $so2 = null;
        switch($so1){
            case 16 :
                $so2 = $so1 % 2;
                switch($so2){
                    case 0 :
                        echo "là số chẵn";
                        break;
                    default :
                        echo "số lẻ";
                        break;
                }
                break;
            default :
                echo "khong phải 16";
                break;
        }
    ?>
</body>
</html>