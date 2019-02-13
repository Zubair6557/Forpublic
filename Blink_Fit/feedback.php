<?php
	require "header.php";
	if (isset($_REQUEST['save']))
	{
		$dt2    = $_REQUEST['dt1'];
		$date12 = date('Y-m-d');
		$sql    = "INSERT INTO feedback(feed_date, fedd_dt) 
				   VALUES ('".$date12."','".$dt2."')";
		$res    = mysqli_query($conn,$sql);
	?>
	 <br><br><br>
        <div class="about-3">
    <div style="color:white;background-color:green;font-size:20px;text-align:center;padding-top:15px;padding-bottom:12px;">Feedback is send.</div>
                <script type="text/javascript">
                setTimeout(function () {            
                   window.location.href='index.php'; // the redirect goes here
                },2000);    
            </script> 
            </div>  
  <?php        
  }
?>	
						<ul class="nav navbar-nav">
							<li ><a href="index.php" class="effect-3">Home</a></li>
							<?php if (isset($_SESSION['id']) && $_SESSION['id'] != '') { ?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">We help you? <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
								<li><a href="bmr.php" target="_blank">Check BMI</a></li>
									<li><a href="supplements.php">Supplements</a></li>
									<li><a href="equipment.php">Equipments</a></li>
									<li><a href="video.php">Video</a></li>
								</ul>
							</li>
							<li class="active"><a href="feedback.php" class="effect-3">Feedback</a>
							</li>
							<li><a href="about.php" class="effect-3">About</a></li>
							<li><a href="contact.php" class="effect-3">Contact</a></li>
							<?php } else { ?>
							<li><a href="video_free.php" class="effect-3">Videos</a>
							</li>
							<li><a href="about.php" class="effect-3">About</a></li>
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
	<!-- About us -->
	<div class="about-3" style="background-image:url('images/banner2.jpg');background-size:cover;">
		<div class="wthree_head_section">
				<h3 class="w3l_header">Give <span>Feedback</span></h3>
			</div>
		<div class="container">
			<!-- <div class="d-flex"> -->
				<!-- <div class="about1"> 
					<h4>CrossFit and TrainHard GYM </h4>
				</div> -->
				<div class="row">
					<div class="col-md-2"></div>
			    	<div class="col-md-8">
			    		<div class="panel panel-default" style="padding-top:20px;">
						  	<div class="panel-body">
						    	<form method="POST" role="form">
			                    <fieldset>
						    	  	<div class="form-group">
						    			<textarea class="form-control input-lg" placeholder="Enter Details" name="dt1" rows="8"></textarea> 
						    		</div>
						    		<div class="row">
						    			<div class="col-md-3 col-sm-3"></div>
						    			<div class="col-md-6 col-sm-6">
						    				<input class="btn btn-lg btn-black btn-block" type="submit" value="Send Feedback" name="save">
						    			</div>
						    		</div>
						    	</fieldset>
						      	</form>
						    </div>
						</div>
					</div>
					<div class="col-md-2"></div>
				</div>
			<!-- </div> -->
			
		</div>
	</div>
	<!-- //About us -->
<?php require "footer.php"; ?>

