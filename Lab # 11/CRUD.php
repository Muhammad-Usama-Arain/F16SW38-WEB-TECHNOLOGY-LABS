<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

	<title>CRUD Operations / Sweets Shop</title>
</head>
<body>

		<form method="POST" action="sqlTask.php" class="form-group" style="text-align: center;">
			<input type="number" name="id" placeholder="Always set '1' in this field" class="form-control-lg">
			<input type="text" name="name" class="form-control-lg" placeholder="Name">
			<input type="number" name="price" class="form-control-lg" placeholder="Price">
			<input type="submit" name="create" value="Create" class="btn btn-primary">
		</form>
		<form method="POST" action="sqlTask.php" class="form-group" style="text-align: center;">
			<input type="submit" name="reader" value="Read" class="btn btn-danger">
		    <input type="submit" name="update" value="Update" class="btn btn-warning">
		    <input type="submit" name="delete" value="Delete" class="btn btn-dark">
		</form>

</body>
</html>

<?php

$host = 'localhost';
$user = 'root';
$password = '12345';
$database = 'sweetsShop';
$sqliConnectObj = new mysqli($host, $user, $password, $database);

#Create
if (isset($_POST["create"])) {

if($sqliConnectObj -> connect_error){
    print('Failed to connect to mysql' . $sqliConnectObj -> connect_error);
    $sqliConnectObj = new mysqli($host, $user, $password);}    
else{
	$id = $_POST["id"];
	$name = $_POST["name"];
	$price = $_POST["price"];

	$stmt = $sqliConnectObj->prepare("INSERT INTO Sweets(id, p_name, price) VALUES(?, ?, ?)");
	$stmt->bind_param("isi", $id, $name, $price);
        	
        	if($stmt->execute() === TRUE){
        			echo "Inserted Successfully!";}
    		else{
        			print($sqliConnectObj->error);}  
        }
}
#reader
if (isset($_POST["reader"])) {
if($sqliConnectObj -> connect_error){
    print('Failed to connect to mysql' . $sqliConnectObj -> connect_error);
    $sqliConnectObj = new mysqli($host, $user, $password);}    
else{
	$queryFetch = "SELECT * FROM Sweets";
	$result = $sqliConnectObj->query($queryFetch);
    	if ($result->num_rows > 0) {
        	$rows = $result->fetch_row();
        	echo $rows[0] ." ";
        	echo $rows[1] ." ";
        	echo $rows[2];
    		}
        }
}
#update
if (isset($_POST["update"])) {
if($sqliConnectObj -> connect_error){
    print('Failed to connect to mysql' . $sqliConnectObj -> connect_error);
    $sqliConnectObj = new mysqli($host, $user, $password);}    
else{    
    $queryUp = "UPDATE Sweets SET p_name='Sneakers' WHERE id=1";
    if($sqliConnectObj->query($queryUp) === TRUE){
        echo "Updated Successfully!";
        }
    else{
        print($sqliConnectObj->error);
        }
	}
}
#delete
if (isset($_POST["delete"])) {
if($sqliConnectObj -> connect_error){
    print('Failed to connect to mysql' . $sqliConnectObj -> connect_error);
    $sqliConnectObj = new mysqli($host, $user, $password);}    
else{    
    $queryDel = "DELETE FROM Sweets WHERE id=1";
    if($sqliConnectObj->query($queryDel) === TRUE){
        echo "Deleted Successfully!";
        }
    else{
        print($sqliConnectObj->error);
        }
    }
}
?>