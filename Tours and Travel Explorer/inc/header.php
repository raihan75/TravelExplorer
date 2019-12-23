<?php session_start();
require 'database.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Wacky Trip a Travel Agency Category Bootstrap responsive Website Template | Home :: w3layouts</title>
<!-- meta-tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Wacky Trip Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //meta-tags -->

<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/font-awesome.css" rel="stylesheet"> 
<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all"/> <!-- Owl-Carousel-CSS -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link rel="stylesheet" href="css/lightbox.css">
<!--web-fonts-->
<link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
<link href="//fonts.googleapis.com/css?family=Tangerine:400,700" rel="stylesheet">
<!--//web-fonts-->

<!-- custom css -->
<link rel="stylesheet" href="css/main.css">
<style>
	.navbar-nav > li {
    float: left;
    margin-right: 0px;
}
</style>
</head>
<body>
<!-- banner -->
	<div class="banner" id="home">
<div class="agileinfo-dot">
<div class="container">
		<!-- header -->
		<header>
			<!-- navigation -->
			<div class="w3_navigation">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<div class="w3_navigation_pos">
						<h1><a href="index.php"><span>W</span>acky <span>T</span>rip</a></h1>
					</div>
				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="cl-effect-4" id="cl-effect-4">
						<ul class="nav navbar-nav menu__list">
							<?php if (!isset($_SESSION['admin'])) {
								echo '<li><a href="index.php">Home</a></li>';
							} ?>
							<li><a href="#about" class=" scroll">About</a></li>
							<li><a href="#team" class=" scroll">Team</a></li>
							<li><a href="#gallery" class=" scroll">Destinations</a></li>
							<li><a href="package.php">Packages</a></li>
							<li><a href="#contact" class=" scroll">Contact</a></li>
							<?php if (isset($_SESSION['admin'])) {
								echo '<li><a href="admin">Dashboard</a></li>';
							} ?>
							<?php if (isset($_SESSION['email'])||isset($_SESSION['admin'])) {
								echo '<li><a href="logout.php">Logout</a></li>';
							}else{
								echo '<li><a href="login.php">Login</a></li>';
								} ?>
						</ul>
					</nav>
				</div>
			</nav>	
	</div>
	<div class="clearfix"></div>
		<!-- //navigation -->
		</header>