<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    

    $authors = array(
        array(
            'name' => 'Nguyễn Văn Cường',
            'blog' => 'freetuts.net',
            'position' => 'admin'
        ),
        array(
            'name' => 'Trương Phúc Hoài Minh',
            'blog' => 'freetuts.net',
            'position' => 'author'
        ),
        array(
            'name' => 'Hoàng Văn Tuyền',
            'blog' => 'freetuts.net',
            'position' => 'author'
        ),
        array(
            'name' => 'Nguyễn Tình',
            'blog' => 'freetuts.net',
            'position' => 'author'
        )
    );
    echo '<ul>';
    foreach($authors as $author){
        echo '<li>';
        foreach($author as $key => $values){
            
            echo "$key : $values" .'<br>';
           
        }
        echo '</li>';
    }
    echo '</ul>';
?>
</body>
</html>