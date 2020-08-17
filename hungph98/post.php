<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Phương thưc POST</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<form method="post" >
		username : <input type="text" id="username" name="username" value=""><br>
		password : <input type="pasword" id="password" name="password" value=""><br>
		<input type="submit" name="form_click" value="Gửi Dữ Liệu"><br>
		<?php 
		if (isset($_POST['form_click'])) {
			echo 'Tên đăng nhập là : '.$_POST['username'];
			echo "<br>";
			echo 'Mật khẩu là : '. $_POST['password'];
		}
		?>
	</form>
</body>
</html>

	
