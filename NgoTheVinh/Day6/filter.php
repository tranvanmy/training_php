<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    // xóa thẻ html trong 1 chuỗi
    
    $str = "<h1>Hello world</h1>";
    echo $str;

    $newstr = filter_var($str,FILTER_SANITIZE_STRING);
    echo $newstr;
    echo '<br> ---------<br>';
//ktra phải là số nguyên k
    $int = 10;
    if(!filter_var($int,FILTER_VALIDATE_INT === false )){
        echo 'Integer is valid';
    }else echo 'Integer is not valid';
     //TH $int = 0
    //  if(!filter_var($int,FILTER_VALIDATE_INT === false || filter_var($int,FILTER_VALIDATE_INT) === 0)){
    //     echo 'Integer is valid';
    // }else echo 'Integer is not valid';

    echo '<br> ---------<br>';

//ktra xem có phải địa chỉ IP không
    $ip = '127.0.0.1';
    if(filter_var($ip,FILTER_VALIDATE_IP)){
        echo "$ip is valid IP address";
    }else echo "$ip is not valid IP address";
    echo '<br> ---------<br>';

//ktra phải là email hay không
    $email = 'vinhnt62@wru.vn ';

    //xóa tất cả kí tự k hợp lệ ra khỏi $email 
    $email = filter_var($email,FILTER_SANITIZE_EMAIL);
    // echo $email .'<br>';
    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "$email is a valid email address";
    }else echo "$email is not a valid email address";
    echo '<br> ---------<br>';

//Sanitze and validate URL
    $url = 'https://vinhngo.com';

    $url = filter_var($url,FILTER_SANITIZE_URL);
    // echo $url .'<br>';
    if(!filter_var($url,FILTER_VALIDATE_URL === false)){
        echo "$url is valid URL";
    }else echo "$url is not valid URL";
    echo '<br> ---------<br>';

// 
?>
</body>
</html>