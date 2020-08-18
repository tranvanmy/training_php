<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv = "Content-type" name="viewport" content="text/html, charset = UTF-8">
    <title>Document</title>
</head>
<body>
    <!-- phương thức post và enctype = "multipart/form-data" -->
    <form action="" method = 'post' enctype = "multipart/form-data">
        <!-- input type = 'file' -->
        <input type="file" name = "avatar">
        <input type="submit" name = "uploadclick" value = "Upload">
    </form>
    <?php
        //xử lí up load
        if (isset($_POST['uploadclick']))
        {
            // Nếu người dùng có chọn file để upload
            if (isset($_FILES['avatar']))
            {
                // Nếu file upload không bị lỗi,
                // Tức là thuộc tính error > 0
                if ($_FILES['avatar']['error'] > 0)
                {
                    echo 'File Upload Bị Lỗi';
                }
                else{
                    // Upload file
                    move_uploaded_file($_FILES['avatar']['tmp_name'], './upload/'.$_FILES['avatar']['name']);
                    echo 'File Uploaded';
                }
            }
            else{
                echo 'Bạn chưa chọn file upload';
                }
        }
    ?>
</body>
</html>