<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=\, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href = "image/icon1.jpg"> 
    <title>Training ngày thứ 2 (chiều)</title>
</head>
<body>
    <?php //Câu lệnh if else
        $so_can_kiem_tra = 2904;
        $so_du = $so_can_kiem_tra % 4;
        if($so_du == 0){
            echo 'Số '.$so_can_kiem_tra.' Là Số Chẵn';
        }
    ?><br \>
    <?php
        $nam = 2020;
        $kiem_tra = ($nam % 4 == 0 && $nam % 100 != 0 || $nam % 400 == 0);
        if ($kiem_tra == true){
            echo 'Năm ' . $nam . ' là năm nhuận';
        }
    ?><br \>
    <?php
        $so_nam = 1997;
        $check = $so_nam % 2;
        if ($check == 0){
            echo 'Năm '. $so_nam.' là năm chẵn' ;
        }
        else{
            echo 'Năm '. $so_nam.' là năm lẻ';
        }
    ?><br \>
    <?php
        $mausac = 'Màu đỏ';
        if ($mausac == 'Màu xanh'){
            echo 'Đây là màu xanh';
        }
        elseif ($mausac == 'Màu đỏ'){
            echo 'Đây là màu đỏ';
        }
        elseif ($mausac == 'Màu đen'){
            echo 'Đây là màu đen';
        }
        else {
            echo 'Các màu khác';
        }
        ?><br \>
    <?php
        $so = 9998;
        if ($so % 2 == 0 )
        {
            if($so > 5555){
                echo ' Đây là số chẵn và lớn hơn 5555';
            }
            if($so < 5555){
                echo ' Đây là số lẻ và nhỏ hơn 5555';
            }
        }
        ?><br \>
    <?php
        $number = 4 ;
        switch($number)
        {
            case 0 :
                echo 'Số không';
            break;
            case 1 :
                echo 'Số một';
            break;
            case 2 :
                echo 'Số hai';
            break;
            case 3 :
                echo 'Số ba';
            break;
            case 4 :
                echo 'Số bốn';
            break;
            case 5 :
                echo 'Số năm';
            break;
            default :
                echo 'Không tìm thấy số nào';
            break;
        }
        ?> <br \>
        <?php
            $checkso = 20;
            if($checkso == 0){
                echo 'Đây là số không ^^';
            }
            elseif ($checkso == 1){
                echo 'Đây là số một ^^';
            }
            elseif ($checkso == 2){
                echo 'Đây là số 2 ))))';
            }
            elseif ($checkso == 3){
                echo 'Đây là số 3 bla bla';
            }
            else {
                echo 'Không tìm thấy số này';
            }
        ?> <br \>
        <?php
            $blalbla = 19;
            $bloblo = null;
                switch($blalbla)
                {
                    case 19 :
                        $bloblo = $blalbla % 2;
                        switch ($bloblo)
                        {
                            case 0:
                                echo 'Số chẵn';
                            break;
                            default :
                                echo 'Số lẻ';
                            break;
                        }
                    break;
                default :
                    break;    
                }
            ?><br \>
            <?php //bai7
                for ($i = 1; $i < 16; $i++)
                {
                    for ($j = 11; $j >= $i; $j--)
                    {
                        echo $j;
                    }
                echo '<br/>';;
                }
            ?>
</body>
</html>