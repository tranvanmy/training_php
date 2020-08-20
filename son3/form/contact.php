<!DOCTYPE html>
<html>
    <head>
        <title> Form liên hệ</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        $error =array();
        $data =array();   
     
        if (!empty($_POST['contact_action']))
        {
            $data['fullname']= isset($_POST['fullname']) ? $_POST['fullname'] : '';
            $data['email']= isset($_POST['email'])? $_POST['email'] :'';
            $data['content']= isset($_POST['content'])? $_POST['content']: '';

            require('./validate.php');
            if (empty($data['fullname'])){
                $error['fullname'] = 'Bạn chưa nhập tên';
            }
         
            if (empty($data['email'])){
                $error['email'] = 'Bạn chưa email';
            }
            else if (!is_email($data['email'])){
                $error['email'] = 'Email không đúng định dạng';
            }
         
            if (empty($data['content'])){
                $error['content'] = 'Bạn chưa nhập nội dung';
            }
         
          
            if (!$error){
                echo 'Dữ liệu có thể lưu trữ';
            
            }
            else{
                echo 'Dữ liệu bị lỗi, không thể lưu trữ';
            }
        }
        ?>
             
    
        <h1> Contact form</h1>
        <form method="post" action="contact.php">
            <table cellspacing="0" cellpadding="5">
                <tr>
                    <td>Tên của bạn</td>
                    <td>
                        <input type="text" name="fullname" id="fullname" value="<?php echo isset($data['fullname']) ? $data['fullname'] : ''; ?>"/>
                        <?php echo isset($error['fullname']) ? $error['fullname'] : ''; ?>
                    </td>
                </tr>
                <tr>
                    <td>Email của bạn</td>
                    <td>
                        <input type="text" name="email" id="email" value="<?php echo isset($data['email']) ? $data['email'] : ''; ?>"/>
                        <?php echo isset($error['email']) ? $error['email'] : ''; ?>
                    </td>
                </tr>
                <tr>
                    <td>Nội dung liên hệ</td>
                    <td>
                        <textarea id="content" name="content"><?php echo isset($data['content']) ? $data['content'] : ''; ?></textarea>
                        <?php echo isset($error['content']) ? $error['content'] : ''; ?>
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