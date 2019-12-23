<?php require 'database.php'; ?>
<?php 
session_start();
if (isset($_SESSION['admin'])) {
	header('location: admin/index.php');
}

$msg=array();
if ($_POST) {
	$email= $_POST['email'];
	$pass= $_POST['password'];
	$sql="SELECT * FROM admin WHERE email='$email'";
	$result=mysqli_query($con,$sql);
	if ($result->num_rows) {
		$sql="SELECT * FROM admin WHERE email='$email' AND password='$pass'";
		$result=mysqli_query($con,$sql);
		if ($result->num_rows) {
			while ($row=mysqli_fetch_assoc($result)) {
				$_SESSION['admin']=$row['email'];
				header('location: admin/index.php');
			}
		}else{
			$msg[]='<div class="alert alert-danger alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Login failed!</strong> Password incorrect </div>';
		}
	}else{
		$msg[]='<div class="alert alert-warning alert-dismissible" role="alert">
	  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	  <strong>Warning!</strong> Email is not registered.</div>';
	}
}


 ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Login for your newservices</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Esteem Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="admin/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="admin/css/snow.css" rel="stylesheet" type="text/css" media="all" />
<link href="admin/css/component.css" rel="stylesheet" type="text/css" media="all" />
<link href="admin/css/style_grid.css" rel="stylesheet" type="text/css" media="all" />
<link href="admin/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
</head>
<body>
			<!-- /pages_agile_info_w3l -->

						<div class="pages_agile_info_w3l">
							<!-- /login -->
							   <div class="over_lay_agile_pages_w3ls">
								    <div class="registration">
								
												<div class="signin-form profile">
													<h2>Admin login</h2>
													<div class="login-form">
													<?php foreach ($msg as $key => $value) {
														echo $value;
													} ?>
														<form action="" method="post">
															<input type="email" name="email" placeholder="E-mail" required="">
															<input type="password" name="password" placeholder="Password" required="">
															<div class="tp">
																<input type="submit" value="SIGN IN">
															</div>
														</form>
													</div>
													<div class="login-social-grids">
														<ul>
															<li><a href="#"><i class="fa fa-facebook"></i></a></li>
															<li><a href="#"><i class="fa fa-twitter"></i></a></li>
															<li><a href="#"><i class="fa fa-rss"></i></a></li>
														</ul>
													</div>
													<p><a href="signup.php"> Don't have an account?</a></p>
													
													 <h6><a href="index.php">Back To Home</a><h6>
												</div>
										</div>
										<!--copy rights start here-->
											<div class="copyrights_agile">
												 <p>© 2017 Esteem. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
											</div>	
											<!--copy rights end here-->
						    </div>
						</div>
							<!-- /login -->
<!-- //pages_agile_info_w3l -->


<!-- js -->

          <script type="text/javascript" src="admin/js/jquery-2.1.4.min.js"></script>
		  <script src="admin/js/modernizr.custom.js"></script>
		
		   <script src="admin/js/classie.js"></script>
		  <script src="admin/js/gnmenu.js"></script>
		  <script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		 </script>
	
<!-- //js -->

<script src="admin/js/screenfull.js"></script>
		<script>
		$(function () {
			$('#supported').text('Supported/allowed: ' + !!screenfull.enabled);

			if (!screenfull.enabled) {
				return false;
			}

			

			$('#toggle').click(function () {
				screenfull.toggle($('#container')[0]);
			});	
		});
		</script>
<script src="admin/js/jquery.nicescroll.js"></script>
<script src="admin/js/scripts.js"></script>
<script src="admin/js/snow.js"></script>
 <script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-36251023-1']);
  _gaq.push(['_setDomainName', 'jqueryscript.net']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<script type="text/javascript" src="admin/js/bootstrap-3.1.1.min.js"></script>


</body>
</html>