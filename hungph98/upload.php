<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Upload file lên Sever với PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form action="upload_submit" method="get" accept-charset="utf-8" enctype="multipart/form-data">
		<input type="file" name="avarta">
		<input type="submit" name="uploadclick" value="upload">
	</form>
	<?php 
	//var_dump($_FILES);
	if(isset($_POST['uploadclick']))
	{
		if(isset($_FILES['avarta']))
		{
			if($_FILES['avarta']['eror'] > 0)
			{
				echo "File upload bị lỗi";
			}else
			{
				move_uploaded_file($_FILES['picture'],'./folder/'.$_FILES['infor.php']);
				echo "File upload";
			}
		}else
		{
			echo "Bạn chưa chọn file";
		}
	}
	?>
</body>
</html>