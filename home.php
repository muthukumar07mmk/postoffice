<?php
session_start();

if(!isset($_SESSION['user']))
{
  header("Location: index.php");
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Indian Post</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Courier Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- css files -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- /css files -->
<!-- font files -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700italic,700,800,800italic' rel='stylesheet' type='text/css'>
<link href="//fonts.googleapis.com/css?family=Exo+2:100,200,300,400,500,600,700,800,900" rel="stylesheet">
<!-- /font files -->
<!-- js files -->

<!-- /js files -->
</head>
<body>
<!-- navigation -->
<style type="text/css">
	 a:hover{
  background-color: #33accc;
    color: #fff;
  text-align: center;
  padding: 20px 10px;
  letter-spacing: 1px;
  text-decoration: none;
 
 }
 a:hover{
  
  padding: 10px 10px;
  letter-spacing: 1px;
  text-decoration: none;
 
 }

</style>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container">
        <div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="home.php"><h1><span class="fa fa-smile-o"  aria-hidden="true"></span>India Post</h1></a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="active" ><a href="home.php">Home</a></li>
				
				<li  class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown"> Employee<b class="caret"></b></a>
					<div class="dropdown-menu">
						<div class="track-w3ls">
					
							<a  href="admin.php">REGISTER</a><br>
							<a href="upemp.php">UPDATE</a><br>
							<a href="upemps.php">SEARCH</a>
						</div>
					</div>
				</li>
								<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">Post office<b class="caret"></b></a>
					<div class="dropdown-menu">
						<div class="track-w3ls">
					
							<a  href="posta.php">REGISTER</a><br>
							<a href="psearch.php">UPDATE</a><br>
							<a href="search.php">SEARCH</a>
						</div>
					</div>
				</li>
								<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">unique id<b class="caret"></b></a>
					<div class="dropdown-menu">
						<div class="track-w3ls">
					
							
							<a href="auidsearch.php">UPDATE</a><br>
							<a href="auidsearchp.php">SEARCH</a>
						</div>
					</div>
				</li>
								
				
				<li><a href="logout.php">logout</a></li>
				
			</ul>
        </div><!--/.nav-collapse -->
    </div>
</nav>
<!-- banner section -->
<section class="banner-w3ls">
	<div class='header'>
		<div class="banner-w3layouts">
			<div class="container">
				<h2 class="text-center w3 w3l agileinfo">Welcome To India Post</h2>	
				<p class="text-center w3 w3l agileinfo">This website belongs to Department of Posts, Ministry of Communications, Government of India.</p>
			</div>
		</div>
	</div>
</section>
<!-- /banner section -->
<!-- specialization section -->
<section class="special-w3layouts">
	<div class="container">
		<h3 class="text-center wthree w3-agileits">Our Specialities</h3>
		<p class="text-center wthree w3-agileits">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<img src="images/eye.png" alt="" class="img-responsive">
			<h4 class="text-center">Automated Tracking</h4>
			<p class="special-p1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<img src="images/monitor.png" alt="" class="img-responsive">
			<h4 class="text-center">Tracking API</h4>
			<p class="special-p1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<img src="images/shop.png" alt="" class="img-responsive">
			<h4 class="text-center">Ecommerce Integration</h4>
			<p class="special-p1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<img src="images/truck.png" alt="" class="img-responsive">
			<h4 class="text-center">Delivered In Time</h4>
			<p class="special-p1">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		</div>
		<div class="clearfix"></div>
	</div>
</section>
<!-- /specialization section -->
<!-- 2nd banner section -->
<section class="banner-w3ls2">
	<div class="container">
		<h3 class="text-center agileits-w3layouts agile w3-agile">Giving The Best Services</h3>
	</div>
</section>
<!-- /2nd banner section -->
<!-- 2nd info section -->
<section class="info-w3ls2">
	<div class="container">
		<i class="fa fa-trophy" aria-hidden="true"></i>
		<h3 class="text-center agileits-w3layouts agile w3-agile">Always Delivering Best Of Our Services</h3>
		<p class="text-center">Nam commodo viverra lectus, tempor vehicula libero varius convallis. Nullam placerat, eros non efficitur vulputate, leo nisi interdum odio, sed sodales eros ex vitae nisi.</p>
	</div>
</section>
<!-- /2nd info section -->
<!-- 3rd banner section -->
<section class="banner-w3ls3">
	<div class="container">
		<h3 class="text-center">Making Our Customers Satisfied</h3>
	</div>
</section>
<!-- /3rd banner section -->
<!-- 3rd info section -->
<section class="info-w3ls3">
	<div class="container">
		<i class="fa fa-smile-o" aria-hidden="true"></i>
		<h3 class="text-center">Making Our Customers Happy</h3>
		<p class="text-center">Fusce at aliquet metus. Duis magna lorem, mollis tincidunt felis sit amet, efficitur consequat lorem. In eget accumsan enim, id congue est.</p>
	</div>
</section>
<!-- /3rd info section -->
<!-- footer section -->
<section class="footer-agileits">
	<div class="container">
		<div class="col-lg-3 col-md-3 col-sm-6">
			<h3>More Info</h3>
			<ul class="info-links">
				<li><a href="about.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> About Us</a></li>
				<li><a href="contact.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Contact Us</a></li>
				<li><a href="icons.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Icons</a></li>
				<li><a href="privacy.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Privacy Policy</a></li>
			</ul>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<h3>Our Links</h3>
			<ul class="footer-links">
				<li><a href="service.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Our Services</a></li>
				
				<li><a href="process.html"><i class="fa fa-hand-o-right" aria-hidden="true"></i> Process</a></li>
				
			</ul>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<h3>Contact Info</h3>
			<div class="contact-info">
				<div class="address">	
					<i class="glyphicon glyphicon-globe"></i>
					<p class="p3">Dak Bhawan</p>
					
					<p class="p4">New Delhi, India</p>
				</div>
				<div class="phone">
					<i class="glyphicon glyphicon-phone-alt"></i>
					<p class="p3">1800-11-2011</p>
					<p class="p4">Toll Free 1924</p>
				</div>
				<div class="email-info">
					<i class="glyphicon glyphicon-envelope"></i>
					<p class="p5"><a href="mailto:myemail1@example.com">myemail1@example.com</a></p> 
					<p class="p6"><a href="mailto:myemail2@example.com">myemail2@example.com</a></p>
				</div>
			</div>
		</div>
		<div class="col-lg-3 col-md-3 col-sm-6">
			<h3>Subscribe Us</h3>
			<div class="subscribe">
				<form action="#" method="post">
					<div class="form-group">
						<input type="email" name="email2" class="form-control" id="inputEmail1" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="text" name="user" class="form-control" id="text1" placeholder="Your Name">
					</div>
					<div class="form-group">
						<button type="submit" class="btn-outline">Subscribe</button>
					</div>
				</form>
			</div>	
			<ul class="social-icons2">
				<li><a href="#"><i class="fa fa-facebook"></i></a></li>
				<li><a href="#"><i class="fa fa-twitter"></i></a></li>
				<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
				<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
		<div class="clearfix"></div>
		<hr>
		<p class="copyright">© 2018 Indian Post. All Rights Reserved | Design by <a  target="#">ERROR 404</a></p>
	</div>
</section>
<!-- /footer section -->
<a href="#0" class="cd-top">Top</a>
<!-- js files -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script src="js/index.js"></script>
<script src="js/top.js"></script> 
<script src="js/bgfader.js"></script>
<script>
var myBgFader = $('.header').bgfader([
  'images/banner1-1.jpg',
  'images/banner1-2.jpg',
  'images/banner1-3.jpg',
  'images/banner1-4.jpg',
], {
  'timeout': 2000,
  'speed': 3000,
  'opacity': 0.4
})

myBgFader.start()
</script>
<!-- /js files -->
</body>
</html>
		