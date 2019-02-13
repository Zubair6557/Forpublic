<?php
	require "header.php";
	require "menu.php";
	$sql="SELECT * FROM packages";
    $result=mysqli_query($conn,$sql);


    $sql1="SELECT * FROM packages";
    $result1=mysqli_query($conn,$sql1);
    $num = mysqli_num_rows($result);

?>	<br><br><br>
	<!-- About us -->
	<div class="about-3" style="background-image:url('images/banner2.jpg');background-size:cover;">
		<div class="wthree_head_section">
				<h3 class="w3l_header">All<span>Packages</span></h3>
			</div>
		<div class="container">
			<!-- <div class="d-flex"> -->
				<!-- <div class="about1"> 
					<h4>CrossFit and TrainHard GYM </h4>
				</div> -->
			<div class="row">
				<table class="table table-border table-hover" cellspacing="5" style="background-color:white;color:black;padding:10px;">
					
				<?php while ($rows=mysqli_fetch_array($result,MYSQLI_BOTH)){
			    ?>	
			    	<div class="col-lg-4 col-md-4 col-sm-4 col-xs-12 price-table aos-init aos-animate" data-aos="fade-right">
			    		<div class="top-content text-center">
			    			<div class="title">
								<h1><?php echo $rows['pac_name']; ?></h1>
							</div><br>
							<div class="title">
								<h3><span>Duration <br>  <?php echo $rows['pay_duration']; ?> Month</span></h3>
							</div><br>
							<div class="price">
								<span>Rs. <?php echo $rows['pac_price']; ?> /-</span>
							</div><br>
							<a class="btn btn-black" href="signup.php?buyid=<?php echo $rows['payid'] ?>">Buy Now</a>
						 </div>
	                     
	                     <div class="bottom-content text-center">
							<p>
								<?php echo $rows['pac_dt']; ?>
							</p>
	                     </div>
	                     
					</div>
			    <?php } ?>
				</table>
			</div>
			<!-- </div> -->
			
		</div>
	</div>
	<!-- //About us -->
<?php require "footer.php"; ?>