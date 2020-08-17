<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <!-- <?php 
        $student = array(
            "Ngô Thế Vinh",
            "Nguyễn Văn A",
            "Nguyễn Văn B"
        );
        // foreach($student as $HS){
        //     echo "$HS <br>";
        // }
        for($i = 0; $i<sizeof($student); $i++){
            echo $student[$i]. "<br>";
        }

    ?> -->

    <!-- <?php 
        $i = 10;
        while($i > 5){
            echo "hoc sinh thu ". $i ."<br>";
            $i--; 
        }
    ?> -->
    <!-- <?php 
        $i = 0;
        $j = 10;
        while($i< 10 && $j>5){
            echo $i. " + " . $j . "<br>";
            $i++;
            $j -= 2;
            
        }
    ?> -->
    <!-- <?php 
        $i = 1;
        do{
            echo "student ". $i. "<br>";
            $i++;
        }while($i < 3);
            
        
    ?> -->

    <!-- <?php 
        $i = 1;
        while($i < 10){
            $j = $i;
            while($j < 10){
                echo $j;
                $j++;
            }
            echo '<br>';
            $i++;
        }
    ?> -->

    <!-- <?php 
        $years = array(
            1990,
            1991,
            1992,
            1993
        );
        foreach($years as $key => $values){
            echo $key. " => ". $values. '<br>';
        }
    ?> -->

    <!-- <?php 
        for($i =1; $i< 10; $i++){
            if($i == 5 || $i >8){
                continue;
            }
            echo "student $i <br>";
        }
    ?> -->

    <!-- <?php 
        function checkEvenNumber($a){
            if($a % 2 == 0){
                return true;
            }else return false;
        }
        for ($i = 0; $i< 10; $i++){
            if(checkEvenNumber($i)){
                echo $i. " là số chẵn <br>";
            
            }else echo $i. " là số lẻ <br>" ;
        }
    ?> -->

    <!-- <?php 
        function checkSoNT($a){
            $check = true;
            for($i = 2; $i< $a/2 +1; $i++){
                if($a% $i == 0 ){
                    $check = false;
                }
            }
            return $check;
        }
        for($i =2; $i< 10; $i++){
            if(checkSoNT($i)){
                echo "$i là số nguyên tố <br>";
            }else echo "$i không là số nguyên tố <br>";
        }
    ?> -->

    <!-- <?php 
        // Biến toàn cục
        $bien_toan_cuc = 12;
    
        function kiem_tra()
        {
            // Biến cục bộ
            $bien_cuc_bo = 13;
        
            // Lấy biến toàn cục
            global $bien_toan_cuc;
        
            // Lấy số dư biến cục bộ chia cho biến toàn cục và
            // kiểm trả về true nếu số dư = 0, ngược lại trả về false
            if ($bien_cuc_bo % $bien_toan_cuc){
                echo "ok";
            
            
            }
            else{
                echo "not ok";
                
            }
           
        }
    kiem_tra();

    ?> -->

    <!-- <?php 
        function check(){
            static $a = 0;
            $a ++;
            echo $a. "<br>";
        }  
        check();
        check();

    ?>   -->

    <!-- đệ quy tuyến tính: trong hàm đệ quy chỉ gọi 1 lần đến chính nó -->
    <!-- <?php 
        function calculator($a){
            if($a == 1) return $a;
            return $a * calculator($a - 1);
        }
        echo calculator(4);
    ?> -->

    <!-- đệ quy nhị phân: trong hàm gọi đến chính nó 2 lần  -->
    <!-- <?php 
        // / Hàm tính giá trị của phần tử thứ $n của dãy Fibonacci
        function fiBo($a){
            if($a <= 2){
                return 1;
            }else{
                return fiBo($a -2) + fiBo($a -1);
            }
        }
        echo fiBo(10);
    ?> -->

    <!-- Đệ quy phi tuyến: Là loại đệ quy mà trong hàm có dùng vòng lặp để gọi lại chính nó. -->
    <!-- <?php 
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
          
        echo pheptinh(6);
    ?> -->

    <!--TT sắp xếp nổi bọt -->
    <?php 
        $arr = array(1,6,4,10,7,20,16);
        function SortNum($arrN){
            for($i = 0; $i< sizeof($arrN)-1; $i++){
                for($j = $i+1; $j< sizeof($arrN); $j++){
                    if($arrN[$i] > $arrN[$j]){
                        $tmp = $arrN[$i];
                        $arrN[$i] = $arrN[$j];
                        $arrN[$j] = $tmp;
                    }
                }
            }
            return $arrN;
        
        }
        $arr = SortNum($arr);
        foreach($arr as $arrNum){
            echo $arrNum. " ";
        }
    ?>

</body>
</html>