<?php
    //validate kiểm tra xem có đáp ứng đầy đủ yêu cầu hay k
    //filter lọc dữ liệu dựa vào yêu cầu nào đos
    // $x = false; 
    // //FILTER_VALIDATE_BOOLEAN = 1,true,on trả về true
    // filter_var($x,FILTER_VALIDATE_BOOLEAN);
    // if(!filter_var($x,FILTER_VALIDATE_BOOLEAN)){
    //     echo "$x - không phải boolean";
    // }else{
    //     echo "$x - là kiểu boolean";
    // }

    // $value = 23;
    // $int_options = array("options"=>array("min_range"=>1,"max_range"=>10)); 
    // if(!filter_var($value,FILTER_VALIDATE_INT,$int_options)){
    //     echo "$value - không phải int";
    // }else{
    //     echo "$value - là kiểu int";
    // }

    // $value = '192.168.1.1'; 
    // if(!filter_var($value,FILTER_VALIDATE_IP)){
    //     echo "$value - không phải dia chi ip";
    // }else{
    //     echo "$value - là kiểu dia chi ip";
    // }

    // $value = 'https://www..com/watch?v=DadDp6N2zRY&list=PLv6GftO355AsZFXlWLKob6tMsWZa4VCY1&index=97'; 
    // if(!filter_var($value,FILTER_VALIDATE_URL)){
    //     echo "$value - không phải là đường link";
    // }else{
    //     echo "$value - là kiểu là đường link";
    // }

    // $value = 'To Tien Toan';
    // function convertString($string){
    //     $string = str_replace(" ","_",$string);
    //     return $string;
    // }
    // echo filter_var($value,FILTER_CALLBACK,array('options'=>'convertString'));

    // $value = 4;
    // function kiem_tra_chan_le($so){
    //     $flag = false;
    //     if($so % 2 == 0){
    //         $flag = true;
    //     }
    //     return $flag;
    // }
    // if(!filter_var($value,FILTER_CALLBACK,array('options'=>'kiem_tra_chan_le'))){
    //     echo "$value - la so le";
    // }else{
    //     echo "$value - la so chan";
    // }

    //sử dụng RE
    // $value = '0969164537';
    // $options = array('options'=>array('regexp'=>'#^[0-9]{10}$#'));
    // if(!filter_var($value,FILTER_VALIDATE_REGEXP,$options)){
    //     echo $value.' khong phai la so phone';
    // }else{
    //     echo $value.' là số phone';
    // }

    // $value = 'toan.lng';
    // //jpg|png|gif
    // $options = array('options'=>array('regexp'=>'#\.(jpg|png|gif)$#'));
    // if(!filter_var($value,FILTER_VALIDATE_REGEXP,$options)){
    //     echo $value.' khong phai la dinh dang dung';
    // }else{
    //     echo $value.' la dinh dang dung';
    // }

    //đầu vào là đối tượng mỗi đối tượng một định dang
    // $data = array(
    //     'name' => 'to tien toan',
    //     'age' => 163,
    //     'email' => 'toan@gmail.com'
    // );
    // $filter = array(
    //     'name' => array(
    //         'filter' => FILTER_CALLBACK,
    //         'options' => 'ucwords'
    //     ),
    //     'age'=> array(
    //         'filter' => FILTER_VALIDATE_REGEXP,
    //         'options' => array('regexp'=>'#^[1-9]{3}$#')
    //     ),
    //     'email' => array(
    //         'filter' => FILTER_VALIDATE_EMAIL
    //     )
    // );
    // $result = filter_var_array($data,$filter);
    // echo '<pre>';
    // print_r($result);
    // echo '<pre>';

    //filter input
    //print_r($_POST);
    // if(!filter_input(INPUT_POSt,'email',FILTER_VALIDATE_EMAIL)){
    //     echo 'email không hợp lệ';
    // }else{
    //     echo 'email hợp lệ';
    // }

    //filter_input_array
    $filter = array(
        'email' => array(
            'filter' => FILTER_VALIDATE_EMAIL
        ),
        'ten' => array(
            'filter' => FILTER_VALIDATE_REGEXP,
            'options' => array('regexp' => '#[a-zA-Z]$#')
        ),
        'age' => array(
            'filter' => FILTER_VALIDATE_INT
        )
    );
    $result = filter_input_array(INPUT_POST,$filter);
    echo '<pre>';
    print_r($result);
    echo '<pre>';
?>