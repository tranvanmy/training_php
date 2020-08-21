<!DOCTYPE html>
<html>
    <head>
        <title>Freetuts.net - xử lý form với GET</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form method="get" action="GET.php">
            <input type="text" name="tuoi" value=""/>
            <input type="submit" name="btn" value="Search"/>
        </form>
        <?php 
            if(!empty($_GET['btn'])){
                $year = isset($_GET['tuoi']) ? (int)$_GET['tuoi']:0;
                $current_year = date('Y');
                if($year < 0){
                    echo 'năm sinh khong hợp lệ';
                }elseif($year > $current_year){
                    echo "năm sinh lớn hơn năm hiện tại";
                }
                else{
                    echo "so tuoi của bạn là : ".($current_year-$year);
                }
            }
        ?>
    </body>
</html>