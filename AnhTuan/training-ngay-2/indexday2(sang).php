<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href = "image/icon1.jpg"> 
    <title>Training ngày thứ 2</title>
</head>
<body>
    <?php
        $a = '2904' ;//Gán giá trị cho biến a;
        $b = '1998';
        $c = $a + $b;
        ?> <br \>
    <?php 
        echo "<p> Giá trị của biến b là : $b </p>";
        echo "<p> Giá trị của biến a là : $a </p>"; // Hiển thị giá trị của biến a
        echo "<p> Kết quả giá trị a + b = $c </p>";
        var_dump(is_int ($c)); //Kiểm tra biến c có phải kiểu int hay không
        var_dump(is_int ($b)); //Kiểm tra biến b
        var_dump(is_int ($a)); //Kiểm tra biến a    
        ?> <br \>
    <?php //Kiểm tra + ép kiểu dữ liệu int
        $k = '555hhh' ; 
        $k = (int)$k;
        $L = 'hhh555' ;
        $L = (int)$L;
        echo "<p> Giá trị L sau khi ép kiểu dữ liệu int : $L </p> ";
        echo "<p> Giá trị K sau khi ép kiểu dữ liệu int : $k </p> "; 
        ?>  <br \>
    <?php //Kiểu bool
        $a1 = '0';
        $a2 = '122ab';
        $a3 = 'null';
        $a4 = 'anhtuan';
        var_dump($a1);
        var_dump($a2);
        var_dump($a3);
        var_dump($a4);
        ?> <br  \>
    <?php //Kiểu số thực
        $b1 = '93.555444';
        echo "<p> Giá trị của số thực là $b1 </p>";
        $b1= (float)$b1;
        var_dump(is_float($b1));
        ?>   <br \>
    <?php //Kiểu chuỗi
        $c1 = ' 1 2 3 ';
        $c1 = (string)$c1;
        echo "<p> Giá trị của chuỗi c1 là : $c1</p>";
        var_dump(is_string($c1));
        ?><br \>
    <?php //Kiểu mảng ARRAY
        $sinhvien = array ('Đỗ Đức Anh','Đỗ Đức Anh Tuấn');
        print_r ($sinhvien);
        ?><br \>
    <?php
        $d = array();
        $d[0][1] = 11;
        $d[0][2] = 22;
        $d[0][3] = 33;
        $d[0][4] = 44;
        $d[1][1] = 12;
        $d[1][2] = 23;
        $d[1][3] = 34;
        $d[1][4] = 45;
        echo $d[0][1]; // in ra giá trị 123
        echo $d[0][2];
        echo $d[0][3];
        echo $d[0][4];
        echo $d[1][1]; // in ra giá trị 321
        ?><br \>
    <?php //Toán tử và biểu thức
        $ketqua = $a * $b;
        echo "<p> Kết quả biểu thức nhân : $ketqua </p>";
        ?><br \>
    <?php 
        $d2 = 3000;
        $d3 = 1000;
        $tong = $d2 + $d3;
        echo $check = ($d2 < $d3) && ($tong >3000) ;
        ?>
</body>
</html>