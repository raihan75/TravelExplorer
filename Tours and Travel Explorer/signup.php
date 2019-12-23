<?php require 'database.php';
$msg=array();
if ($_POST) {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$address=$_POST['address'];
	$phone=$_POST['phone'];
	$sql="INSERT INTO client(id, c_name, email, password, address, phone) VALUES(NULL, '$name','$email','$password','$address','$phone')";
	if (mysqli_query($con, $sql)) {
		$msg[]='<div class="alert alert-success alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Well done!</strong> Account is successfully created </div>';
	}else{
		$msg[]='<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Registration failed!</strong> Account is not created </div>';
	}
}
 ?>
<!DOCTYPE html>
<html lang="zxx">
	<head>
		<title>Esteem  An Admin Panel Category Flat Bootstrap Responsive Website Template | Sign Up :: w3layouts</title>
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
		<link href="admin/css/font-awesome.css" rel="stylesheet">
		<!-- //font-awesome-icons -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	</head>
	<body>
		<!-- /pages_agile_info_w3l -->
		<div class="pages_agile_info_w3l">
			<!-- /login -->
			<div class="over_lay_agile_pages_w3ls two">
				<div class="registration">
					
					<div class="signin-form profile">
						<h2>Sign up Form</h2>
						<div class="login-form">
						<?php foreach ($msg as $key => $value) {
							echo $value;
						} ?>
							<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
								<input type="text" name="name" placeholder="Name" required="">
								<input type="email" name="email" placeholder="E-mail" required="">
								<input type="password" name="password" placeholder="Password" required="">
								<input type="text" name="address" placeholder="Address">
								<input type="text" name="phone" placeholder="Phone number" required="">
								
								<div class="tp">
									<input type="submit" value="SIGN Up">
								</div>
							</form>
						</div>
						
						<p><a href="#"> By clicking Sign Up, I agree to your terms</a></p>
						
						<h6><a href="index.php">Back To Home</a><h6>
					</div>
				</div>
				<!--copy rights start here-->
				<div class="copyrights_agile two">
					<p>© <?php echo date('Y').'-'.(date('Y')+1); ?>. All Rights Reserved | Design by  <a href="http://cse.uiu.ac.bd" target="_blank">UIU Dev Group</a> </p>
				</div>
				<!--copy rights end here-->
			</div>
		</div>
		<!-- /login -->
		<!-- //pages_agile_info_w3l -->
		<!-- js -->
		<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
		<script src="js/modernizr.custom.js"></script>
		
		<script src="js/classie.js"></script>
		<script src="js/gnmenu.js"></script>
		<script>
			new gnMenu( document.getElementById( 'gn-menu' ) );
		</script>
		
		<!-- //js -->
		<script src="js/screenfull.js"></script>
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