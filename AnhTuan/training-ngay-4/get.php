<?php
    echo 'Dữ liệu hiển thị <br/>';
    foreach ($_GET as $key => $val)
    {
        echo '<strong>' . $key . ' => ' . $val . '</strong><br/>';
    }
    ?>