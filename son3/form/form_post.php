<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ứng dụng đăng nhập</h1>
    <form method="post" action="form_post.php">
       Username: <input type="text" name="username" value=""/><br/>
       Password : <input type="post" name="password" value=""/><br/>
       <input type="submit" name="btn " value="Đăng nhập"/>
    </form> 
    <?php
    if($_POST['btn']){
        $username =isset($_POST['username']) ? $_POST['username']:'';
        $password =isset($_POST['password']) ? $_POST['password']:'';
if( !$password || !$username ){
echo'bạn chuaw nhập đầy đủ thông tn';
}
// else if
//     ($password !='hoangson' || $username !='son'){
//         echo'thông tin đăng nhập không đúng';
//     }
//     else{
//         echo'đăng nhập thành công';
//     }


}
    
    ?>     
</body>
</html>