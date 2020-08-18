<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <?php
            //chuyển phần key thành chữ in hoa
            // $mang = array(
            //     'chu_thuong' => 'Hello'
            // );
            // $mang = array_change_key_case($mang, CASE_UPPER);
            // var_dump($mang);

            //trộn hai mảng một mảng làm key một mảng làm value
            // $mang_key = array('a','b','c');
            // $mang_value = array('toan','vinh','tuan');
            // $mang = array_combine($mang_key,$mang_value);
            // print_r($mang);

            // $array_keys = array('a', 'b', 'c');
            // $array_values = array('one', 'two', 'three');
            // print_r(array_combine($array_keys, $array_values));

            //đếm các phần tử lặp lại
            $mang = array('toan','to','tien','tien','to','toan',1,1,1);
            print_r(array_count_values($mang));
        ?>
</body>
</html>