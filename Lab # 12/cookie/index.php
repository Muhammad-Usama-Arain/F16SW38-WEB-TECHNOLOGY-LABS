
<!DOCTYPE html>
<html>
<head>
	<title>Cookie_Form</title>
</head>
<body>
	<form method="post">
		<h3>Login Form</h3>
		<input type="text" name="name" placeholder="Name">
		<input type="number" name="password" placeholder="Password">
		<input type="checkbox" name="rememberMe">
		<label>remember me!</label>
		<input type="submit" name="submit" value="submit">
	</form>

</body>
</html>

<?php

if(isset($_POST['submit'])){
	$username = $_POST['name'];
	$password = $_POST['password'];

	if (isset($_POST['rememberMe'])) {
		setcookie($username, $password, time() + 86400 * 7);
		header("location:logged-in.php");
	}

	elseif (!isset($_POST['rememberMe'])) {
		if (isset($_COOKIE[$username])) {
			header("location:logged-in.php");
		}
	}

}

?>