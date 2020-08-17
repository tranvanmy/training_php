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
	var_dump($_FILES);
	?>
</body>
</html>