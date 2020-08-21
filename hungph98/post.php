<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Phương thưc POST</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="post" action="post.php">
		Username : <input type="text" id="username" name="username" value=""><br><br>
		Password : <input type="pasword" id="password" name="password" value=""><br><br>
		<input type="submit" name="form_click" value="Đăng nhập"><br>
	</form>
	<?php 
	//var_dump($_POST);
	if ($_POST['']) {
		$username = isset($_POST['username']) ? $_POST['username'] : "";
		$password = isset($_POST['password']) ? $_POST['password'] : "";
		if (!$username || !$pasword) {
			echo "Bạn vui lòng nhập đầy đủ thông tin";
		}
		if ($username != 'hungph98' || $password != '12345') {
			echo "Thông tin đăng nhập sai ";
		}
		else{
			echo "Đăng nhập thành công";
		}
	}
	?>
</body>
</html>

	
