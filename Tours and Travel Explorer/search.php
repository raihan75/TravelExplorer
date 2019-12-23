<?php require 'inc/header.php'; ?>
 <!-- //header -->
	<!-- banner-text -->
		<div class="banner-text"> 
			
			<div class="book-form" id="register">
			<p>Pick your destination</p>
			   <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<div class="col-md-3 form-time-w3layouts">
							<label>Travelling From</label>
							<select name="dist" class="form-control">
								<option>From</option>
								<?php $sql="SELECT * FROM disctrict";
								if ($result=mysqli_query($con,$sql)) {
									while ($row=mysqli_fetch_assoc($result)) {
										echo "<option value=".$row['dist_name'].">".$row['dist_name']."</option>";
									}
								 } ?>
							</select>
					</div>
					<div class="col-md-3 form-left-agileits-w3layouts ">
							<label>Travelling To</label>
							<select name="heritage" class="form-control">
								<option>To</option>
								<?php $sql="SELECT * FROM heritage";
								if ($result=mysqli_query($con,$sql)) {
									while ($row=mysqli_fetch_assoc($result)) {
										echo "<option value=".$row['name'].">".$row['name']."</option>";
									}
								 } ?>
							</select>
					</div>
					<div class="col-md-3 form-date-w3-agileits">
						        <label>Departure Date</label>
									<input id="datepicker1" name="date" type="text" value="mm/dd/yyyy" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'mm/dd/yyyy';}" required="">
								</div>
					<div class="col-md-3 form-left-agileits-submit">
						  <input type="submit" value="search">
					</div>
				</form>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- //banner -->
<section class="search-result">
<div class="container">
	<!-- Search Result -->
		<?php 
		$dist=$_POST['dist'];
		$heritage=$_POST['heritage'];
		$date=$_POST['date'];
		$sql="SELECT * FROM package WHERE from_dist LIKE '%".$dist."%' OR to_heritage LIKE '%".$heritage."%' OR date LIKE '%".$date."%'";
		if ($result=mysqli_query($con,$sql)) {
			while ($row=mysqli_fetch_assoc($result)) { ?>
				<div class="single-result">
					<h1><a href="package.php?id=<?php echo $row['id']; ?>"><?php echo $row['name']; ?></a></h1>
					<hr>
					<div class="row">
						<div class="col-md-6">
							<p><span>From: <?php echo $row['from_dist']; ?></span></p>
							<p>Details: <?php echo substr($row['description'], 0,250)."......"; ?><a href="package.php?id=<?php echo $row['id']; ?>">View more</a></p>
						</div>
						<div class="col-md-6">
							<div class="pull pull-right">
								<p>To: <?php echo $row['to_heritage']; ?></p>
							<p>Price: <?php echo $row['price']; ?></p>
							<a href="order.php?id=<?php echo $row['id']; ?>" class="btn btn-primary">Order Now</a>
							</div>
						</div>
					</div>
				</div>
	<?php	}
		 }else{ ?>
		 	<div class="no-result">
		 		<h1><?php echo "No result found"; ?></h1>
		 	</div>
	<?php 	} ?>

	<!-- /Search Result -->
</div>
	</section>
<?php require 'inc/footer.php'; ?>