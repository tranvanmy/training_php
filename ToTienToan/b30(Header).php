<?php
    //chuyển hướng 
    //header('Location: hello.php',true,301);
    //header('Location: http://www.freetuts.net/', true, 301);

    //thay đổi kiểu trả về
    //Chẳng hạn như bạn muốn thay đổi kiểu font chữ hiển thị mà không cần dùng meta trong HTML
    header('Content-Type: text/html; charset=utf-8');

    //Định dạng trả về kiểu image png:
    header("Content-type: image/png");

    //Định dạng trả về kiểu json:
    header("Content-type: application/json");
?>