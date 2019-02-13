<?php
	require "header.php";
	if (isset($_REQUEST['view'])) {
		$sql="SELECT * FROM suppliments WHERE supid='".$_REQUEST['view']."'";
    $result=mysqli_query($conn,$sql);
    $rows=mysqli_fetch_array($result,MYSQLI_BOTH);	
    $_SESSION['supid'] = $rows['supid'];
    $_SESSION['suppname'] = $rows['sup_name'];
    $_SESSION['price'] = $rows['price'];
    $_SESSION['dt']= $rows['sup_dt'];
    $_SESSION['supimg'] = $rows['sup_img'];

	} else{
	?>
	 <br><br><br>
        <div class="about-3">
	<div style="color:white;background-color:red;text-align:center;font-size:18px;">There is no data available</div>
	</div>
	<?php
	}
	$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; 
	// Test Paypal API URL
	$paypal_id='blinkfit09@gmail.com';
	$price123= 65;
	$price1 = $_SESSION['price']/$price123; 

?>
							<ul class="nav navbar-nav">
							<li ><a href="index.php" class="effect-3">Home</a></li>
							<?php if (isset($_SESSION['id']) && $_SESSION['id'] != '') { ?>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle effect-3" data-toggle="dropdown">We help you? <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
								<li><a href="bmr.php" target="_blank">Check BMI</a></li>
									<li class="active"><a href="supplements.php">Supplements</a></li>
									<li><a href="equipment.php">Equipments</a></li>
									<li><a href="video.php">Video</a></li>
								</ul>
							</li>
							<li><a href="news_info.php" class="effect-3">News & Info</a>
							</li>
							<li><a href="feedback.php" class="effect-3">Feedback</a>
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
<style type="text/css">
	.price{
		font-size: 30px;
    	margin: 0 auto;
    	color: #333;
	}

	.thumbnail{
		opacity:0.80;
		-webkit-transition: all 0.5s; 
		transition: all 0.5s;
	}
	.thumbnail:hover{
		opacity:1.00;
		box-shadow: 0px 0px 10px white;
		border: 1px solid black !important;
	}
	.line{
		margin-bottom: 5px;
	}
	@media screen and (max-width: 770px) {
		.right{
			float:left;
			width: 100%;
		}
	}
	span.thumbnail {
        border: 1px solid #FFC107 !important;
    border-radius: 0px !important;
    -webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.16);
    -moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.16);
    box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.16);
	padding: 10px;
}
button {    margin-top: 6px;
}
.right {
    float: right;
    border-bottom: 2px solid #0a5971;
}
.btn-black1 {
    color: white;
    background-color: black;
    border-color: black;
	font-size:13px;
	font-weight:600;
}
.btn-black1:hover {
    color: black;
    background-color: orange;
    border-color: black;
	font-size:13px;
	font-weight:600;
}
</style>
	<!-- About us -->
	<div class="about-3" style="background-image:url('images/banner2.jpg');background-size:cover;">
		<div class="wthree_head_section">
				<h3 class="w3l_header">Supplements Fu<span>ll Details</span></h3>
			</div>
		<div class="container">
			<!-- <div class="d-flex"> -->
				<!-- <div class="about1"> 
					<h4>CrossFit and TrainHard GYM </h4>
				</div> -->
			<div class="row">
				<div class="col-md-12 col-sm-6">
					<span class="thumbnail">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<center><h2><?php echo $_SESSION['suppname']; ?></h2></center>
								<hr class="line">
							</div>
						</div>
						<div class="row">
							<div class="col-md-6 col-sm-6">
			      				<img src="admin/<?php echo $_SESSION['supimg']; ?>" alt="..." height="auto" width="100%">
			      			</div>
			      			<div class="col-md-6 col-sm-6">
				      			<div class="row">
				      				<div class="col-md-12 col-sm-12">
				      					<p style="color:black;font-size:15px;"><br>
				      					<h4>Supplements Price only Rs. <?php echo $_SESSION['price']; ?> /-</h4>
				      					</p><hr>
				      					<p style="color:black;font-size:15px;">
				      						<h3>Details of Supplements</h3><hr>
				      						<?php echo $_SESSION['dt']; ?>
				      					</p>
				      					<br><br>
				      					<div class="form-group pull-right">
	                            	<form action="<?php echo $paypal_url; ?>" method="POST" name="frmPayPal1">

								    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">

								    <input type="hidden" name="cmd" value="_xclick">

								    <input type="hidden" name="item_name" value="<?php echo $_SESSION['suppname']; ?>">
								    <!--
								    <input type="hidden" name="item_number" value="1">
									-->
								    <input type="hidden" name="credits" value="510">

								    <input type="hidden" name="userid" value="1">

								    <input type="hidden" name="amount" value="<?php echo $price1; ?>">

								    <input type="hidden" name="no_shipping" value="1">

								    <input type="hidden" name="handling" value="">	

								    <input type="hidden" name="currency_code" value="USD">

								    <input type="hidden" name="cancel_return" value="http://localhost/Blink_Fit/cancel1.php">

								    <input type="hidden" name="return" value="http://localhost/Blink_Fit/success1.php">

								    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">

								    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">

								    </form>
								</div>
				      				</div>
				      			</div>
				      		</div>
		      			</div>
		    		</span>
		  		</div>
			</div>
			<!-- </div> -->
			
		</div>
	</div>
	<!-- //About us -->
<?php require "footer.php"; ?>