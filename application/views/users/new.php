<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?php echo ('/users/create')?>" method="post">
		<input type="hidden" name="action" value="register"><br>
		Enter your first name: <input type="text" name="first_name"><br>
		Enter your last name: <input type="text" name="last_name"><br>
		Enter your email address: <input type="text" name="email_address"><br>
		<input type="submit" value="Register">
	</form>
</body>
</html>