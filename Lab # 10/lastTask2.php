<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<form method="POST" action="lastTask2.php">
		<div>
			<input type="submit" name="reading" value="reading"><br>
			<input type="text" name="writingTXT" placeholder="Write your text">
			<input type="submit" name="writing" value="writing"><br>
			<input type="submit" name="copying" value="copying"><br>
			<input type="submit" name="renaming" value="renaming"><br>
			<input type="submit" name="deleting" value="deleting">

		</div>
	</form>

</body>
</html>

<?php 
$filePath = 'E:\DATABASE V2\7th Semester\#Web Engineering\Lab work\lab10\lab task\uploads\file.txt';

		if (isset($_POST['reading'])) {
				$file = fopen($filePath, 'r');
				while (! feof($file)) {
					$line = fgets($file);
					echo $line;}
				fclose($file);
			}

		if (isset($_POST['writing'])) {
				$text = $_POST['writingTXT'];
				$file = fopen($filePath, 'a+');
				fwrite($file, $text . "\n");
				fclose($file);

				}

		if (isset($_POST['copying'])) {
			if (file_exists($filePath)) {
				copy($filePath, 'E:\DATABASE V2\7th Semester\#Web Engineering\Lab work\lab10\lab task\file.txt');
				echo "Success!";
			}
		}

		if (isset($_POST['renaming'])) {
			if (file_exists($filePath)) {
				rename($filePath, 'E:\DATABASE V2\7th Semester\#Web Engineering\Lab work\lab10\lab task\uploads\fileRenamed.txt');
				echo "Success!";
			}
		}

		if (isset($_POST['deleting'])) {
			if (file_exists($filePath)) {
				unlink($filePath);
				echo "Success!";
			}
		}		

?>