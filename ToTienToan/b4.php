<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $a = 100;
        $b = 200;
        $tong = $a + $b;
        $check = ($a < $b) && ($tong < 200);
        if($check == true){
            print("true<br>");
        }else{
            print("false<br>");
        }
        var_dump(is_int($check));
        //
        $kt = (7>5&&!(-5>1)||10==10);
        print("<br>");
        var_dump(is_bool($kt));
    ?>
</body>
</html>