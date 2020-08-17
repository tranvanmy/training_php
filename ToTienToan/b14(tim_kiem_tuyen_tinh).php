<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //tìm kiếm
        // function tim_kiem($mang, $pt_ton_tai){
        //     for($i = 0; $i < count($mang); $i++){
        //         if($mang[$i] == $pt_ton_tai){
        //             return true;
        //         }
        //     }
        //     return false;
        // }
        // $pt_can_tim = 42;
        // $mang1 = array(42,63,88,49,48,16,31,48,12,37,65,76);
        // if(tim_kiem($mang1,$pt_can_tim)){
        //     echo 'co phan tu '.$pt_can_tim.' trong mảng';
        // }else{
        //     echo 'khong co phan tu '.$pt_can_tim.' trong mảng';
        // }

        //
        $mang2 = array();
        for($i = 0; $i <= 100; $i++){
            $mang2[$i] = $i;
        }

        for($i = 0; $i <= 100; $i++){
            if($mang2[$i] % 3 == 0 ){
                echo $mang2[$i]." ";
            }
        }

    ?>
</body>
</html>