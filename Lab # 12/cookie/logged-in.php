
<!DOCTYPE html>
<html>
<head>
	<title>Cookie_Form</title>
</head>
<body>
	<form method="post">
		<?php echo $_COOKIE['Waqar']; ?>
		<input type="submit" name="submit" value="Logout">
	</form>

</body>
</html>

<?php

	if (isset($_POST['submit'])) {
		header("location:index.php");
	}

?>