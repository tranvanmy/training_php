<?php 
    // date_default_timezone_set('Asia/Ho_Chi_Minh');
    // $timezone = DateTimeZone::listIdentifiers();
    // foreach($timezone as $time){
    //     echo $time . '<br/>';
    // }

?>

<?php 
    date_default_timezone_set('Asia/Ho_Chi_Minh');

    // echo date('d/m/y - H:i:s' );
?>

<?php 
    // $content = 'Bây giờ là ';
    // $content = addcslashes($content,'a..zA..Z');
    // echo $content;
    // echo date("$content H \g\i\ờ" );
?>

<!-- ------------- -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST">
        <input type="submit" name="submit" value="SaveTime">
    </form>
    <?php
        if(isset($_POST['submit'])){
            echo 'thời gian lưu: ' . date('d/m/y - H:i');
        }
    ?>
</body>
</html>

<!-- ------- -->

<?php 
    echo '<br/>----------<br/>';
    $dateint = mktime(0,0,0,2, (20+22),2020);
    echo date('y/m/d',$dateint);

    echo '<br/>----------<br/>';
    // ngày mai, 2 tháng sau , 5 năm sau
    $tomorrow = mktime(0,0,0, date('m'), date('d') + 1, date('Y')-2000);
    echo 'ngày mai :'. date('d M Y',$tomorrow);
    echo '<br/>----------<br/>';

?>

<?php
  //date in mm/dd/yyyy format; or it can be in other formats as well
  $birthDate = "12/17/1998";
  //explode the date to get month, day and year
  $birthDate = explode("/", $birthDate);
  //get age from date or birthdate
  $age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
    ? ((date("Y") - $birthDate[2]) - 1)
    : (date("Y") - $birthDate[2]));
  echo "Age is:" . $age;
?>



