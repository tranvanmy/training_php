<?php 
// ----- ĐỌC dòng------------
    // $path = 'demo.txt';
    // $fp = @fopen($path,'r');
    // $data = '';
    // if($fp){
    //     // echo 'mở file thành công';
    //     while(!feof($fp)){
    //         $data .= fgets($fp).' ';
            
            
    //     }
    //     echo $data;
    //     echo '<br/>------------ <br/>';
    //     $arr = explode(' ', $data);
    //     foreach($arr as $a){
    //             echo $a. ', ';
    //     }

    // }else echo 'mở file không thành công';



    //-------------------------------------------------------------------------- đọc hết 
    $path = 'demo.txt';
    $fp = @fopen($path,'r');
    if($fp){
        // echo 'mở file thành công';
       $data = fread($fp, filesize('demo.txt'));
       echo $data. '<br/>';
       $arr = explode(' ', $data);
       foreach($arr as $a){
           echo $a. ', ';
       }
    //    fclose($fp);

    }else echo 'mở file không thành công';

    //-------------
    // $fp1 = @fopen($path,'a+');
    // if(!$fp1){
    //     echo 'mở file không thành công';
    // }else {
    //     $content = ' append conntent';
    //     fwrite($fp1, $content);
    //     fclose($fp1);
    // }

    echo '<br/>------------ <br/>';

    if(file_exists($path)){
        echo 'file có tồn tại <br/>';
        $content = file_get_contents($path);
        $arrCont = explode(' ', $content);
        foreach($arrCont as $a){
            echo $a.', ';
        }

    }
    echo '<br/>------------ <br/>';

    // file_put_contents($path, ' append content');
    // echo file_get_contents($path);


    if(is_dir('a')){
        echo 'folder tồn tai';
        mkdir('a/c');
    }else echo 'folder không tồn tai';
    
    
?>