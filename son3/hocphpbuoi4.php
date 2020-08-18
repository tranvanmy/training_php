<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<!-- Phuong thức GET -->
<div class="container">
    <form action="get.php" method="GET" role="form">
        <legend>Phuong thức GET</legend>

        <div class="form-group">
            <label for="">Tên</label>
            <input type="text" class="form-control" id="" placeholder="Nhập vào tên" name="name">
        </div>

        <div class="form-group">
            <label for="">Tuổi</label>
            <input type="number" class="form-control" id="" placeholder="Nhập vào tuổi" name="age">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>



<!-- Phuong thức POST -->
<div class="container">
    <form action="post.php" method="POST" role="form">
        <legend>Get file</legend>

        <div class="form-group">
            <label for="">Tên</label>
            <input type="text" class="form-control" id="" placeholder="Nhập vào tên" name="name">
        </div>

        <div class="form-group">
            <label for="">Tuổi</label>
            <input type="number" class="form-control" id="" placeholder="Nhập vào tuổi" name="age">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
    
<div>
    <?php
    $str = "đang ăn tối";
    echo "Nam nói\"Cậu ấy $str\" ";
  
    ?>
    </div>




    <!-- các hàm xử lý chuỗi -->
<div>
    <?php
$str = 'freetuts.net is a website free for you';
  

var_dump(explode(' ', $str));
echo '<br/>';
echo implode(' ', array(
    'freetuts',
    'xin',
    'chào',
    'các',
    'bạn'
));
echo strlen('freetut.net');
echo '<br/>';

  ?>
</div>


<!-- Các hàm xử lý mảng -->
<div>
<?php
$array = array(
    'chu_thuong' => 'Hello'
);
$array = array_change_key_case($array, CASE_UPPER);
var_dump($array);
echo '<br/>';
?>
</div>

<?php
$array = array(
    'username' => 'thehalfheart',
    'password' => 'somepasss'
);
  
var_dump(array_values($array));


echo  '<br/>';
?>

<?php
$array = array(1,"hello",1,"hi",2);
print_r( array_count_values($array));


?>

<!-- ham xu ly file -->
<div>
    <?php
     
$path = 'demo.txt';
$fp = @fopen($path, "r");
  

if (!$fp) {
    echo 'Mở file không thành công';
}
else{
    echo 'Mở file thành công';
}


$fp = @fopen('demo.txt', "r");
  
// Kiểm tra file mở thành công không
if (!$fp) {
    echo 'Mở file không thành công';
}
else
{
    // Lặp qua từng ký tự để đọc
    while(!feof($fp))
    {
        echo fgetc($fp);
    }
}
?>

</div>




<!-- ghi file -->
<div>
    <?php
    $fp=@fopen('demo.txt',"w");
    if (!$fp){
        echo 'mo kogn thanh cong';

    }
    else{
        $data = 'son';
        fwrite($fp,$data);
    }
    ?>
</div>


</body>
</html>