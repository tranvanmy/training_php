
<?php
echo 'Dữ liệu chúng tôi  nhận được là'. '<br/>';
foreach($_POST as $key=>$val){
    echo'<strong>' . $key .'=>' .$val .'<strong>'.'<br/>';
}
?>