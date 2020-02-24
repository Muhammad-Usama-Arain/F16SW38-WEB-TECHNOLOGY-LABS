<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Product</title>
	<link rel="stylesheet" type="text/css" href="product_page.css">
</head>
<body style="background-color: #fffdd0">

	<header>
		<nav>
			<ul>
				<li class="logo"><h4><img src="istockphoto.jpg" align="middle">Original Thrombones</h4></li>
				<span class="menu-box">
					<a href="#"><li class="menu">Features</li></a>
					<a href="#"><li class="menu">How it Works</li></a>
					<a href="#"><li class="menu">Prices</li></a>
					<a href="cart.php" class="menu">CART</a>
				</span>	
			</ul>
		</nav>
	</header>

<div style="text-align: center;">
	<h4>Handcrafted, home-made masterpieces</h4>
	<input type="email" name="email" placeholder="Enter your email address" style="width: 250px;">
	<br><br>
	<button style="background-color: yellow;"><b>GET STARTED</b></button>
</div>
<br><br>
	
	<div style="text-align: center;">
		<img src="istockphoto.jpg">
		<div class="text-block">
		<p style="font-size: 20px; margin-bottom: -20px;">Premium Materials</p>
		<p>Our membership is the greatest, you can never forget!</p>
		</div>
	</div>
	<br>

		<div style="text-align: center;">
		<img src="istockphoto.jpg">
		<div class="text-block">
		<p style="font-size: 20px; margin-bottom: -20px;">Fast Shipping</p>
		<p>Our membership is the greatest, you can never forget!</p>
		</div>
	</div>
	<br>

		<div style="text-align: center;">
		<img src="istockphoto.jpg">
		<div class="text-block">
		<p style="font-size: 20px; margin-bottom: -20px;">Quality Assistance</p>
		<p>Our membership is the greatest, you can never forget!</p>
		</div>
	</div>

<!-- <iframe align="center" width="240" height="180" src="https://www.youtube.com/embed/QbyAVsbtGh0" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
 -->
<br><br>

<div style="text-align: center;">

	<div  class="box" style="display: inline-block;">
		<form method="post">
			<div class="inner-box"><input type="text" name="Tenor Thrombone" value="Valve Thrombone"></div>
			<input type="text" name="val" value="$600">
			<p>lorem ipsum</p>
			<p>lorem ipsum</p>
			<button type="submit">Add to cart</button>
		</form>
	</div>

	<div  class="box" style="display: inline-block;">
		<form method="post">
			<div class="inner-box"><input type="text" name="Bass Thrombone" value="Valve Thrombone"></div>
			<input type="text" name="val" value="$900">
			<p>lorem ipsum</p>
			<p>lorem ipsum</p>
			<button type="submit">Add to cart</button>
		</form>
	</div>
	<div  class="box" style="display: inline-block;">
		<form method="post">
			<div class="inner-box"><input type="text" name="Valve Thrombone" value="Valve Thrombone"></div>
			<input type="text" name="val" value="$1200">
			<p>lorem ipsum</p>
			<p>lorem ipsum</p>
			<button type="submit">Add to cart</button>
		</form>
	</div>

</div>

</body>
</html>

<?php
	if (isset($_POST['submit'])) {
			$_SESSION['productName'] = $_POST['name'];
			$_SESSION['productPrice'] = $_POST['val'];
			header("location:cart.php");
	}
?>