<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        Username: <input type="text" name="username" value=""/><br/>
        Password: <input type="password" name="password" value=""/><br/>
        <input type="submit" name="form_click" value="send data" />
        <?php 
        //check click send data
            if(isset($_POST['form_click'])){
                echo '<br/> Username: '. $_POST['username']. '<br/>';
                echo 'Password: '.$_POST['password']. '<br/>';
            }
        ?>
    </form>
</body>
</html>