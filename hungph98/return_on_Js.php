<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Return on JavaScript</title>
	<link rel="stylesheet" href="">
	<script type="text/javascript" language="JavaScript">
		function validateFrom()
		{
			var username = document.getElementById('username').value;
			var password = document.getElementById('password').value;
			if (username == "") {
				alert('Bạn chưa nhập tên đăng nhập');
			}
			if (password == "") {
				alert('Bạn chưa nhập mật khẩu')
			}
			else{
				alert('Thông tin đã đầy đủ');
				return true;
			}
			return false;
		}
	</script>
</head>
<body>
	<form action="return_on_Js.php" method="" accept-charset="utf-8" action="" onsubmit="return validateFrom()">
		Username: <input type="text" name="username" id="username" value=""> <br/><br/>
		Password: <input type="password" name="password" id="password" value="" > <br/><br/>
		<input type="submit" name="login" value="Login">
	</form>
</body>
</html>