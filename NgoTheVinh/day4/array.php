<?php
    // $array = array(
    //     'chu_thuong' => 'Hello'
    // );
      
    // $array = array_change_key_case($array, CASE_UPPER); // chuyển key thành chữ hoa
    // // $array = array_change_key_case($array, CASE_LOWER);
      
    // var_dump($array);
    
    //----------trộn mảng

    $arr1 = array('one', 'two', 'three');
    $arr2 = array(1,2,3);
    $arr3 = array_combine($arr1, $arr2);
    foreach($arr3 as $key => $values){
        echo "$key : $values <br/>";
    }

    //--------count values
    $arrCount = array(1,2,3,3,3,4,2);
    $arrCout1 = array_count_values($arrCount);
    foreach($arrCout1 as $key => $values){
        echo "$key xuat hien : $values lan <br/>";
    }
    

    //----------
    $stack = array('one', 'two', 'three');
    array_push($stack, 'five', 'six');
    print_r($stack);
    echo '<br/> -----------<br/>';

    //-------- 
    $input = array(12, 10, 9);
  
    // Giãn thành 5 phần tử ở cuối mảng và
    // các phần tử giãn có giá trị là 5:
    $result = array_pad($input, 5, 0);
    // Kết quả là  array(12, 10, 9, 0, 0)
    
    // Giản thành 7 phần tử ở đầu mảng
    //  và các phần tử giãn có giá trị -1
    $result = array_pad($input, -7, -1);
    // Kết quả là array(-1, -1, -1, -1, 12, 10, 9)
    
    // Giãn thành 2 phần tử nhưng mảng $input
    // lại có 3 phần tử nên sẽ không được xử lý
    $result = array_pad($input, 2, "noop");
    // Kết quả giữ nguyên array(12, 10, 9)

    echo '<br/> -----------<br/>';

    //
    $stack = array("orange", "banana", "apple", "raspberry");
    $fruit = array_shift($stack);// xóa ptu đầu tiền và trả về
    print_r($stack);
    echo '<br/> -----------<br/>';

    //////--------
    $queue = array(2,3,4,5);
    array_unshift($queue,0,1);// add 0 và 1 vao đầu mảng
    foreach($queue as  $values){
        echo  "$values  ";
    }
    echo '<br/> -----------<br/>';


    ///-----------
    if(in_array(1,$queue)){ // ktra 1 có trng mang k
        echo ' 1 có trong mảng';
    }else echo '1 không có trong mảng queue';
    echo '<br/> -----------<br/>';

    //-------ktra xem key có trong mảng k 

    // $searcharray = array(
    //     'username' => 'thehalfheart',
    //     'email' => 'thehalfheart@gmail.com',
    //     'website' => 'freetuts.net'
    // );
      
    // // Trả về true
    // var_dump(array_key_exists('username', $searcharray));
      
    // // Trả về false
    // var_dump(array_key_exists('otherkey', $searcharray));

    //-- loại bỏ giá trị trùng trong mảng 
    $array1 = array('freetuts.net', 'freetuts.net');
    $result = array_unique($array1);
    
    foreach($result as $a){
        echo $a.' ';
    }

?>