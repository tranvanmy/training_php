<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "Shortcut icon" href = "image/icon1.jpg">
    <title>Training Thực Tập Ngày 3</title>
</head>
<body>
    <?php
        $number = 13;
        
        if (check_event_number($number)){
            echo 'Even Number';
        }
        else{
            echo 'Odd';
        }
        
        function check_event_number($number)
        {
            if ($number % 2 == 0)
                return true;
            else return false;
        }
        ?><br \>
        <?php
            $a = 1;
            
            function increased_by_1(&$a)
            {
                $a = $a + 1;
                return $a; 
            }
            
            echo increased_by_1($a);
            
            echo $a;
            ?>
</body>
</html>