<!-- footer -->
	<div class="footer">
		<div class="f-bg-w3l">
				<div class="col-md-4 w3layouts_footer_grid">
					<h3>Recent <span>Works</span></h3>
					 <ul class="con_inner_text midimg">
						<li><a href="#"><img src="images/banner22.jpg" alt="" class="img-responsive" /></a></li>
					    <li><a href="#"><img src="images/banner33.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="images/banner44.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="images/banner11.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="images/banner22.jpg" alt="" class="img-responsive" /></a></li>
					    <li><a href="#"><img src="images/banner33.jpg" alt="" class="img-responsive" /></a></li>
						 <li><a href="#"><img src="images/banner11.jpg" alt="" class="img-responsive" /></a></li>
						<li><a href="#"><img src="images/banner44.jpg" alt="" class="img-responsive" /></a></li>
				     </ul>
					
				</div>
				<div class="col-md-4 w3layouts_footer_grid">
					<h3>Our <span>Links</span> </h3>
					  <ul class="links">
							<li><a href="index.php">Home</a></li>
							<?php if (isset($_SESSION['id']) && $_SESSION['id'] != '') { ?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">We help you? <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="supplements.php">Supplements</a></li>
									<li><a href="equipment.php">Equipments</a></li>
									<li><a href="video.php">Videos</a></li>
								</ul>
							</li>
							<li><a href="feedback.php" >Feedback</a>
							</li>
							<li><a href="about.php" >About</a></li>	
							<li><a href="contact.php" >Contact Us</a></li>
							<?php } else { ?>
							<li><a href="video_free.php" >Videos</a>
							</li>
							<li><a href="about.php">About</a></li>
							<li><a href="contact.php" >Contact Us</a></li>
							<?php } ?>
						</ul>
				</div>
				<div class="col-md-4 w3layouts_footer_grid">
					<h2>Contact <span>Us</span></h2>
					    <ul class="con_inner_text">
							<li><span class="fa fa-map-marker" aria-hidden="true"></span>Raj palace Vohrawad<label>Godhra City.</label></li>
							<li><span class="fa fa-envelope-o" aria-hidden="true"></span> <a href="#">blinkfit09@gmail.com</a></li>
							<li><span class="fa fa-phone" aria-hidden="true"></span> +91 9825852530</li>
						</ul>

					<!-- <ul class="social_agileinfo">
						<li><a href="#" class="w3_facebook"><i class="fa fa-facebook"></i></a></li>
						<li><a href="#" class="w3_twitter"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#" class="w3_instagram"><i class="fa fa-instagram"></i></a></li>
						<li><a href="#" class="w3_google"><i class="fa fa-google-plus"></i></a></li>
					</ul> -->
				</div>


				<div class="clearfix"> </div>
					
			</div>
			<p class="copyright">© 2018 Blink Fit. All Rights Reserved | Design by <a href="" target="_blank" style="text-decoration:blink;">Zubair</a></p>
	</div>
	<!-- //footer -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<!-- //js -->
	<!-- Slider script -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		// You can also use "$(window).load(function() {"
		$(function () {
			$("#slider").responsiveSlides({
				auto: true,
				nav: true,
				manualControls: '#slider3-pager',
			});
		});
	</script>
	<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>

	<!-- for testimonials slider-js-file-->
			<script src="js/owl.carousel.js"></script>
	<!-- //for testimonials slider-js-file-->
		<script>
		$(document).ready(function() { 
		$("#owl-demo").owlCarousel({
 
			autoPlay: 3000, //Set AutoPlay to 3 seconds
			autoPlay:true,
			items : 3,
			itemsDesktop : [640,5],
			itemsDesktopSmall : [414,4]
		});
		}); 
</script>
<!-- for testimonials slider-js-script-->
<!-- stats -->
	<script src="js/jquery.waypoints.min.js"></script>
	<script src="js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
	<!-- //stats -->

</body>

</html>