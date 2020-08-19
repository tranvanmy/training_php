<?php 
    $a = false;
    //ktra ton tai
    if(isset($a)){
        echo 'yes <br/>';
    }else echo 'no <br/>';

    //ktra rỗng
    if(empty($a)){
        echo 'empty';
    }else echo 'a not empty';
    echo '<br/>';
    //ktra bool
    if(is_bool($a)){
        echo 'is bool'; 
    }else echo 'not ';
    echo '<br/>';
//////////
    $arr = array(1,2 ,3,4);
    if(in_array(1,$arr)){
        echo ' 1 nằm trong mảng';
    }else echo '1 không nằm trong mảng';

?>