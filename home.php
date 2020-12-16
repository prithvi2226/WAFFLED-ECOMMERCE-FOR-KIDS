
<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>WAFFLED | Ecommerce Website Design</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;600;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>

	<div class="header">
		<div class="container">
		<div class="navbar">
		<div class="logo">
			<a href=""><img src="Pictures/waffled.png" width="125px"></a>
		</div>
		<nav>
			<ul id="MenuItems">
				<li><a href="">Home</a></li>
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
	<div class="row">
		<div class="col-2">
			<h1>Welcome <?php echo $_SESSION['username']; ?> Here Because Your Children<br>Deserve The Best!:}</h1>
			<p>Children are like wet cement.<br>Whatever falls on them makes an impression.</p>
			<a href="" class="btn">Explore Now &#10147;</a>
		</div>
		<div class="col-2">
			<img src="Pictures/out.jpg">
		</div>
	</div>

	</div>
	</div>


	<!---------------------featured categories------------------->
	<div class="categories">
		<div class="small-container">
			<div class="row">
			<div class="col-3">
				<img src="Pictures/gear2.jpg">
			</div>
			<div class="col-3">
				<img src="Pictures/toys3.jpg">
			</div>
			<div class="col-3">
				<img src="Pictures/sanitation.jpg">
			</div>
		</div>
		</div>
		
	</div>
	<!---------------------featured products------------------->
	<div class="small-container">
		<h2 class="title">Featured Products</h2>
		<div class="row">
			<div class="col-4">
				<a href="armanijunior.html"><img src="Pictures/featured-1.jpg">
				<h4>Armani Junior Outfit</h4></a>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$124.00</p>
			</div>
			<div class="col-4">
				<a href="Alloverlogoprintpolo.html"><img src="Pictures/featured-2.jpg">
				<h4>All Over Logo Print Polo</h4>
				<div class="ratings"></a>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<p>$150.00</p>
			</div>
			<div class="col-4">
				<a href="dress(4-8).html"><img src="Pictures/featured-3.jpg">
				<h4>Dress (4-8 Years)</h4></a>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
				</div>
				<p>$165.00</p>
			</div>
			<div class="col-4">
				<a href="newborn.html"><img src="Pictures/featured-4.jpg">
				<h4>Newborn 3 Bibs + Pouch Set</h4></a>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$185.00</p>
			</div>
		</div>
		<h2 class="title">Latest Products</h2>
		<div class="row">
			<div class="col-4">
				<a href="Alloverlogoprintpolo.php"><img src="Pictures/latest1.jpg">
				<h4>All Over Logo Hoodie (4-8 YEARS)</h4></a>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$390.00</p>
			</div>
			<div class="col-4">
				<a href="logolimebackpack.html"><img src="Pictures/latest2.jpg">
				<h4>Logo Lime Print Backpack</h4></a>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<p>$380.00</p>
			</div>
			<div class="col-4">
				<a href="shirt12-36.html"><img src="Pictures/latest3.jpg">
				<h4>Shirt (12-36 Months)</h4></a>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
				</div>
				<p>$180.00</p>
			</div>
			<div class="col-4">
				<a href="purebaby.html"><img src="Pictures/latest4.jpg">
				<h4>Purebaby 3 Sock Pack</h4></a>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$18.05</p>
			</div>
			<div class="col-4">
				<a href="hotwheels.html"><img src="Pictures/latest5.jpg">
				<h4>Hot Wheels Shifters Color Splash ScienceLab Playset</h4></a>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$48.00</p>
			</div>
			<div class="col-4">
				<a href="himalaya.html"><img src="Pictures/latest6.jpg">
				<h4>Himalaya Baby Massage Oil (200ml)</h4></a>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$10.50</p>
			</div>
			<div class="col-4">
				<a href="legobatman.html"><img src="Pictures/latest7.jpg">
				<h4>LEGO Batman™</h4></a>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$20.00</p>
			</div>
			<div class="col-4">
				<a href="emporioarmanidress.html"><img src="Pictures/latest8.jpg">
				<h4>Emporio Armani Dress (8-14 Years)</h4></a>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$18.05</p>
			</div>
	</div>
<!---------------offer------------>
	<div class="offer">
		<div class="small-container">
			<div class="row">
				<div class="col-2">
					<img src="Pictures/offer.jpg" class="offer-img">
				</div>
				<div class="col-2">
					<p>Exclusively Available on Waffled!</p>
					<h1>Emporio Armani junior collection On Sale!</h1>
					<small>Emporio Armani junior collection instils elegance from the very first days. Creating picture-perfect moments for boys and girls, the luxuriously wearable range includes signature pieces alongside everyday outerwear and accessories.</small>
					<a href="": class="btn">Buy Now &#8594;</a>
				</div>
			</div>
		</div>
	</div>


<!----------testimonial---------->
	<div class="testimonial">
		<div class="small-container">
			<div class="row">
				<div class="col-4">
					<i class="fa fa-quote-left"></i>
					<p>Lorem ipsum is a placeholder
					 text commonly used to demonstrate 
					the visual form of a document or a 
					typeface without relying on 
					meaningful content.</p>
					<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<img src="Pictures/Maxwell.jpg">
				<h3>Ghislane Maxwell</h3>
				</div>
				<div class="col-4">
					<i class="fa fa-quote-left"></i>
					<p>Lorem ipsum is a placeholder
					 text commonly used to demonstrate 
					the visual form of a document or a 
					typeface without relying on 
					meaningful content.</p>
					<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<img src="Pictures/josef.jpg">
				<h3>Josef Mengele</h3>
				</div>
				<div class="col-4">
					<i class="fa fa-quote-left"></i>
					<p>Lorem ipsum is a placeholder
					 text commonly used to demonstrate 
					the visual form of a document or a 
					typeface without relying on 
					meaningful content.</p>
					<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<img src="Pictures/martha.jpg">
				<h3>Martha Stewart</h3>
				</div>

			</div>
		</div>
	</div>


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

<!------------------ js for toggle menu----------->
<script>
	var MenuItems - document.getElementById("MenuItems");

	MenuItems.style.maxHeight = "0px";

	function menutoggle(){
		if(MenuItems.style.maxHeight = "0px")
	}
</script>

</body>
</html>














































