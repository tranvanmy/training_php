<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $flag = false;
        //duyệt qua từng số
        for($i = 1; $i <= 1000; $i++){
            if($i % 40 == 0){
                $flag = true;
            }
        }
        if($flag == true){
            echo 'có';
        }
        else{
            echo 'không';
        }
    ?>
</body>
</html>