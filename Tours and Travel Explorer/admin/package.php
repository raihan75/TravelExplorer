<?php require 'header.php'; ?>
<style>
	select#district,select#heritage {
    padding: 0px;
}
</style>
<div class="clearfix"></div>
<!-- //w3_agileits_top_nav-->
<!-- /inner_content-->
<div class="inner_content">
	<!-- /inner_content_w3_agile_info-->
	<?php if (isset($_GET['action'])) {
		if ($_GET['action']=='create') {?>
			<!-- breadcrumbs -->
	<div class="w3l_agileits_breadcrumbs">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="index.php">Home</a><span>«</span></li>
				<li>Packages<span>«</span></li>
				<li>Add Package</li>
			</ul>
		</div>
	</div>
	<?php
	$msg=array();
	 if ($_POST) {
		$name=$_POST['name'];
		$dept_dist=$_POST['district'];
		$heritage=$_POST['heritage'];
		$cost=$_POST['cost'];
		$duration=$_POST['duration'];
		$dept_loc=$_POST['dept_loc'];
		$date=$_POST['date'];
		$desc=$_POST['desc'];
		$sql="INSERT INTO `package` (`id`, `name`, `from_dist`, `to_heritage`, `price`, `days`, `tour_date`, `dept_loc`, `description`) VALUES (NULL, '$name', '$dept_dist', '$heritage', '$cost', '$duration', '$date', '$dept_loc', '$desc');";
		if (mysqli_query($con,$sql)) {
			$msg[]="Package is created successfully";
		}else{
			$msg[]="Package is not created";
		}
	} ?>
<div class="graph-form agile_info_shadow">
	<h3 class="w3_inner_tittle two">Create a package </h3>
	<div class="form-body">
		<?php foreach ($msg as $key => $value) {
			echo $value;
		} ?>
		<form action="<?php echo $_SERVER['PHP_SELF']; ?>?action=create" method="POST"> 
			<div class="row">
				<div class="col-md-6">
					<div class="form-group"> 
				<label for="name">Name</label>
				<input type="text" name="name" class="form-control" id="name" placeholder="Package name"> 
			</div> 
			
				</div>
				<div class="col-md-6">
					
			<div class="form-group"> 
				<label for="district">Departure district</label>
				<?php $sql="SELECT * FROM disctrict";
				if ($rst=mysqli_query($con,$sql)) {
					echo '<select name="district" id="district" class="form-control">';
					while ($row=mysqli_fetch_assoc($rst)) {
						echo '<option value="'.$row['id'].'">'.$row['dist_name'].'</option>';
					}
					echo "</select>";
				 } ?> 
			</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6">
					
			<div class="form-group"> 
				<label for="heritage">Heritage name</label>
				<select name="heritage" class="form-control" id="heritage" placeholder="Departure district">
					<option value="">Select a heritage</option>
					<?php $sql="SELECT * FROM heritage";
					if ($rst=mysqli_query($con,$sql)) {
						while ($row=mysqli_fetch_assoc($rst)) {
							echo '<option value="'.$row['id'].'">'.$row['name'].'</option>';
						}
						
					 } ?> 
				</select>
			</div>
			

				</div>
				<div class="col-md-6">
								<div class="form-group"> 
				<label for="cost">Package cost</label>
				<input type="number" name="cost" class="form-control" id="cost" placeholder="Package cost"> 
			</div>

				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="form-group"> 
				<label for="duration">Package duration</label>
				<input type="number" name="duration" class="form-control" id="duration" placeholder="Package duration"> 
			</div>

				</div>
				<div class="col-md-4">
					
			<div class="form-group"> 
				<label for="dept_loc">Departure location</label>
				<input type="text" name="dept_loc" class="form-control" id="dept_loc" placeholder="Departure location"> 
			</div>
				</div>
				<div class="col-md-4">
					<div class="form-group"> 
				<label for="date">Package date</label>
				<input type="date" name="date" class="form-control" id="date" placeholder="package date">
			</div>
				</div>
			</div>

			<div class="form-group"> 
				<label for="desc">Description</label>
				<textarea name="desc" class="form-control" id="desc" placeholder="Description of package"></textarea>
			</div>

			<button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
</div>
	
		<?php }
		elseif ($_GET['action']=='update') { ?>
			<!-- breadcrumbs -->
	<div class="w3l_agileits_breadcrumbs">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="index.php">Home</a><span>«</span></li>
				<li>Packages<span>«</span></li>
				<li>Update Package</li>
			</ul>
		</div>
	</div>
	<!-- /Breadcrumbs -->
	
	<?php	}
		elseif ($_GET['action']=='delete') {?>
		<!-- breadcrumbs -->
	<div class="w3l_agileits_breadcrumbs">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="index.php">Home</a><span>«</span></li>
				<li>Packages<span>«</span></li>
				<li>Delete Package</li>
			</ul>
		</div>
	</div>
	<!-- /Breadcrumbs -->
	
	<?php 	}
	}else{?>
	<!-- breadcrumbs -->
	<div class="w3l_agileits_breadcrumbs">
		<div class="w3l_agileits_breadcrumbs_inner">
			<ul>
				<li><a href="index.php">Home</a><span>«</span></li>
				<li>Packages<span>«</span></li>
				<li>Manage Package</li>
			</ul>
		</div>
	</div>
	<!-- /Breadcrumbs -->
	<div class="graph-form agile_info_shadow">
	<?php $sql="SELECT * FROM package";
	if ($result=mysqli_query($con,$sql)) { ?>
	<table class="display table table-hover" id="myTable" cellspacing="0" width="100%">
	<thead>
		<tr>
			<th>#</th>
			<th>Package name</th>
			<th>Price</th>
			<th>Days</th>
			<th>Date</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
	<?php	$i=1;
	while ($row=mysqli_fetch_assoc($result)) {?>
	<tr>
		<td><?php echo $i++; ?></td>
		<td><?php echo $row['name']; ?></td>
		<td><?php echo $row['price']; ?></td>
		<td><?php echo $row['days']; ?></td>
		<td><?php echo substr($row['date'], 0,10); ?></td>
		<td><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=update&id=<?php echo $row['id']; ?>"><button class="btn btn-success btn-xs"><span class="glyphicon glyphicon-edit"></span></button></a>
		<a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=delete&id=<?php echo $row['id']; ?>"><button class="btn btn-danger btn-xs"><span class="glyphicon glyphicon-trash"></span></button></a></td>

	</tr>
	<?php	} ?>
	</tbody>
	</table>
	<?php } ?>
	 </div>
	<?php	} ?>
</div>
<?php require 'footer.php'; ?>