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
        // Hàm tìm các số chia hết cho 9
        function tim_so_chia_het_cho_9($mang)
        {
            foreach ($mang as $key => $val){
                if ($val % 9 == 0){
                    echo 'Ví trí thứ ' . $key . '<br/>';
                }
            }
        }
        
        // Chương trình chính
        //-----------------------------------------------
        // Lặp từ 1 đến 100 để gán giá trị vào mảng
        $mang = array();
        for ($i = 1; $i <= 100; $i++){
            $mang[$i] = $i;
        }
        
        // Gọi hàm để xuất ra vị trí chia hết cho 3
        tim_so_chia_het_cho_9($mang);
         ?>
    </body>
</html>