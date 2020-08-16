<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $number = 7;
        // kiem_tra_so_chan($number);
        // function kiem_tra_so_chan($var_number){
        //     if($var_number % 2 == 0){
        //         echo "so chan";
        //     }else{
        //         echo "so le";
        //     }
        // }

        $so1 = 12;
        $so2 = 13;
        $so3 = 12;
        
        echo tinhtong($so1, $so2, $so3);
        
        function tinhtong($a, $b, $c = true){
            $tong = $a + $b;
            if($c == true){
                $tong = $tong + $c;
            }
            return $tong;
        }
    ?>
</body>
</html>