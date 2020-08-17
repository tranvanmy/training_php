<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        // $_GET = array(
        //     'id' => '12',
        //     'title' => 'method_get'
        // );

        // foreach($_GET as $key => $val){
        //     echo '<strong>' .$key. ' => ' .$val.'</strong><br/>';
        // }

        if(isset($_GET['id']) && isset($_GET['title'])){
            $id = $_GET['id'];
            $title = $_GET['title'];
            echo '<strong>'.$id.'<br>';
            echo '<strong>'.$title.'<br>';
        }
    ?>
</body>
</html>