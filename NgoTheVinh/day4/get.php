<?php 
    // echo 'Dữ Liệu Chúng Tôi Nhận Được Là <br/>';
    // foreach($_GET as $key => $values){
    //     echo '<strong>'.$key. ' => ' .$values. '<strong/><br/>';
    // }
    if(isset($_GET['id1'])){
        $id = $_GET['id1'];
        echo 'id1 => '.$_GET['id1'];
    }else echo 'not data id1';
    
?>
