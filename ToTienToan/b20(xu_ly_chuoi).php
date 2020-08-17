<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //echo "Nam nói\"Cậu ấy đang ăn tối\" ";

        //$str = "đang ăn tối";
        //echo "Nam nói \"cấu ấy $str\"";

        //gạch chéo trước các kí tự từ a..z
        //echo (addcslashes('to tien toan hop tien my duc ha noi','a..zA...Z'));

        //thêm gạch chéo trước ",'.
        //echo addslashes("to " \ ' tien toan hop tien my duc ha noi");

        //xóa gạch chéo
        //echo stripcslashes("to \ tien \ toan \ hop \ tien \ my \ duc \ ha \noi");

        //trả về một số nguyên
        //echo crc32 ('freetuts.net');

        //explode($delimiter,$string)kí tự tách mảng $delimiter có các phần tử là chuỗi $String tách
        //var_dump(explode('t', 'to tien toan'));
        
        //implode($delimiter,$piếcarray) ngược lại với explode()
        //echo implode(" ",array("to","tien","toan"));

        //Strlen($tring) đếm số kí tự trong chuỗi
        //echo strlen("tòn");

        //str_replace($chuoi_tim,$chuoi_thay_the,$chuoi_nguon) tìm chuoi_tim thay thế bằng chuỗi thay thế từ
        //$str = "nguyen tien toan";
        //$str = str_replace('nguyen','to',$str);
        //echo $str;

        //chuyển kể cả các thẻ html cũng về dạng kí tự
        //echo htmlentities('<br><b>freetuts.net</b>');
        //echo ('<br>freetuts.net');
        // Kết quả <b>freetuts.net</b>

        //$str = htmlentities('<br><b>freetuts.net</b>');
        //echo 'Decode: ' . html_entity_decode($str);

        //substr($string, $start, $length) lấy đoạn kí tự từ $start và chiều dài $length
        //$str = "to toan 3t";
        //echo substr($str,0,7);

        //echo trim(' freetuts.net ');
        $mang = array("sơn","vinh","toan","tuan","hưng");
        echo json_encode($mang);
    ?>
</body>
</html>