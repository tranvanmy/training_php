<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="get"action="form_get.php">
<label> Đăng nhập
</label><br/>
<input type="text" name="year" value=""/>
<input type="submit" name="btn" value="Tìm tuổi"/>


</form>
<?php
if(!empty($_GET['btn'])){
    $year = isset($_GET['year']) ?  (int)$_GET['year'] : 0;
    $current_year =date('Y');
    if($year<=0){
        echo "nam sinh bạn nhập không hợp lệ";
    }
    else if($year > $current_year){
        echo"năm sinh bạn nhập lớn năm hiện tại";
    }
    else{
        echo'số tuổi của bạn là: '.($current_year-$year);
    }
}



?>
    
</body>
</html>