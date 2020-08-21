<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Validate on PHP</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php 
	$error = array();
	$data = array();
	if (!empty($_POST['contact_action']))
	{
    	$data['fullname'] = isset($_POST['fullname']) ? $_POST['fullname'] : '';
    	$data['email'] = isset($_POST['email']) ? $_POST['email'] : '';
    	$data['content'] = isset($_POST['content']) ? $_POST['content'] : '';
    	require('Kiemtra.php');
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
	<h1>Validate on PHP</h1>
	<form action="ValidateOnPHP.php" method="post" accept-charset="utf-8">
		<table cellpadding="0" cellpadding="5">
			<tr>
				<td>Full Name</td>
				<td><input type="text" name="fullname" id="fullname" value="">
					<?php 
					echo isset($error['fullname']) ? $error['fullname'] : "";
					?>
				</td>
			</tr>
			<tr>
				<td>Email</td>
				<td><input type="text" name="email" id="email" value="">
					<?php 
					echo isset($error['email']) ? $error['email'] : "";
					?>
				</td>
			</tr>
			<tr>
				<td>Content</td>
				<td><textarea name="content" id="content" value=""></textarea>
					<?php 
					echo isset($error['content']) ? $error['content'] : "";
					?>
				</td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="contact_action" value="Gửi Liên Hệ "></td>
			</tr>
		</table>
	</form>
</body>
</html>