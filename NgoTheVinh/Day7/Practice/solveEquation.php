<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="text" name="a" value="" style="width: 20px" > x <sub>2</sub> + 
        <input type="text" name="b" value="" style="width: 20px" > x + 
        <input type="text" name="c" value="" style="width: 20px" > <br><br>
        <input type="submit" name="result" value="result">

    </form>
    <h1>
        <?php 
            if(isset($_POST['result'])){
                $a = isset($_POST['a']) ? (int)$_POST['a'] : 0;
                $b = isset($_POST['b']) ? (int)$_POST['b'] : 0;
                $c = isset($_POST['c']) ? (int)$_POST['c'] : 0;

                if($a == 0){
                    if($b ==0){
                        if($c ==0){
                            echo 'phương trình vô số nghiệm';
                        }else echo 'phương trình vô nghiệm';
                    }else{
                        if($c == 0){
                            echo 'phương trình vô nghiệm';
                        }else echo "phương trình có nghiệm x = " . $c/$b;
                    }
                }else {
                    $delta = $b*$b - 4*$a*$c;
                    if($delta >0){
                        $x1 = (-$b + sqrt($delta))/(2*$a);
                        $x2 = (-$b - sqrt($delta))/(2*$a);
                        echo 'phương trình có nghiệm: x1 = '.$x1 .'<br>' . 'x2 = '.$x2;
                    }elseif($delta == 0){
                        echo 'phương trình có nghiệm kép x1 = x2 = '.-$b / (2*$a);
                    }else echo 'phương trình vô nghiệm';
                }
            }
        ?>

    </h1>

</body>
</html>