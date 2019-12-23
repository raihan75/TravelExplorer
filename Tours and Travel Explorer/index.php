<?php require 'inc/header.php'; ?>
	<!-- //header -->
	<!-- banner-text -->
		<div class="banner-text"> 
			<h2>Hundreds of Destinations Worldwide</h2>
			<div class="book-form" id="register">
			<p>Pick your destination</p>
			   <form action="search.php" method="post">
					<div class="col-md-3 form-time-w3layouts">
							<label>Travelling From</label>
							<select name="dist" class="form-control" required>
								<option value="">From</option>
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
			<div class="banner-btm-agileits">
				<div class="col-md-4 bann-left-w3-agile">
					<h3><span>24/7</span>Support</h3>
				</div>
				<div class="col-md-4 button-agileits">
					<a href="#contact" class="hvr-ripple-out scroll">Get in touch</a>
				</div>
				<div class="col-md-4 bann-right-wthree">
					<i class="fa fa-envelope-o" aria-hidden="true"></i>
					<a href="mailto:info@example.com">info@example.com</a>
				</div>
			</div>
		</div>
	</div>
</div>
</div>
<!-- //banner -->
<!-- about -->
<!-- banner-bottom -->
	<div class="about" id="about">
			<div class="col-md-6 banner_bottom_right">
				<div class="wthree_banner_bottom_right_grids">
					<div class="col-md-6 banner_bottom_right_grid">
						<div class="view view-tenth color1-w3">
							<div class="agile_text_box">
								<h3>More Than 7M Visitors Each Month</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adip.</p>
							</div>
							<div class="mask">
								<img src="images/a1.jpg" class="img-responsive" alt="" />
							</div>
						</div>
					</div>
					<div class="col-md-6 banner_bottom_right_grid one-w3ls">
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="wthree_banner_bottom_right_grids">
					<div class="col-md-6 banner_bottom_right_grid two-w3ls">
					</div>
					<div class="col-md-6 banner_bottom_right_grid">
						<div class="view view-tenth color2-w3">
							<div class="agile_text_box">
								<h3>Fast and Reliable Ticket Booking</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adip.</p>
							</div>
							<div class="mask">
								<img src="images/a4.jpg" class="img-responsive" alt="" />
							</div>
						</div>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="col-md-6 banner_bottom_left">
				<h3 class="title-agileits-w3layouts white-w3ls">Welcome to Wacky Trip</h3>
				<h4>A few words about us</h4>
				<p class="para-w3l">Quis nostrum exercitationem ullam corporis suscipit 
					laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure 
					reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, 
					vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
				<div class="button-agileits">
					<a href="#register" class="hvr-ripple-out destination-w3ls scroll">Register</a>
					<a href="#" class="hvr-ripple-out" data-toggle="modal" data-target="#myModal2">Read More</a>
				</div>
			</div>
			<div class="clearfix"> </div>
	</div>
<!-- banner-bottom -->
<!-- Modal2 -->
						<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
							<div class="modal-dialog">
							<!-- Modal content-->
								<div class="modal-content">
									<div class="modal-header">
										<button type="button" class="close" data-dismiss="modal">&times;</button>
										<h4>Wacky Trip</h4>
										<img src="images/banner.jpg" alt=" " class="img-responsive">
										<h5>More Than 7M Visitors Each Month</h5>
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting.</p>
									</div>
								</div>
							</div>
						</div>
<!-- //Modal2 -->
<!-- //about -->
<!-- services -->
<div class="services" id="services">
	<div class="container">
	<h3 class="title-agileits-w3layouts">How to find the path to your dream trip</h3>
	<div class="col-md-5 services-left-agileinfo">
		<div class="profile-pic-w3ls">
		<div class="pic-w3layouts">
			<img src="images/prof1.jpg" alt="Image">
		</div>
			<h5>Jack anderson<span>Co-Founder</span></h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu sollicitudin metus. Donec quis mauris velit. Praesent eu faucibus enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra,</p>
		</div>
		<div class="profile-btm-w3l profile-pic-w3ls">
			<i class="fa fa-quote-right" aria-hidden="true"></i>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu sollicitudin metus. Donec quis mauris velit. Praesent eu faucibus enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra,</p>
			<h6>Nicholas Rodriguez</h6>
		</div>
		<div class="clearfix"> </div>
	</div>
	<div class="col-md-7 services-right-agileits">
		<div class="services-services">
			<div class="services-grids">
				<h6>Hotel Booking</h6>
			</div>
			<div class="services-grids">
				<h6>Air flights</h6>
			</div>
			<div class="services-grids">
				<h6>Car rentals</h6>
			</div>
			<div class="services-grids">
				<h6>Travel guides</h6>
			</div>
			<div class="services-grids">
				<h6>travel insurance</h6>
			</div>
			<div class="services-grids">
				<h6>destinations</h6>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="profile-pic-w3ls">
		<div class="pic-w3layouts">
			<img src="images/prof2.jpg" alt="Image">
		</div>
			<h5>Margaret Lucas<span>Travel Advisor</span></h5>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam eu sollicitudin metus. Donec quis mauris velit. Praesent eu faucibus enim. Class aptent taciti sociosqu ad litora torquent per conubia nostra,</p>
		</div>
	</div>
	</div>
</div>
<!-- //services -->
<!--team-->
<div class="team" id="team">
	<div class="w3agile-spldishes">
		<div class="container">
			<h3 class="title-agileits-w3layouts white-w3ls">Meet Our Team</h3>
			<div class="spldishes-agileinfo">
				<div class="spldishes-grids">
					<!-- Owl-Carousel -->
					<div id="owl-demo" class="owl-carousel text-center agileinfo-gallery-row">
						<div class="item g1">
							<img class="lazyOwl" src="images/t1.jpg" title="Our Team" alt=""/>
							<div class="agile-dish-caption">
								<h4>Jack Anderson</h4>
								<p>Co-Founder</p>
								<span>Neque porro quisquam est qui dolorem Lorem ipsum dolor sit amet. </span>
								<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="item g1">
							<img class="lazyOwl" src="images/t2.jpg" title="Our Team" alt=""/>
							<div class="agile-dish-caption">
								<h4>Margaret Lucas</h4>
								<p>Travel Advisor</p>
								<span>Neque porro quisquam est qui dolorem Lorem ipsum dolor sit amet. </span>
								<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="item g1">
							<img class="lazyOwl" src="images/t3.jpg" title="Our Team" alt=""/>
							<div class="agile-dish-caption">
								<h4>Randy McDonald</h4>
								<p>Travel Advisor</p>
								<span>Neque porro quisquam est qui dolorem Lorem ipsum dolor sit amet. </span>
								<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="item g1">
							<img class="lazyOwl" src="images/t4.jpg" title="Our Team" alt=""/>
							<div class="agile-dish-caption">
								<h4>Jason Carlson</h4>
								<p>Travel Agent</p>
								<span>Neque porro quisquam est qui dolorem Lorem ipsum dolor sit amet. </span>
								<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
						<div class="item g1">
							<img class="lazyOwl" src="images/t5.jpg" title="Our Team" alt=""/>
							<div class="agile-dish-caption">
								<h4>Nicholas Doe</h4>
								<p>Cruise Master Agent</p>
								<span>Neque porro quisquam est qui dolorem Lorem ipsum dolor sit amet. </span>
								<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div> 
						<div class="item g1">
							<img class="lazyOwl" src="images/t6.jpg" title="Our Team" alt=""/>
							<div class="agile-dish-caption">
								<h4>Debra Lucas</h4>
								<p>Travel Agent</p>
								<span>Neque porro quisquam est qui dolorem Lorem ipsum dolor sit amet. </span>
								<ul class="top-links">
									<li><a href="#"><i class="fa fa-facebook"></i></a></li>
									<li><a href="#"><i class="fa fa-twitter"></i></a></li>
									<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
									<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
								</ul>
							</div>
						</div>
					</div> 
				</div>  
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
</div>
<!--//team-->
	<!-- gallery -->
	<div class="gallery" id="gallery">
		<div class="container">  
			<h3 class="title-agileits-w3layouts">Popular destinations</h3>
			<div class="gallery-grids-top">
				<div class="gallery-grids">
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img"> 
						<a class="example-image-link w3-agilepic" href="images/s1.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/s1.jpg" alt=""/> 
							<div class="w3ls-overlay">
								<h4>Destinations</h4>
							</div> 
						</a> 
					</div>  
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
						<a class="example-image-link w3-agilepic" href="images/s2.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/s2.jpg" alt=""/> 
							<div class="w3ls-overlay">
								<h4>Destinations</h4>
							</div> 
						</a> 
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
						<a class="example-image-link w3-agilepic" href="images/s3.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/s3.jpg" alt=""/> 
							<div class="w3ls-overlay">
								<h4>Destinations</h4>
							</div> 
						</a> 
					</div>
					<div class="col-md-6 col-sm-6 col-xs-6 gallery-grid-img gallery-mdl hover ehover14"> 
						<a class="example-image-link w3-agilepic" href="images/s4.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/s4.jpg" alt=""/> 
							<div class="w3ls-overlay">
								<h4>Destinations</h4>
							</div> 
						</a>
					</div>  
					<div class="col-md-6 col-sm-6 col-xs-6 gallery-grid-img gallery-mdl hover ehover14">
						<a class="example-image-link w3-agilepic" href="images/s5.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/s5.jpg" alt=""/>
							<div class="w3ls-overlay">
								<h4>Destinations</h4>
							</div> 
						</a> 
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14"> 
						<a class="example-image-link w3-agilepic" href="images/s6.jpg" data-lightbox="example-set" data-title="">
						<img class="example-image img-responsive" src="images/s6.jpg" alt=""/>
							<div class="w3ls-overlay">
								<h4>Destinations</h4>
							</div> 
						</a> 
					</div>  
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
						<a class="example-image-link w3-agilepic" href="images/s7.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/s7.jpg" alt=""/> 
							<div class="w3ls-overlay">
								<h4>Destinations</h4>
							</div> 
						</a> 
					</div>
					<div class="col-md-4 col-sm-4 col-xs-6 gallery-grid-img hover ehover14">
						<a class="example-image-link w3-agilepic" href="images/s8.jpg" data-lightbox="example-set" data-title="">
							<img class="example-image img-responsive" src="images/s8.jpg" alt=""/>
							<div class="w3ls-overlay">
								<h4>Destinations</h4>
							</div> 
						</a>
					</div>	
					<div class="clearfix"> </div>	
				</div> 
			</div> 
		</div>
	</div>
	<!-- //gallery -->  

<!-- testimonials -->
	<div class="testimonials" id="testimonials">
		<div class="container">
		<h3 class="title-agileits-w3layouts white-w3ls">Trusted Customers</h3>
			<div class="w3_testimonials_grids">
				<section class="slider_test_monials">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3_testimonials_grid_left">
									<p>" Morbi cursus, turpis quis laoreet blandit, odio turpis imperdiet nisl, 
										quis bibendum lorem purus lobortis nunc. Suspendisse tincidunt eu sapien 
										pellentesque interdum. Aenean lacus sapien, blandit vel nibh in, imperdiet 
										egestas erat.</p>
								</div>
								<div class="w3_testimonials_grid_right">
									<img src="images/test1.jpg" alt=" " class="img-responsive" />
								</div>
								
							</li>
							<li>
								<div class="w3_testimonials_grid_left">
									<p>" Morbi cursus, turpis quis laoreet blandit, odio turpis imperdiet nisl, 
										quis bibendum lorem purus lobortis nunc. Suspendisse tincidunt eu sapien 
										pellentesque interdum. Aenean lacus sapien, blandit vel nibh in, imperdiet 
										egestas erat.</p>
								</div>
								<div class="w3_testimonials_grid_right">
									<img src="images/test2.jpg" alt=" " class="img-responsive" />
								</div>
							</li>
							<li>
								<div class="w3_testimonials_grid_left">
									<p>" Morbi cursus, turpis quis laoreet blandit, odio turpis imperdiet nisl, 
										quis bibendum lorem purus lobortis nunc. Suspendisse tincidunt eu sapien 
										pellentesque interdum. Aenean lacus sapien, blandit vel nibh in, imperdiet 
										egestas erat.</p>
								</div>
								<div class="w3_testimonials_grid_right">
									<img src="images/test3.jpg" alt=" " class="img-responsive" />
								</div>
							</li>
							<li>
								<div class="w3_testimonials_grid_left">
									<p>" Morbi cursus, turpis quis laoreet blandit, odio turpis imperdiet nisl, 
										quis bibendum lorem purus lobortis nunc. Suspendisse tincidunt eu sapien 
										pellentesque interdum. Aenean lacus sapien, blandit vel nibh in, imperdiet 
										egestas erat.</p>
								</div>
								<div class="w3_testimonials_grid_right">
									<img src="images/test4.jpg" alt=" " class="img-responsive" />
								</div>
							</li>
						</ul>
					</div>
				</section>
				</div>
				</div>
	</div>
<!-- //testimonials -->	
<div class="contact" id="contact">
	<div class="container">  
	<h3 class="title-agileits-w3layouts">Contact Us</h3>
					<form action="#" method="post">
					<div class="col-md-6">
						<div class="styled-input agile-styled-input-top">
							<input type="text" name="Name" required="">
							<label>Name</label>
							<span></span>
						</div>
						<div class="styled-input">
							<input type="email" name="Email" required=""> 
							<label>Email</label>
							<span></span>
						</div> 
						<div class="styled-input">
							<input type="text" name="Subject" required="">
							<label>Subject</label>
							<span></span>
						</div>
					</div>
					<div class="col-md-6">
						<div class="styled-input textarea-w3ls">
							<textarea name="Message" required=""></textarea>
							<label>Message</label>
							<span></span>
						</div>	 
						<input type="submit" value="SEND">
					</div>
					</form>
					<div class="clearfix"> </div>	
</div>
</div>
<div class="map-w3-agile">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1401095.1797624144!2d7.051648809385445!3d46.695591802572785!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x479aa7f454717f6d%3A0x452444bf73cbc87a!2sBest+of+Switzerland+Tours+AG!5e0!3m2!1sen!2sin!4v1494325075835"></iframe>
</div>
	
<?php require 'inc/footer.php'; ?>