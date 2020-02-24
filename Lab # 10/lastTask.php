<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" action="lastTask.php" enctype="multipart/form-data">
		Choose a text file to upload<br>
		<input type="file" name="myFile"><br>
		<input type="submit" name="submit" value="Upload">
	</form>

</body>
</html>

<?php
	if(isset($_POST['submit'])){

		$tmpPath = $_FILES['myFile']['tmp_name'];
		$filePath = 'uploads/' . $_FILES['myFile']['name'];
		$fileType = pathinfo($filePath, PATHINFO_EXTENSION);

		if ($fileType == 'txt'){
			if (move_uploaded_file($tmpPath, $filePath)) {
				echo "Success!";
			}
			else echo "Unable to upload.";
		}
		else echo "Please Upload a text file.";

		}
?>