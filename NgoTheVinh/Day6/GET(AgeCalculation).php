<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Tính Tuổi</h1>
    <form method="get">
        Nhập năm sinh: <input type="Date" name="yearOB" value="">
        <input type="submit" name="calculator" name="Count">

    </form>
    <h1>
        <?php 
            
            date_default_timezone_set('Asia/Ho_Chi_Minh');

            if(isset($_GET['calculator'])){
                
                if(!empty($_GET['yearOB'])){
                    echo $_GET['yearOB'].'<br>';
                    $yeararr = explode('-', $_GET['yearOB']);
                    foreach($yeararr as $a){
                        echo "$a ";
                    }
                    $YearOB = $yeararr[0];
                    echo '<br>';
                    $current_year = date('Y') ;

                    
                    if($YearOB > $current_year){
                        echo 'nhập sai ngày sinh';
                    }else echo 'Age: '. ($current_year - $YearOB);
                    
                   
                }else echo 'mời bạn chọn ngày sinh' ;
                

            }
        ?>
    </h1>
</body>
</html>