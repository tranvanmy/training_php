<!DOCTYPE html>
<html>
    <head>
        <title>Freetuts.net - Form liên hệ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        // Code PHP xử lý validate
        $error = array();
        $data = array();
        if (!empty($_POST['contact_action']))
        {
            // Lấy dữ liệu
           $data['fullname'] = isset($_POST['fullname']) ? $_POST['fullname']: '';
           $data['email']    = isset($_POST['email']) ? $_POST['email'] : '';
           $data['content']  = isset($_POST['content']) ? $_POST['content'] : '';
           $data['email'] = filter_var($data['email'],FILTER_SANITIZE_EMAIL);
        //    echo $data['email'];
            // echo $data['content']. '<br>';
           if(empty($data['fullname'])){
               $error['fullname'] = 'Tên không được để trống';
           }
           if(empty($data['email'])){

                $error['email'] = 'email không được để trống';

           }elseif(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){

                $error['email'] = 'Định dạng email không đúng';
           }
           if(empty($data['content'])){
               $error['content'] = 'bạn chưa nhập nội dung';
           }
           if(empty($error)){
               echo 'dữ liệu có thể lưu';
           }else echo 'dữ liệu không thể lưu';
            
            
        }
        ?>
        <h1>freetuts.net - contact form</h1>
        <form method="post" action="validateForm.php">
            <table cellspacing="0" cellpadding="5">
                <tr>
                    <td>Tên của bạn</td>
                    <td>
                        <input type="text" name="fullname" id="fullname" value="<?php echo isset($data['fullname']) ? $data['fullname'] : ''; ?>"/>
                        <?php echo isset($error['fullname'] )  ? $error['fullname'] : ''; ?>
                    </td>
                </tr>
                <tr>
                    <td>Email của bạn</td>
                    <td>
                        <input type="text" name="email" id="email" value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>"/>
                        <?php echo isset($error['email'] ) ? $error['email'] : ''; ?>
                    </td>
                </tr>
                <tr>
                    <td>Nội dung liên hệ</td>
                    <td>
                        <textarea id="content" name="content"><?php echo isset($data['content']) ? $data['content'] : ''; ?></textarea>
                        <?php echo  isset($error['content']) ? $error['content'] :''; ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="contact_action" value="Gửi liên hệ"/></td>
                </tr>
            </table>
        </form>
    </body>
</html>