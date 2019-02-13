<?php
	require "header.php";
	$sql="SELECT * FROM suppliments";
    $result=mysqli_query($conn,$sql);

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
				<h3 class="w3l_header">All Supple<span>ments Details</span></h3>
			</div>
		<div class="container">
			<!-- <div class="d-flex"> -->
				<!-- <div class="about1"> 
					<h4>CrossFit and TrainHard GYM </h4>
				</div> -->
			<div class="row">
				<?php while ($rows=mysqli_fetch_array($result,MYSQLI_BOTH)){
			    ?>
				<div class="col-md-4 col-sm-6">
					
		    		<span class="thumbnail">
		    		<a href="supplements_dt.php?view=<?php echo $rows['supid']; ?>" >
		      			<img src="admin/<?php echo $rows['sup_img']; ?>" alt="..." height="250px" width="250px">
		      			<h4><?php echo $rows['sup_name']; ?></h4>
		      			<hr class="line">
		      			<div class="row">
		      				<div class="col-md-6 col-sm-6">
		      					<a class="btn btn-black1" href="purchase_supplements.php?view=<?php echo $rows['supid']; ?>" ><img src="images/buy.png" height="30px" width="30px"> Buy Now</a>
		      					</a>
		      				</div>
		      				<div class="col-md-6 col-sm-6">
		      					<a href="supplements_dt.php?view=<?php echo $rows['supid']; ?>" >
		      				 	<button class="btn btn-black1 right" ><img src="images/det.png" height="30px" width="30px"><br> Show Details</button>
		      				 	</a>
		      				</div>
		      			</div>
		      			</a>
		    		</span>
		  		</div>
				<?php } ?>
			</div>
			<!-- </div> -->
			
		</div>
	</div>
	<!-- //About us -->
<?php require "footer.php"; ?>