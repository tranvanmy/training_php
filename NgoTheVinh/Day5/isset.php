<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Full Name: <input type="text" name="fullname" value=""/>
        Age :    <input type="text" name="age" value=""/>
                <input type="submit" name="submit" value="click"/>   
    </form>

    <h1>
        <?php 
            if(isset($_POST['submit'])){
               $fullname = isset($_POST['fullname'])? $_POST['fullname']: 'ntv' ;
               $age      = isset($_POST['age']) ? $_POST['age'] : '1';
               $year     = isset($_POST['year']) ? $_POST['year']: 2020 ;


               echo $fullname. '<br/>'. $age.'<br/>'. $year;
            }
            
        ?>
    </h1>
</body>
</html>