<?php 
	if (isset($_POST['submit']) && (!empty($_POST['name']))&& (!empty($_POST['email']))) {
	
		echo $_POST['name'].'<br>';
		echo $_POST['email'].'<br>';
	}
	?>
<!DOCTYPE html>
<html>
<head>
	<title>Register form</title>
</head>
<body>
	<h1>Register form</h1>
	<form name="registerForm" action="#" method="post">
		<p>Họ và tên <input type="text" name="name" value="" placeholder="Nhập họ tên" required></p>
		<p>Email	 <input type="text" name="email" value="" placeholder="Nhập email" required></p>
		<p><input type="submit" name="submit" value="Register"></p>
	</form>
	
</body>
</html>