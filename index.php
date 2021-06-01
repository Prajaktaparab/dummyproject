<?php
include('config.php');

	session_start();

	// variable declaration
	$username = "";
	$email    = "";
	$errors = array(); 
	$_SESSION['success'] = "";
	
?>
<!DOCTYPE php>
<!--[if lte IE 8]> <php class="oldie" lang="en"> <![endif]-->
<!--[if IE 9]> <php class="ie9" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--> <php lang="en"> <!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="format-detection" content="telephone=no">
	<link href='http://fonts.googleapis.com/css?family=Varela+Round' rel='stylesheet' type='text/css'>
	<title>Village Shopee</title>
	<link rel="stylesheet" href="css/fancySelect.css" />
	<link rel="stylesheet" href="css/uniform.css" />
	<link rel="stylesheet" href="css/jquery.bxslider.css" />
	<link href="css/jquery-ui-1.10.4.custom.css" rel="stylesheet">
	<link rel="stylesheet" href="css/all.css" />
	<link media="screen" rel="stylesheet" type="text/css" href="css/screen.css" />
	<link rel="stylesheet" href="css/stylesheet.css"/>
	<link rel="stylesheet" href="css/stylesheet1.css"/>
	<link rel="stylesheet" href="css/style11.css"/>
    <!-- Animate.css -->
	<link rel="stylesheet" href="css/css/animate.css"/>
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/css/bootstrap.css"/>
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/css/flexslider.css"/>
	<!-- Theme style  -->
	<link rel="stylesheet" href="css/css/style.css"/>
	<link rel="stylesheet" href="css/stylesheet7.css"/>
	<!--[if lt IE 9]>
		<script src="http://php5shiv.googlecode.com/svn/trunk/php5.js"></script>
	<![endif]-->
</head>
<body>
<?php if (isset($_SESSION['success'])) : ?>
			<div class="error success" >
				<h3>
					<?php 
						echo $_SESSION['success']; 
						unset($_SESSION['success']);
					?>
				</h3>
			</div>
		<?php endif ?>
	<div id="wrapper">
		<div class="wrapper-holder">
			<div class="header-holder">
				<header id="header">
					<a href="index.php"><img style="width:10%" id="lg" src="images\zooming.jpg"/><alt="Handmade"></alt></a>
					<div class="tools-nav_holder">
						<ul class="tools-nav">	
						</ul>						
					</div>
					<div class="clear"></div>
					<a class="menu_trigger" href="#">menu</a>
					<nav id="nav">
						<ul class="navi">
							<li class="searc_li" >
								<div  class="ul_search li">
									<a class="search" href="#"><span>search</span></a>
									<form method="get" class="searchform" action="#">
										<input type="text" class="field" name="s" id="s" placeholder="What are you looking for?" />
										<input type="submit" class="submit" value=""  />
										<div class="clear"></div>
									</form>
								</div >
							</li>
							<li><a href="index.php">Home</a></li>
							<li><a href="products.php">Products</a></li>
							<li><a href="product.php">About</a></li>	
							<li><a href="contact.php">Contact</a></li>
							<li><a href="feedback.php">Feedback</a></li>
							<li>	<?php
				if(isset($_SESSION["username"])) {
		   ?>
			   <div class="dropdown">
				  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					<?php echo $_SESSION['username']; ?>
				  </button>
				  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
					<a class="dropdown-item" href="logout.php">Logout</a>
				  </div>
				</div>
			  
			<?php
				}else {
				?>
					<a href="sign1.php"><button type="button" class="btn btn-primary">Login</button></a>
			<?php	}
			?>
</li>			
						</ul>
						</ul>
						<div class="ul_search">
							<a class="search" href="#"><span>search</span></a>
							<form method="get" class="searchform" action="#">
								<input type="text" class="field" name="s" id="s" placeholder="What are you looking for?" />
								<input type="submit" class="submit" value=""  />
							</form>
						</div >
					</nav>
				</header>
			</div>	
			
			<section class="container">
						<div class="bottom-slider">
							<a href="products.php" class="btn-left"></a>
							<div class="slides">
								<a href="products.php"><p>view all</p></a>
								<ul class="item-list">
									<li>
										<div class="item">
											<div class="image">
											<a href="#"><img src="images\basket1.jpg" height="300" width="300"  alt="" /></a>
												<div class="hover">
													<p>Basket</p>
													<strong>₹.100</strong>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="item">
											<div class="image">
												<a href="#"><img src="images\jwelary box.jpg" height="300" width="300" alt="" /></a>
												<div class="hover">
													<p>Jewelry BOx</p>
													<strong>₹149.00</strong>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="item">
											<div class="image">
												<a href="#"><img src="images\chana-papad.jpg" height="" width="" alt="" /></a>
												<div class="hover">
													<p> Masala Papad</p>
													<strong>₹50.00</strong>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="item">
											<div class="image">
												<a href="#"><img src="images\2032Shr.jpg"  alt="" /></a>
												<div class="hover">
													<p>Doormat</p>
													<strong>₹60.00</strong>
												</div>
											</div>
										</div>
									</li>
									<li class="last">
										<div class="item">
											<div class="image">
												<a href="#"><img src="images\2221_v1.jpg" height="300" width="300"  alt="" /></a>
												<div class="hover">
													<p>Basket</p>
													<strong>₹99.00</strong>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="item">
											<div class="image">
												<a href="#"><img src="images\20candleset.jpg"  height="300" width="300"alt="" /></a>
												<div class="hover">
													<p>Candle</p>
													<strong>₹55.00</strong>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="item">
											<div class="image">
												<a href="#"><img src="images\dsc03135.jpg"  alt="" /></a>
												<div class="hover">
													<p>Besan laddoo</p>
													<strong>₹105.00</strong>
												</div>
											</div>
										</div>
									</li>
									<li>
										<div class="item">
											<div class="image">
												<a href="#"><img src="images\s-l1000.jpg" height="300" width="300"  alt="" /></a>
												<div class="hover">
													<p>Candle</p>
													<strong>₹55.00</strong>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</div>
							<a href="products.php" class="btn-right"></a>
						</div>
					</section>
					<div class="strip">
					<h5>100% purchase protection !orignal product</h5>
					</div><br>		
					<aside id="fh5co-hero">
					<div class="container">
					<div class="image">	
				</div>						
			</ul>
		</div>	
	<div class="top-bar">	
					</div>
					<ul class="item-product">
						<li>
							<div class="item">
								<div class="image">
								<img src="images/28-ravaladdo.JPG" height="20"width="20"  alt="" />
								</div>
								<span>₹189.00<a href="#"><input type="button" value="rava-ladoo"/></a></span>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="image">
								<img src="images/Suji-Ladoo-Fiji-Indian-Recipe_.jpg" height="20"width="20" alt="" />
								</div>
								<span>₹129.00<a href="#"><input type="button" value="Suji-ladoo"/></a></span>
							</div>	
						</li>
						<li>
							<div class="item">
								<div class="image">
								<img src="images/til nariyal laddu 2.JPG"  alt="" />
								</div>
								<span>₹189.00<a href="#"><input type="button" value="Til-ladoo"/></a></span>
							</div>	
						</li>
						<li>
							<div class="item">
								<div class="image">
								<img src="images/IMG_5888.JPG"  alt="" />
								</div>
								<span>₹189.00<a href="#"><input type="button" value="Til-ladoo"/></a></span>
							</div>	
						</li>
						<li>
							<div class="item">
								<div class="image">
								<img src="images/IMG_6189.JPG"  alt="" />
								</div>
								<span>₹199.00<a href="#"><input type="button" value="ladoo"/></a></span>
							</div>	
						</li>
						<li>
							<div class="item">
								<div class="image">
								<img src="images/179172511.jpg"  alt="" />
								</div>
								<span>₹129.00<input type="button" value="pickel"/></span>
							</div>	
						</li>
						<li>
							<div class="item">
								<div class="image">
								<img src="images/0008423_kusum-masala-red-chilli-powder-reshampatti-kashmiri-mast.JPG" height="20"width="20"  alt="" />
								</div>
								<span>₹189.00<input type="button" value="masala"/></span>
							</div>
						</li>
						<li>
							<div class="item">
								<div class="image">
								<img src="images/Floating-Diya.jpg" height="20"width="20" alt="" />
								</div>
								<span>₹129.00<input type="button" value="Diya"/></span>
							</div>	
						</li>
						<li>
							<div class="item">
								<div class="image">
								<img src="images/soap.JPG"  alt="" />
								</div>
								<span>₹189.00<input type="button" value="soap"/></span>
							</div>	
						</li>
						<li>
							<div class="item">
								<div class="image">
								<img src="images/bamboo-basket-1623392.JPG"  alt="" />
								</div>
								<span>₹189.00<input type="button" value=" basket"/></span>
							</div>	
						</li>					
					</ul>
				</div>
		</aside>
		<footer id="footer">
			<div class="footer-content">
				<ul class="left_side">
					<li>
						<span>Payment method</span>
						<p style="line-height: 26px;">Cash on Delivery </p>
					</li>
					<li>
					<span> Information</span>
						<a href="products.php">Products</a>
						<a href="product.php">About</a>
					</li>						
					<li>
						<span>Contact us:</span>
						<p>vasant plaza,sawantwadi</p>
						<p>Tel.7517061019<br />parabprajakta3012@gmail.com</p>
					</li>
				</ul>
				<ul class="right_side">
					<li>
						<span>Social media:</span>
						<div class="social">
							<a href="#" class="fb">Facebook</a>
						</div>
						<div class="social">
							<a href="#" class="gl">Google+</a>
						</div>
					</li>
				</ul>
				<div class="clear"></div>
				<p class="copy"></p>
			</div>
		</footer>		
	</div>	
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="js/jcarousellite.js"></script>
	<script type="text/javascript" src="js/jquery.placeholder.js"></script>
	<script type="text/javascript" src="js/jquery.uniform.min.js"></script>
	<script type="text/javascript" src="js/fancySelect.js"></script>
	<script type="text/javascript" src="js/jquery.bxslider.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
	<!-- Waypoints -->
	<script src="js/js/jquery.waypoints.min.js"></script>
	<!-- Flexslider -->
	<script src="js/js/jquery.flexslider-min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/js/jquery.magnific-popup.min.js"></script>
	<script src="js/js/magnific-popup-options.js"></script>
	<!-- Main -->
	<script src="js/js/main.js"></script>
</body>
</html>