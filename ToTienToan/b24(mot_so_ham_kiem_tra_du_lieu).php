<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $toan = 1;
        $mang = array(1,6,7,5,4);

        //ĐẦU IS

        //hàm kiểm tra có tồn tại
        //echo isset($toan);

        //hàm kiểm tra rỗng
        //echo empty($toan);

        //kiểm tran có phải mảng k
        //is_array($toan);

        //kiểm tra xem có phải kiểu chuỗi hay k
        //is_string($toan);

        //kiểm tra xem có phải kiểu int hay k
        //is_int($toan);
        //is_integer($toan);

        //kiểm tra xem có phải kiểu float hay k
        //is_float($toan);

        //kiểm tra xem có phải kiểu double k
        //is_double($toan);

        //kiểm tra xem biến có null k
        //is_null($toan);


        //ĐẦU IN

        //kiểm tra giá trị có trong mảng hay k
        //echo in_array($toan,$mang);

        //kiểm tra xem $key có tồn tại trong mảng k
        echo array_key_exists(9,$mang);

    ?>
</body>
</html>