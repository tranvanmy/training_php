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
                if(empty($_POST['fullname'])){
                    echo 'mời bạn nhâp fullname <br/>';
                }else echo $_POST['fullname'].'<br/>';
                if(empty($_POST['age'])){
                    echo 'bạn chưa nhập tuổi';
                }else echo 'tuổi : '.$_POST['age'];
            }
            
        ?>
    </h1>
</body>
</html>