<?php session_start();
if (isset($_POST['save-session'])) {
	$_SESSION['name'] = $_POST['username'];
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>SESSION</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	if (isset($_SESSION['name'])) {
		echo "Tên đăng nhâp ".$_SESSION['name'];
	}
	?>
	<form action="Session_submit" method="get" accept-charset="utf-8">
		<input type="text" name="username" value=""><br>
		<input type="submit" name="save-session" value="save-session">
	</form>
</body>
</html>