<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Product Details - WAFFLED</title>
	<link rel="stylesheet" type="text/css" href="CSS/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@400;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

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
					<li><a href="Contact.html">Contact</a></li>
					<li><a href="account.php">Account</a></li>
					<li><a href="logout.php">LOGOUT</a></li>
				</ul>
			</nav>
				<a href="cart.php"><img src="Pictures/fs.png" width="30px" height="30px"></a>
				<img src="Pictures/menu.png" class="menu-icon" onclick="menutoggle()">
			</div>
		</div>


<!-------------------- single product ------------------------->

	<div class="small-container single-product">
		<div class="row">
			<div class="col-2">
				<img src="Pictures/latest1.jpg" width="100%" id="product-img">

			    <!div class="small-img-row">
					<!div class="small-img-col">
						<!img src="Pictures/sg1.jpg" width="100%" class="small-img">
					<!/div>
					<!div class="small-img-col">
						<!img src="Pictures/sg2.jpg" width="100%" class="small-img">
					<!/div>
					<!div class="small-img-col">
						<!img src="Pictures/sg3.jpg" width="100%" class="small-img">
					</!div>
				<!/div>

			</div>
			<div class="col-2">
				<p>Home / T-Shirt</p>
				<h1>ALL OVER LOGO HOODIE(4-8 YEARS)</h1>
				<h4>$390.00</h4>
				<select>
					<option>14 yrs</option>
					<option>13 yrs</option>
					<option>12 yrs</option>
					<option>11 yrs</option>
					<option>10 yrs</option>
				</select>
				<input type="number" value="1">
				<a href="cart.php" class="btn">Add To Cart</a>
				<h3>Product Details <i class="fa fa-indent"></i></h3>
				<br>
				<p>Fashionable Hoodie from Armani.</p>
			</div>
		</div>
	</div>

<!-----------------------Title---------------------->
 <div class="small-container">
 	<div class="row row-2">
 		<h2>Related Products</h2>
 		<p>View More</p>
 	</div>
 </div>








<!--------------------------products------------------->
	<div class="small-container">


		<div class="row">
			<div class="col-4">
				<img src="Pictures/sg.jpg">
				<h4>Mini Stripe Big Logo Tee (10-14 Years)</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$100.00</p>
			</div>
			<div class="col-4">
				<img src="Pictures/featured-1.jpg">
				<h4>Armani Junior Outfit</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-half-o" aria-hidden="true"></i>
				</div>
				<p>$124.00</p>
			</div>
			<div class="col-4">
				<img src="Pictures/featured-2.jpg">
				<h4>All Over Logo Print Polo</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
				</div>
				<p>$150.00</p>
			</div>
			<div class="col-4">
				<img src="Pictures/featured-3.jpg">
				<h4>Dress (4-8 Years)</h4>
				<div class="ratings">
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
					<i class="fa fa-star-o" aria-hidden="true"></i>
				</div>
				<p>$165.00</p>
			</div>


		</div>

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


<!---------------js for toggle menu-------------->
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


        <!---js for product gallery----------->
    <script>
        var ProductImg = document.getElementById("product-img");
        var SmallImg = document.getElementsByClassName("small-img");

        SmallImg[0].onclick = function()
        {
            ProductImg.src = SmallImg[0].src;
        }
        SmallImg[1].onclick = function()
        {
            ProductImg.src = SmallImg[1].src;
        }
        SmallImg[2].onclick = function()
        {
            ProductImg.src = SmallImg[2].src;
        }
    </script>

</body>
</html>
