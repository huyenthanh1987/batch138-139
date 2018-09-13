<!-- <?php 
 
	//  if (isset($_POST['submit'])) 
	// {

	//  $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_STRING) : 'Invalid email format'; 
	// }
	?>  -->
<!DOCTYPE html>
<html>
<head>
	<title>Register form</title>
</head>
<body>
	<h1>Register form</h1>
	   <?php $email = isset($_POST['email']) ? filter_var($_POST['email'], FILTER_SANITIZE_STRING) : 'Invalid email format'; ?>
	<form name="registerForm" action="#" method="post" enctype="multipart/form-data">
		   
		<p>Họ và tên 	<input type="text" name="name" value="" placeholder="Nhập họ tên" required></p>
		<p>Email	 <input type="text" name="email" value="" id="email" placeholder="Nhập email" required></p>
		<p>Mật khẩu  	<input type="text" name="pass" value="" placeholder="Nhập mật khẩu" required></p>
		<p>Nhập lại	 	<input type="text" name="pass_" value="" placeholder="Nhập lại mật khẩu" required></p>
		Gender:
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="female") echo "checked";?>
		value="female">Female
		<input type="radio" name="gender"
		<?php if (isset($gender) && $gender=="male") echo "checked";?>
		value="male">Male
		
		<p>Quê quán	 	<input type="select" name="home_town" value="" placeholder="Nhập quê quán" required></p>
		<p>Thông tin mô tả <input type="textarea" name="information" value="" placeholder="Nhập thông tin mô tả" required></p>
		<p>Avatar 	<input type="file" name="avatar_" value="" placeholder="Nhập quê quán" required></p>
		<p><input type="submit" name="submit" value="Register"></p>
	</form>
	
</body>
</html>