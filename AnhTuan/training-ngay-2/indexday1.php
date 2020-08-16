<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="image/icon1.jpg" />
    <title>Training ngày 13/08</title>
</head>
<body>
    <div>
            <?php 
                echo "Training PHP ngày đầu tiên " 
            ?>

            <?php 
                echo "Em chào anh, code hơi ngu anh thông cảm :((( " ; // In ra màn hình 
            ?> 

            <?php
                $HoTen = 'Đỗ Đức Anh Tuấn '; //Ten
                $Tuoi = '22 '; //Tuoi
                $NoiSinh = 'Lâm Thao Phú Thọ'; //Noi sinh
                $CongViec = 'Intern tại VMODEV'; //Cong viec
            ?>
            
            <?php
                echo "<p>Họ tên của em là : $HoTen</p>"; //In ho ten ra man hinh
                echo "<p>Tuổi : $Tuoi</p>";//In tuổi ra màn hình 
                echo "<p>Nơi sinh : $NoiSinh</p>";
                echo "<p>Công việc hiện tại : $CongViec </p> ";
            ?>
            <?php define('SDT','0354456655');
                echo SDT;
            ?>  
    </div>
</body>
</html>