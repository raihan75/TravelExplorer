<?php require 'inc/header.php';

if (!isset($_SESSION['email'])) {
	header('location: login.php');
}
?>
</div>
</div>
</div>
<div class="container">
<?php if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$email=$_SESSION['email'];
	$sql="INSERT INTO orders(id, email, package_id, special_package) VALUES(NULL,'$email','$id', '0')";
	if (mysqli_query($con,$sql)) {
		echo '<div class="alert alert-success alert-dismissible" role="alert" style="margin-top:50px">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Order success!</strong> Order is completed. please generate your pdf</div>';
	}else{
		echo '<div class="alert alert-danger alert-dismissible" role="alert" style="margin-top:50px">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Order error!</strong> Order is not completed. Please Try again.</div>';
	}
	$sql="SELECT * FROM package AS p JOIN client AS c WHERE p.id='$id' AND c.email='$email'";
	if ($result=mysqli_query($con,$sql)) { ?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<table class="table">
<?php 	while ($row=mysqli_fetch_assoc($result)) { ?>
			<tr>
				<td class="text-left">Name: </td>
				<td class="text-right"><?php echo $_SESSION['name'] = $row['c_name']; ?></td>
			</tr>
			<tr>
				<td class="text-left">Email: </td>
				<td class="text-right"><?php echo $row['email']; ?></td>
			</tr>
			<tr>
				<td class="text-left">Package: </td>
				<td class="text-right"><?php echo $_SESSION['package'] = $row['name']; ?></td>
			</tr>
			<tr>
				<td class="text-left">Price: </td>
				<td class="text-right"><?php echo $_SESSION['price'] = $row['price']; ?></td>
			</tr>
			<tr>
				<td class="text-left">Days: </td>
				<td class="text-right"><?php echo $_SESSION['day'] = $row['days']; ?></td>
			</tr>
			<tr>
				<td class="text-left">Visiting date: </td>
				<td class="text-right"><?php echo $_SESSION['date'] = substr($row['date'], 0,10); ?></td>
			</tr>
<?php	} ?>
		</table>
		<a href="form.php" class="btn btn-primary btn-lg pull pull-right">Generate invoice</a>
		
		</div></div>
<?php	}
}
 ?>
</div>
<?php require 'inc/footer.php'; ?>