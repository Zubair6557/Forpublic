<?php
	require "header.php";
?>
						<ul class="nav navbar-nav">
							<li ><a href="index.php" class="effect-3">Home</a></li>
							<?php if (isset($_SESSION['id']) && $_SESSION['id'] != '') { ?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">We help you? <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="supplements.php">Supplements</a></li>
									<li><a href="equipment.php">Equipments</a></li>
									<li><a href="video.php">Video</a></li>
								</ul>
							</li>
							<li><a href="feedback.php" class="effect-3">Feedback</a>
							</li>
							<li class="active"><a href="about.php" class="effect-3">About</a></li>
							<li><a href="contact.php" class="effect-3">Contact</a></li>
							<?php } else { ?>
							<li><a href="video_free.php" class="effect-3">Videos</a>
							</li>
							<li class="active"><a href="about.php" class="effect-3">About</a></li>
							<li><a href="contact.php" class="effect-3">Contact</a></li>
							<?php } ?>

						</ul>
					</nav>
				</div>
			</nav>
			<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<br><br><br>
<!-- about inner -->
<div class="about-bottom inner-padding">
	<div class="container">
		<div class="wthree_head_section">
			<h3 class="w3l_header">About <span>Us</span></h3>
		</div>
		<div class="about-bott-right">
			<h5>Our goal is to make health and fitness attainable, affordable and approachable.</h5>
			<p style="text-align:left;"><h1>Created to help you live a better, happier, healthier life.</h1></p>
			<p style="text-align:left;">We believe fitness should be accessible to everyone, everywhere, regardless of  access to a gym. That's why we offer 
			free,full-length workout videos, the most affordable and effective workout programs on the web, and helpful 
			health, nutrition and fitness information..</p>
		</div>
		<div class="clearfix"> </div>
	</div>
</div>
<div class="about-agile inner-padding">
	<div class="container">
		<h3 class="heading-agileinfo white-w3ls">TrainHard is the right place to start new life as an athletic, strong and healthy person with a strong will.</h3>
		<p>Ready to try a Blinkfit Fitness workout?.</p>
		<div class="more-button">
			<a href="contact.php">Mail Us</a>
		</div>
	</div>
</div>
<!-- //about inner -->

<?php require "footer.php"; ?>