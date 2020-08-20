<!DOCTYPE html>

<?php 
    setcookie('username','vinhnt6211112', time() + 1000);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>

        <?php 
            // setcookie('username','', time() -2000);
            if(isset($_COOKIE['username'])){
                echo $_COOKIE['username'];
            }else echo 'noname';
        ?>
    </h1>
</body>
</html>