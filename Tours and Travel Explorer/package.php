<?php require 'inc/header.php'; ?>
</div>
</div>
</div>
<?php if (isset($_SESSION['email'])) {
	$email=$_SESSION['email'];
} ?>
<?php if (isset($_GET['id'])) {
	$id=$_GET['id'];
	
	if ($_POST) {
		$rating=$_POST['rating'];
		$comment=$_POST['comment'];
		$sql="INSERT INTO review(id, email, package_id, rating, comments) VALUES(NULL, '$email','$id','$rating','$comment')";
		if (mysqli_query($con,$sql)) { ?>
			<script>alert('Comment is added successfully')</script>
		<?php }
	}
	$sql="SELECT * FROM package WHERE id='$id'";
	if($result=mysqli_query($con,$sql)){
		while ($row=mysqli_fetch_assoc($result)){ ?>
			<section class="package-details">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="package-meta">
								<h1><?php echo $row['name']; ?></h1>
						<p>From: <?php echo $row['from_dist']; ?><span class="pull pull-right">To: <?php echo $row['to_heritage']; ?></span></p>
							</div>
							<p class="text-justify"><?php echo $row['description']; ?></p>
						</div>
						<div class="col-md-6">
							<div class="row">
								<div class="col-md-6 col-md-offset-3">
									<p>Departure: <?php echo $row['dept_loc']; ?></p>
									<p>Duration: <?php echo $row['days']." days"; ?></p>
									<p>Price: <?php echo $row['price']." BDT"; ?></p>
									<p>Date: <?php echo substr($row['date'], 0,10); ?></p>
									<p>Time: <?php echo substr($row['date'], 11); ?></p>
									<a href="order.php?id=<?php echo $row['id']; ?>" class="btn btn-primary btn-lg">Order</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="container comments">
				<h3 class="alert alert-info">Comments and feedback</h3>
				<?php
				$query="SELECT * FROM review JOIN client WHERE package_id='$id' AND client.email=review.email";
				 if ($result=mysqli_query($con,$query)) {
					while ($row=mysqli_fetch_assoc($result)) { ?>
						<div class="single-comment">
							<h3><a href=""><?php echo $row['c_name']; ?></a></h3>
							<strong>Ratings:</strong><span>
								<?php for ($i=0;$i<$row['rating'];$i++) {
									echo "<span class='glyphicon glyphicon-star'></span>";									
								} ?>
							</span>
							<p><?php echo $row['comments']; ?></p>
						</div>
			<?php	}
				} ?>
				<?php if (isset($_SESSION['email'])) { ?>

					<form action="<?php echo $_SERVER['PHP_SELF']; ?>?id=<?php echo $id; ?>" method="POST">
					  <div class="form-group">
					    <label for="exampleInputEmail1">Select rating</label>
					    <select name="rating" class="form-control" id="exampleInputEmail1" required>
					    	<option value="">Select a rating</option>
					    	<option value="5">Excellent</option>
					    	<option value="4">Best</option>
					    	<option value="3">Good</option>
					    	<option value="2">Average</option>
					    	<option value="1">Bad</option>
					    </select>
					  </div>
						<div class="form-group">
							<label for="comment">Comment</label>
							<textarea name="comment" id="comment" class="form-control" placeholder="Write your comment" rows="8"></textarea> 
						</div>
					  <button class="btn btn-primary">Submit</button>
					</form>
			<?php 	}else{
				echo '<h3 style="color:red;">* Log in to add a review</h3>';
			} ?>
			</div>
<?php	}
	}
}else{ ?>
<section class="search-result">
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<ul class="list-group">
				  <li class="list-group-item active">Filter by price</li>
				  <li class="list-group-item"><a href="package.php?low=0&high=1000"><1000</a></li>
				  <li class="list-group-item"><a href="package.php?low=1000&high=2000">1000-2000</a></li>
				  <li class="list-group-item"><a href="package.php?low=2000&high=5000">2000-5000</a></li>
				  <li class="list-group-item"><a href="package.php?low=5000&high=10000">5000-10K</a></li>
				  <li class="list-group-item"><a href="package.php?low=10000&high=50000">10K-50K</a></li>
				</ul>
			</div>
			<div class="col-md-8">

				<?php
				if (isset($_GET['low'])||isset($_GET['high'])) {
					$low=$_GET['low'];
					$high=$_GET['high'];

					$sql="SELECT * FROM package WHERE price > '$low' AND price < '$high'";
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
	<?php 	}
				 }else{
		$sql="SELECT * FROM package";
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
	<?php 	} } ?>
			</div>
		</div>
	</div>
</section>
<?php	} ?>
<?php require 'inc/footer.php'; ?>