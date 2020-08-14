<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //if else
        // $a = 112;
        // $b = 23;
        // if(($a % $b) == 0){
        //     print("chia het");
        // }else{
        //     print('số '.$a.' khong chia het '.$b);
        // }


        // $nam = 1990;
        // $kiem_tra = ($nam % 4 == 0 && $nam % 100 != 0 || $nam % 400);
        //     if($kiem_tra == false){
        //         echo 'năm '.$nam.' không là năm nhuận';
        //     }
        //     else{
        //         echo 'năm '.$nam.' là năm nhuận';
        //     }

        $mang1 = array(11,74,03,53,83,87,43,85,69,58,73);
        $mang2 = array(18,34,84,94,24,29,49,73,53,75,92,34,82,64,37,55,94);
        for($i = 0; $i < sizeof($mang1); $i++){
            for($j = 0; $j < sizeof($mang2); $j++){
                if($mang1[$i] % 2 != 0){
                    if($mang1[$i] == $mang2[$j]){
                        echo $mang1[$i]." là số lẻ và có trong cả hai mảng<br>";
                    }else{
                        //echo "khong có số lẻ nào tồn tại trong cả hai mảng<br>";
                    }
                }else{
                    if($mang1[$i] == $mang2[$j]){
                        echo $mang1[$i]." là số chãn và có trong cả hai mảng<br>";
                    }else{
                        //echo "khong có số chẵn nào tồn tại trong cả hai mảng<br>";
                    }
                }
            }
        }
    ?>
</body>
</html>