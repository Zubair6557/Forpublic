<?php
	require "connect.php";
	if (isset($_SESSION['id']) && $_SESSION['id'] != '')
	{
		$sql="SELECT * FROM fit_videos ORDER BY video_id DESC limit 6";
    	$result=mysqli_query($conn,$sql);	
	} else {
		$sql="SELECT * FROM fit_videos WHERE video_type='free' ORDER BY video_id DESC limit 6";
	    $result=mysqli_query($conn,$sql);
   	}

?>
<div class="banner_top">
		<div class="slider">
			<div class="wrapper">
				
				<!-- Slideshow 3 -->
				<ul class="rslides" id="slider">
					<li>
						<div class="agile_banner_text_info">
							<h3>Become Strong And Healthy </h3>
							<p>TrainHard is the right place to start new life as an athletic, strong and healthy person with a strong will.</p>
						</div>
					</li>
					<li>
						<div class="agile_banner_text_info">
							<h3>Exceptional Life Fitness </h3>
							<p>TrainHard is the right place to start new life as an athletic, strong and healthy person with a strong will.</p>
						</div>
					</li>
					<li>
						<div class="agile_banner_text_info">
							<h3>Build Your Body With Us </h3>
							<p>TrainHard is the right place to start new life as an athletic, strong and healthy person with a strong will.</p>
						</div>
					</li>
					<li>
						<div class="agile_banner_text_info">
							<h3>Exceptional Life Fitness </h3>
							<p>TrainHard is the right place to start new life as an athletic, strong and healthy person with a strong will.</p>
						</div>
					</li>
				</ul>
				<!-- Slideshow 3 Pager -->
				<ul id="slider3-pager">
					<li><a href="#"><img src="images/banner11.jpg" data-selector="img" alt=""></a></li>
					<li><a href="#"><img src="images/banner22.jpg" data-selector="img" alt=""></a></li>
					<li><a href="#"><img src="images/banner33.jpg" data-selector="img" alt=""></a></li>
					<li><a href="#"><img src="images/banner44.jpg" data-selector="img" alt=""></a></li>

				</ul>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- About us -->
	<div class="about-3">
		<div class="wthree_head_section">
				<h3 class="w3l_header">What We <span>Do?</span></h3>
			</div>
		<div class="container">
			<div class="d-flex">
				
				<div class="about1"> 
					<h4>CrossFit and TrainHard GYM </h4>
					<p class="details">Come in and see how our range of Freestyle Group Training 
					and signature group excercise classes can take your fitness further.</p>
					<ul class="about-list">
						<li>
							<div class="col-md-4 we-w3l">
								<img src="images/1.jpg" alt="" class="img-responsive" />
							</div>
							<div class="col-md-8 in-block">
								<h5>ELEMENTS</h5>
								<p>Best Physical trainers who can make your 
								training session more interesting by giving professional training
								to keep your body fit.</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
						<div class="col-md-4 we-w3l">
								<img src="images/2.jpg" alt="" class="img-responsive" />
							</div>
							<div class="col-md-8 in-block">
								<h5>BOOT CAMP</h5>
								<p>State of the art equipments with best of the 
								training environment.</p>
							</div>
							<div class="clearfix"> </div>
						</li>
						<li>
							<div class="col-md-4 we-w3l">
								<img src="images/3.jpg" alt="" class="img-responsive" />
							</div>
							<div class="col-md-8 in-block">
								<h5>CROSSFIT</h5>
								<p>Easy schedule for training session to suit 
								your daily life style for all age groups.</p>
							</div>
							<div class="clearfix"> </div>
						</li>
					</ul>
				</div>
				<div class="about2">
					
				</div>
			</div>
			
		</div>
	</div>
	<!-- //About us -->
		<div class="ser-agile">
			<div class="container">
				<div class="wthree_head_section">
					<h3 class="w3l_header w3_agileits_header two">Our <span>Classes</span></h3>
				</div>
					<div class="w3l-info">
							<div class="col-md-4 ser-lef-agile">
								<div class="grid1">
									<h5>Sunday, 13.00</h5>
									<h4>AEROBIC CAPACITY</h4>
									<h6>Trainer: Frank Madreno</h6>
								</div>
							</div>
							<div class="col-md-4 ser-lef-agile">
								<div class="grid1">
									<h5>Monday, 13.00</h5>
									<h4>GYMNASTICS PRO</h4>
									<h6>Trainer: Parth Patel</h6>
								</div>
							</div>
							<div class="col-md-4 ser-lef-agile">
								<div class="grid1">
									<h5>Tuesday, 13.00</h5>
									<h4>BEGINNERS LEVEL</h4>
									<h6>Trainer:Vishal Patel</h6>
								</div>
							</div>
								<div class="clearfix"></div>
						</div>
				</div>
		</div>
	<!-- testimonials -->
	<div class="about-3">
		<div class="wthree_head_section">
			<?php if (isset($_SESSION['id']) && $_SESSION['id'] != '') { ?>
				<h3 class="w3l_header">Our All<span> Workouts Videos</span></h3>
			<?php } else { ?>
				<h3 class="w3l_header">Our Free<span> Workouts Videos</span></h3>
			<?php } ?>
			</div>
		<div class="container">
			<div class="row" style="color:white;">
				<?php while ($rows=mysqli_fetch_array($result,MYSQLI_BOTH)){
			    ?>
				<div class="col-md-4 col-lg-4 col-sm-4">
					<center><p><?php echo $rows['video_name']; ?></p></center>
					<video width="100%" height="200px" controls>
					  <source src="admin/<?php echo $rows['video_path']; ?>" type="video/mp4">
					</video>
				</div>
				<?php } ?>
			</div>
			<br><br>
			<?php if (isset($_SESSION['id']) && $_SESSION['id'] != '') { ?>
			<a href="video.php" class="btn btn-warning pull-right">Show More</a>
			<?php } else { ?>
			<a href="video_free.php" class="btn btn-warning pull-right">Show More</a>
			<?php } ?>
		</div>
	</div>
<!-- our blog -->
	<div class="wthree-blog">
	<div class="container">
		<div class="wthree_head_section">
				<h3 class="w3l_header">Our Latest <span>News</span></h3>
			</div>
		<div class="blog1">
			<div class="blog-box">
				<a href="#" data-toggle="modal" data-target="#myModal1"><img src="images/1.jpg" alt="blog image" class="img-responsive" /></a>
				<div class="blog-txt">
					<h3><a href="#" data-toggle="modal" data-target="#myModal1">Best Fitness Centre Award</a></h3>
					<h4>December 15,2017</h4>
					<p>Our fitness centre is providing best of its class training. We are 
					awarded the best of fitness centre at state level</p>
					<!-- Trigger the modal with a button -->
					<!-- <a href="#" data-toggle="modal" data-target="#myModal1">Read More &raquo; </a> -->
					<!-- Modal -->
					
					

				</div>
			</div>
			
		</div>
		<div class="blog2">
			<div class="blog-box">
				<div class="blog-txt">
					<h3><a href="#" data-toggle="modal" data-target="#myModal1">Low Charges with 
					Assured training </a></h3>
					<h4>December 25,2017</h4>
					<p>Blink Fit always offer best of the charges in the fitness training 
					industry so that it can reached by a common people.</p>
					<!-- Trigger the modal with a button -->
					<!-- <a href="#" data-toggle="modal" data-target="#myModal1">Read More &raquo; </a> -->
					<!-- Modal -->
					
				</div>
				<a href="#" data-toggle="modal" data-target="#myModal1"><img src="images/3.jpg" alt="blog image" class="img-responsive" /></a>
				
			</div>
		</div>
		</div>	
	</div>
	<!-- our blog -->