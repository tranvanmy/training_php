<?php
    require ("students.php");
    $data = array();
    $error = array();
    $is_update_action = false;

    //check nếu có id này rồi thì là update
    if(isset($_GET['id'])){
        $data = getStudent($_GET['id']);
        $is_update_action = true;
    }

    if(isset($_POST['add_student'])){

        $data['student_id'] = isset($_POST['id']) ? $_POST['id'] :'';
        $data['student_name'] = isset($_POST['name']) ? $_POST['name'] :'';
        $data['student_email'] = isset($_POST['email']) ? $_POST['email'] :'';

        if(empty($data['student_id'])){
            $error['student_id'] = 'bạn chưa nhập id';
        }

        if(empty($data['student_name'])){
            $error['student_name'] = 'bạn chưa nhập tên';
        }
        if(empty($data['student_email'])){
            $error['student_email'] = 'bạn chưa nhập email';

        }elseif(filter_var($data['student_email'],FILTER_VALIDATE_EMAIL)){
            $error['student_email'] = 'định dạng email sai';
        }

        if(empty($error)){
            updateStudent($data['student_id'],$data['student_name'],$data['student_email']);
            header("Location:student-list.php");
        }
    }
?>
 
<!DOCTYPE html>
<html>
    <head>
        <title>Thêm sinh viên</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <a href="student-list.php">BACK</a>
        <form method="post">
            <table border="1" cellspacing="0" cellpadding="10">
                <tr>
                    <td>Id</td>
                    <td>
                        <input type="text" name="id" value="<?php echo isset($data['student_id']) ? $data['student_id'] : '' ;?>" />
                        <?php echo isset($error['student_id']) ? $error['student_id'] : '' ; ?>                  
                    </td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="name" value=" <?php echo isset($data['student_name']) ? $data['student_name']: '' ; ?>" />
                        <?php echo isset($error['student_name']) ? $error['student_name'] : '' ?>
                    </td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="text" name="email" value="<?php echo isset($data['student_email']) ? $data['student_email']: '' ;?>" />
                        <?php echo isset($error['student_email']) ? $error['student_email'] :''; ?>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="add_student" value="<?php echo ($is_update_action) ? 'cập nhập' : 'thêm mới'?>" /></td>
                </tr>
            </table>
        </form>
    </body>
</html>