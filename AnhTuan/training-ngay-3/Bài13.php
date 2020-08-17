<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "Shortcut icon" href = "image/icon1.jpg">
    <title>Training Thực Tập Ngày 3</title>
</head>
<body>
    <?php
        $mang = array(18, 77, 59, 23, 456, 974, 514 , 75, 93); // khao báo mảng
  
        $sophantu = 9; 
          
        // Sắp xếp mảng
        for ($i = 0; $i < ($sophantu - 1); $i++)
        {
            for ($j = $i + 1; $j < $sophantu; $j++) // lặp các phần tử phía sau
            {
                if ($mang[$i] > $mang[$j]) // nếu phần tử $i bé hơn phần tử phía sau
                {
                    // hoán vị
                    $tmp = $mang[$j];
                    $mang[$j] = $mang[$i];
                    $mang[$i] = $tmp;
                }
            }
        }
          
        // Hiển thị các phần tử của mảng đã sắp xếp
        for ($i = 0; $i < $sophantu; $i++){
            echo $mang[$i] . ' ';
        }
        ?>



</body>
</html>