<!DOCTYPE html>
<html>
<head>
	<title>Uploads</title>
</head>
<body>

<!-- this form sends the data to a php file called uploads.php -->
	<form method="post" action="uploadingIMGS.php" enctype="multipart/form-data">

<!-- this input tag is used to define constraints on this file? idk what its doing -->
<!-- 		<input type="hidden" name="MAX-FILE-SIZE" value="10000000">
 -->
<!-- the following input fields are for uploading; <input type="file"> & <input type="submit"> -->
		Choose a file to upload<br>
		<input type="file" name="fileToUpload">
		<br><br>
		<input type="submit" name="submit" value="Upload">
	</form>

</body>
</html>



<?php

if(isset($_POST["submit"])) {

# [fileToUpload] gets the file and [name] gets the name of the file being uploaded.
$file = $_FILES['fileToUpload']['tmp_name'];
$target_file = "uploads/".$_FILES['fileToUpload']['name'];
#echo $file . '<br>';
#echo $target_file . '<br>';

	#checking file size
	if ($_FILES["fileToUpload"]["size"] > 2000000) {
    echo "Sorry, your file is too large.";
	}

    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	#checking file type
	if($fileType != "jpg" && $fileType != "png" && $fileType != "pdf") {
    echo "Sorry, your file is not of the type jpg, png or pdf.";
    }
    else{
     echo 'Your file type is ' . $fileType . '<br>';
     # uploading file to a directory.
     if(move_uploaded_file($file, $target_file)){
		echo "Uploaded Successfully!" . '<br>';
	}
	else echo "File not uploaded.". '<br>';
}

}#isset()

?>