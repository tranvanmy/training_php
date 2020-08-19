<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "Shortcut icon" href = "image/icon1.jpg">
    <title>Training Thực Tập Ngày 4</title>
</head>
<body>
    <?php //array_change_key_case($array, $case) (chưa làm được)
        $array = array(
            'chu_thuong' = 'Hello'
        );
        
        $array = array_change_key_case($array, CASE_UPPER);
        
        var_dump($array);
        ?>
    <?php //  array_combine($array_keys, $array_values)
        $array_keys = array('a', 'b', 'c');
        $array_values = array('one', 'two', 'three');
        print_r(array_combine($array_keys, $array_values));
        ?>
    <?php //array_count_values ( $array )
        $array = array(1, "hello", 1, "world", "hello");
        print_r(array_count_values($array));
        ?>
    <?php // array_push(&$array, $add_value1, $add_value2, $add_value…)
        $stack = array("orange", "banana");
        array_push($stack, "apple", "raspberry");
        print_r($stack);
        ?>
    <?php // array_pop(&$array)
        $stack = array("orange", "banana", "apple", "raspberry");
        $fruit = array_pop($stack);
        print_r($stack);
        ?>
    <?php // array_pad($array, $size, $value) ( không hiểu rõ)
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
        ?>
    <?php // array_shift(&$array)
        $stack = array("orange", "banana", "apple", "raspberry");
        $fruit = array_shift($stack);
        print_r($stack);
    ?>
    <?php  // array_unshift(&$array, $value1, $value2, …) 
        $queue = array("orange", "banana");
        array_unshift($queue, "apple", "raspberry");
        print_r($queue);
        ?>
    <?php // is_array($variable)
        $bien1 = array();
        $bien2 = '';
        ?>
    <?php //array_key_exists($key, $searcharray) 
        $searcharray = array(
            'username' => 'thehalfheart',
            'email' => 'thehalfheart@gmail.com',
            'website' => 'freetuts.net'
        );
          
        // Trả về true
        var_dump(array_key_exists('username', $searcharray));
          
        // Trả về false
        var_dump(array_key_exists('otherkey', $searcharray));
        
        ?>
</body>
</html>