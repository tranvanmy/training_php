<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "Shortcut icon" href = "image/icon1.jpg">
    <title>Training Thực Tập Ngày 4</title>
</head>
<body>
    <?php // Mo file
        $path = 'abai22.txt';
        $fp = @fopen($path, "r");
          
        // Kiểm tra file mở thành công không
        if (!$fp) {
            echo 'Mở file không thành công';
        }
        else{
            echo 'Mở file thành công';
            echo $path;
        }
        ?><br \>
    <?php //Doc file
        $fp = @fopen('abai22.txt', "r");
  
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
        ?><br \>
    <?php
        $fp = @fopen('abai22.txt', "r");
  
        // Kiểm tra file mở thành công không
        if (!$fp) {
            echo 'Mở file không thành công';
        }
        else
        {
            // Đọc file và trả về nội dung
            $data = fread($fp, filesize('abai22.txt'));
            echo $data;
        }
        ?><br \>
    <?php // Ghi file
        $fp = @fopen('abai22.txt', "w");
  
        // Kiểm tra file mở thành công không
        if (!$fp) {
            echo 'Mở file không thành công';
        }
        else
        {
            $data = 'Do Duc Anh Tuan';
            fwrite($fp, $data);
        }
        ?>
    <?php
        $fp = @fopen('abai22.txt', "w");
  
        // Kiểm tra file mở thành công không
        if (!$fp) {
            echo 'Mở file không thành công';
        }
        else
        {
            $data = 'Do Duc ANh Tuan';
            // Ghi file
            fwrite($fp, $data);
          
            // Đóng file
            fclose($fp);
        }
        ?>
</body>
</html>