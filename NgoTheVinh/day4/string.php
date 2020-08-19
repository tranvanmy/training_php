<?php 
    $str = "học nốt php basic";
    echo "A nói: \"hôm nay $str \" <br/>";

    echo(addcslashes('Ngô thế a', 'a..z')); // thêm gạch trc ktu từ a -> z
    echo '<br/>';
    echo(addcslashes('Nguyễn Văn A','a..zA..Z')); //thêm gạch trc ktu từ a -> z && Z->A

    echo '<br/>';
    echo addslashes ("Freetuts's a website' \ learning online"); // Thêm dấu gạch chéo trc (‘   “   \)

    echo '<br/>';

    echo stripslashes("Học Php \ day 3"); // xóa kí tự \ trong chuỗi 
    echo '<br/>';

    echo crc32 ( $str ); // chuyển thành dãy số nguyên
    echo '<br/>';
 
    // var_dump(explode(' ', $str))
    $arrStr = explode(' ', $str); // string thanh chuoi
    foreach($arrStr as $arr){
        echo $arr. '<br/> ';
    }

    echo '<br/>';

    $stri = implode(' ', $arrStr);// chuoi thanh string
    echo 'implode: '. $stri;
    echo '<br/>';

    $countStr = 'Chào bạn';
    echo strlen($countStr). '<br/>';

    echo str_repeat($countStr, 2). ' ';// lặp lại chuỗi 2 lần
    echo '<br/>';

    echo str_replace('bạn','vinh', 'chào bạn').'<br/>'; // tìm , thay thế , từ chuỗi ...

    echo str_replace(array('chào','bạn'), array('hello','vinh'), 'chào bạn');
    echo '<br/>';

    echo htmlentities("<b> hello <b/>");// html k còn tác dụng trong chuỗi 
    echo '<br/> -----------<br/>';

    $str1 = htmlentities('<b>freetuts.net</b>');
  
    echo 'Entity: ' . $str1 . '<br/>';
    echo 'Decode: ' . html_entity_decode($str1);//ngược lại htmlentities

    echo strip_tags('<b>freetuts.net</b>', 'b');// loại bỏ thẻ html <b><b/>
    echo '<br/> -----------<br/>';

    echo substr('hello vinh', 0, 4);
    echo '<br/> -----------<br/>';

    echo strstr('helo ban ban vinh vinh','ban');// cát chuỗi bắt đầu từ ban trở đi
    echo '<br/> -----------<br/>';

    echo strpos('hoc php basic a', 'si' );
    echo '<br/> -----------<br/>';

    echo strtolower("ABC");// chuyển tất cả về chữ thường
    echo '<br/> -----------<br/>';

    echo trim('   Ngo Nghi   '); // xóa khoảng trắng
    echo '<br/> -----------<br/>';

    $json = '{"a":1, "b": 2, "c": 3}';
    $arrayJ = json_decode($json);
    foreach($arrayJ as $key =>$values){
        echo "$key : $values <br/>";
    }
    echo '<br/> -----------<br/>';

    var_dump(json_encode('Hello'));
?>