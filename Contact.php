<?php
include ("db_connect.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact US - WAFFLED</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-------- wing plus-h----------------->
</head>
<body>
		<div class="container">
		<div class="navbar">
		<div class="logo">
			<img src="Pictures/waffled.png" width="125px">
		</div>
		<nav>
			<ul id="MenuItems">
				<li><a href="home.php">Home</a></li>
				<li><a href="products1.php">Products</a></li>
				<li><a href="about.html">About</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="account.php">Account</a></li>
				<li><a href="logout.php">LOGOUT</a></li>
			</ul>
		</nav>
		<a href="cart.php"><img src="Pictures/fs.png" width="30px" height="30px"></a>
		<img src="Pictures/menu.png" class="menu-icon" onclick="menutoggle()">
	</div>
	</div>



	<div class="container-md">
		<div class="row">


				<div class="col-lg-6">
          <h3 style="color : #7bc4d1">CONTACT FORM</h3>
		<form action="user_process.php" method="POST" name="user">
				<input class="feedback-input" type="text" name="name" placeholder="Name">
				<br><br>
				<input class="feedback-input" type="text" name="email" placeholder="Email">
				<br><br>
				<textarea class="feedback-input" name="message" rows="8" cols="80" placeholder="Message"></textarea>
				<br><br>
				<a href="feedsubmitted.php"><input type="submit" name="submit" value="submit"></a>
	</form>
	<div class="col-lg-">
	</div>
	</div>
	</div>
	</div>

<br><br><br>


<!---------------footer---------------->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col-1">
				<h3>Download Our App</h3>
				<p>Download App for Android and ios mobile phone</p>
				<div class="app-logo">
					<img src="Pictures/appstore.png">
					<img src="Pictures/googleplay.png">
				</div>
			</div>
			<div class="footer-col-2">
				<img src="Pictures/waffled.png">
				<p>Our Purpose Is To Sustainably Make the Pleasure and benefits of Products Accessible to the Children.</p>
			</div>
			<div class="footer-col-3">
				<h3>Useful Links</h3>
				<ul>
					<li>Coupons</li>
					<li>Blog Post</li>
					<li>Return Policy</li>
					<li>Join Affiliates</li>
				</ul>
			</div>
			<div class="footer-col-4">
				<h3>Follow Us</h3>
				<ul>
					<li>Facebook</li>
					<li>Twitter</li>
					<li>Instagram</li>
					<li>Youtube</li>
				</ul>
			</div>
		</div>
		<hr>
		<p class="Copyright">Copyright 2020 - XALAR CORP</p>
	</div>
</div>

</body>
</html>
