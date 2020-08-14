<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $is_admin = false;
    if($is_admin == true){
        echo "true";
    }else{
        echo "false";
    }
    ?>

    <!-- mang -->
    <!-- <?php 
        $sinhvien = array('ngo the vinh', 'nguyen van a');
        print_r($sinhvien) ;
        echo "<p> ten sinh vien : $sinhvien[0]</p>";
    ?> -->

    <!-- <?php 
        $sinhvien1 = array(
            'sinhvien1' => 'Ngo The Vinh',
            'sinhvien2' => "Nguyen Van A"
    
        );
        print_r($sinhvien1);
    ?> -->

    <?php 
        $mang = array();
        $mang[0][0] = 1;
        $mang[0][1] = 2;
        $mang[1][0] = 3;
        $mang[1][1] = 3;

 
        echo  $mang[0][1] + $mang[0][0]  ;
       

    ?>    

    <!-- <?php 
        $a =1 ;
        $b =2 ;
        $a = $b= 3;
        echo "<p>$b</p>" ;

        $ketqua = ($a*2)/($b+1);
        echo "<p>$ketqua</p>" ;
        
    ?> -->
    
    <!-- <?php 
        $so = 12;
        $t = ($so > 16);
        var_dump(is_bool($t));
        // echo (int)$t;
    ?> -->

    <!-- <?php 
        $a = 100;
        $b = 100;
        $tong = $a + $b;
        $check = ($a == $b) &&  ($tong > 300);
        if($check == true){
            echo 'ket qua dung';
        }else echo 'ket qua sai';
    ?><br /> -->

    <?php
        $mangso = array(1,2,3,4,5);
        // echo sizeof($mangso);
        // foreach($mangso as $mang1){
        //     if($mang1 % 2 ==0){
        //         echo "$mang1: la so chan <br>";
        //     }else echo "$mang1: la so le <br>"; 
        // }
        for ($i = 0; $i< sizeof($mangso); $i++){
                 if($mangso[$i] % 2 ==0){
                    echo "$mangso[$i]: la so chan <br>";
                }else echo "$mangso[$i]: la so le <br>"; 
        }
    ?>  
    
    <!-- <?php
 
        $web = array(
            'PHP', 'ASP.NET', 'Ruby on Rail', 'CSS', 'HTML', 'Java'
        );
        
        foreach( $web as $lang ) {
            echo "$lang <br>";
        }
    ?> -->

    <?php 
        $number = 10;
        $du = null;
        switch($number){
            case 10:
                $du = $number % 2;
                switch($du){
                    case 1:
                        echo "$number là số lẻ <br> ";
                        break;
                    default:
                    echo "$number là số chẵn <br>";
                    
                }
                break;
            default:
                echo "số 12.. <br>";
                break;
        }
    ?>

    <?php 
        $mang1 = array(1,2,3,22,41,4); 
        $mang2 = array(2,4,22,5,8);
        foreach($mang1 as $ArrFirst){
            foreach($mang2 as $ArrSe){
                if($ArrFirst == $ArrSe)
                    echo "$ArrFirst nằm trong cả 2 mảng <br>";
                
            }
        }
    ?>

</body>
</html>