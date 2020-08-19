<?php
$link = new mysqli('localhost','root', '', 'sondemo');
$sql = "SELECT id,tensv,lop FROM SinhVien";
$result = $link->query($sql);
if($result->num_rows > 0){
    while($row = $result-> fetch_assoc()){
        echo "tensv: ". $row["tensv"]. "<br/>"."lop".$row['lop']."<br/>";}
    }
    else{
        echo"loi";
    }

$link->close();
?>