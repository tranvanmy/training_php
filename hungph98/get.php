<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Xử lý form</title>
    <link rel="stylesheet" href="">
</head>
<body>
    <!-- <form method="get" action="get.php">
        <input type="text" name="q" value=""/>
        <input type="submit" name="btn" value="Search"/>
    </form>
    <?php
    var_dump($_GET);
    ?> -->
    <form method="get" accept-charset="utf-8" action="get.php">
        <input type="text" name="year" value="">
        <input type="submit" name="btn" value="Tìm Tuổi">
    </form>
    <?php
    if(!empty($_GET['btn']))
    {
        $year = isset($_GET['year']) ? (int)$_GET['year'] : 0;
        $current_year = date('Y');
        if($year <= 0)
        {
            echo 'Năm sinh không hợp lệ';
        }
        if($year > $current_year)
        {
            echo 'Đầu vào không hợp lệ , mời nhập năm sinh nhỏ hơn năm hiện tại ';
        }
        else{
            echo 'Số tuổi hiện tạo của bạn là '. ($current_year - $year);
        }
    }
    ?>
</body>
</html>