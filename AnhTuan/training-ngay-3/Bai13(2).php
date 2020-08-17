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
        function sap_xep_tang($mang)
        {
            $sophantu = count($mang);
            for ($i = 0; $i < ($sophantu - 1); $i++)
            {
                for ($j = $i + 1; $j < $sophantu; $j++)
                {
                    if ($mang[$i] > $mang[$j])
                    {
                        // hoán vị
                        $tmp = $mang[$j];
                        $mang[$j] = $mang[$i];
                        $mang[$i] = $tmp;
                    }
                }
            }
            return $mang;
        }
          
        function xuat_mang_ra_man_hinh($mang)
        {
            $sophantu = count($mang);
            for ($i = 0; $i < $sophantu; $i++){
                echo $mang[$i] . ' ';
            }
        }
          
        $mang = array(27, 95, 756, 541, 235, 458, 618, 954, 957, 968); 
          
        // sắp xếp
        $mang = sap_xep_tang($mang);
          
        // xuất ra màn hình
        xuat_mang_ra_man_hinh($mang);
        ?>
</body>
</html>