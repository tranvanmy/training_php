<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        //
        // function tinhtong($a){
        //     if($a == 1){
        //         return $a;
        //     }
        //     return $a + tinhtong($a-1);
        // }
        // echo tinhtong(5);

        //
        // function Fibo($n){
        //     if($n <= 2){
        //         return 1;
        //     }
        //     else{
        //         return (Fibo($n - 2) + Fibo($n - 1));
        //     }
        // }
        // echo Fibo(100);

        function pheptinh($n)
        {
            // Neeus $n < 6 thì trả về chính nó
            if ($n < 6){
                return $n;
            }
            else{
                // Ngược lại tính tổng từ 1 tới $n - 1, và mỗi phần tử lại gọi làm hàm chính nó
                $tong = 0;
                for ($i = 1; $i < $n; $i++){
                    $tong += pheptinh($n - $i);
                }
                return $tong;
            }
        }
          
        echo pheptinh(8);
    ?>
</body>
</html>