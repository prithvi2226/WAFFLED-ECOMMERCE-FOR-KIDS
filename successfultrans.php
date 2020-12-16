<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cart Details - WAFFLED</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;600;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
		<div class="container">
			<div class="navbar">
				<div class="logo">
					<a href="waffled.html"><img src="Pictures/waffled.png" width="125px"></a>
				</div>
			<nav>
				<ul id="MenuItems">
					<li><a href="home.php">Home</a></li>
					<li><a href="products1.php">Products</a></li>
					<li><a href="about.html">About</a></li>
					<li><a href="Contact.php">Contact</a></li>
					<li><a href="account.php">Account</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
				</ul>
			</nav>
				<a href="cart.php"><img src="Pictures/fs.png" width="30px" height="30px"></a>
				<img src="Pictures/menu.png" class="menu-icon" onclick="menutoggle()">
			</div>
		</div>
<!---------------------------Account-Page---------------------------

<div class="account-page">
	<div class="container">
		<div class="row">
			<div class="col-2">
				<img src="Pictures/out.jpg">
			</div>

			<div class="col-2">
				<div class="form-container">
					<div class="form-btn">
						<span onclick="login()">Login</span>
						<span onclick="register()">Register</span>
						<hr id="Indicator">
					</div>

					<form id="LoginForm">
						<input type="text" placeholder="Username" pattern="[A-Za-z0-9]+" required>
						<input type="password" placeholder="Password" pattern="[A-Za-z0-9]+" required>
						<button type="submit" class="btn">Login</button>
						<a href="">Forgot Password</a>
					</form>

					<form id="RegForm">
						<input type="text" placeholder="Username" >
						<input type="email" placeholder="Email">
						<input type="password" placeholder="Password">
						
						<button type="submit" class="btn">Register</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>
-->
<h1>Hey <?php echo $_SESSION['username']; ?> Order Placed<br>Hope You enjoy!:}</h1>

		
<!------------------------------footer---------------------------------->
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="footer-col-1">
				<h3>Download Our App</h3>
				<p>Download App for Android and IOS mobile phone</p>
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
					<li>YouTube</li>
				</ul>
			</div>
		</div>
		<hr>
		<p class="Copyright">Copyright 2020 - XALAR CORP</p>
	</div>
</div>


<!---------------js for toggle menu------------->
    <script>
        var MenuItems = document.getElementById("MenuItems");
        
        MenuItems.style.maxHeight = "0px";
        function menutoggle(){
            if(MenuItems.style.maxHeight == "0px")
            {
                MenuItems.style.maxHeight = "200px";
            }
            else
            {
                MenuItems.style.maxHeight = "0px"
            }
        }
    </script>

<!--------------------js for toggle form----------------------------->
	<script>
		var LoginForm = document.getElementById("LoginForm");
		var RegForm = document.getElementById("RegForm");
		var Indicator = document.getElementById("Indicator");

			function register(){
				RegForm.style.transform = "translateX(0px)";
				LoginForm.style.transform = "translateX(0px)";
				Indicator.style.transform = "translateX(100px)";
			}

			function login(){
				RegForm.style.transform = "translateX(300px)";
				LoginForm.style.transform = "translateX(300px)";
				Indicator.style.transform = "translateX(0px)";
			}

	</script>
    


</body>
</html>























