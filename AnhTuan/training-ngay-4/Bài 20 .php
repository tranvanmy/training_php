<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "Shortcut icon" href = "image/icon1.jpg">
    <title>Training Thực Tập Ngày 4</title>
</head>
<body>
    <?php
        $str = " đang intern tại V M O";
        echo "T nói\"Cậu ấy $str\" ";
        ?><br \>
    <?php
        echo (addcslashes('Do Duc Anh Tuan', 'a..z'));
        
        echo '<br />';
        
        echo (addcslashes('Do Duc Anh Tuan', 'a..zA..Z'));
        ?><br \> 
    <?php
        echo implode(' ', array(
            'Đỗ',
            'Đức',
            'Anh',
            'Tuấn',
            '29/04/1998'
        ));    
        ?><br \>
    <?php echo ord ('AT'); // Hàm này trả về mã ASCII của ký tự đầu tiên trong chuỗi $string.
        ?><br \>
    <?php
        echo strlen('TUANDODUCANH');  // Hàm này đếm số ký tự của chuỗi $string.
        ?><br \>
    <?php
        echo str_word_count('freetuts xin chào các bạn'); // str_word_count($str) Hàm này trả về số từ trong chuỗi $str.
        ?><br \>
    <?php
        echo str_repeat( 'Hello', 5 ); //str_repeat(  $str,  int $n  ) Hàm này lặp chuỗi $str $n lần.
        ?><br \>
    <?php
        $str = 'Freetuts Xin Chào Các Bạn'; // str_replace( $chuoi_tim, $chuoi_thay_the, $chuoi_nguon ) Hàm này tìm kiếm và thay thế chuỗi.        
        $str = str_replace( 'Freetuts', 'Freetuts.net', $str );
        echo $str; 
        ?><br \>
    <?php
        echo md5('freetuts.net'); // md5( $str) Hàm này mã hóa chuỗi thành một dãy 32 ký tự (mã hóa md5).
        ?><br \>
    <?php 
        echo sha1('freetuts.net'); // sha1($string) Hàm này mã hóa chuỗi thành một dãy 40 ký tự (mã hóa sha1)
        ?><br \>
    <?php
        $str = htmlentities('<b>freetuts.net</b>'); // html_entity_decode($string) Ngược lại với htmlentities, hàm này chuyển ngược các ký tự dạng thực thể HTML sang dạng ký tự của chúng.        
        echo 'Entity: ' . $str . '<br/>';
        echo 'Decode: ' . html_entity_decode($str); 
        ?><br \>
    <?php
        echo strip_tags('<b>freetuts.net</b>', 'b'); //strip_tags( $string, $allow_tags ) Hàm này bỏ các thẻ html trong chuỗi $string được khai báo ở $allow_tags.
        ?><br \>
    <?php
        echo substr( 'freetuts.net',  0, 8); // substr( $string,  $start, $length ) Hàm này lấy một chuỗi con nằm trong chuỗi $str bắt đầu từ ký tự thứ $start và chiều dài $length.  
        ?><br \>
    <?php
        echo strpos('freetuts.net chào các bạn', 'chào'); // strpos($str, $chuoi_tim ) Tìm vị trí của chuỗi $chuoi_tim trong chuỗi $str, kết quả trả về false nếu không tìm thấy.
        ?><br \>

</body>
</html>