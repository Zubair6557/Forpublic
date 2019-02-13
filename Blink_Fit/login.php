<?php
	require "header.php";
	require "menu.php";
	if (isset($_REQUEST['save']))
	{
		$email1  = $_REQUEST['email'];
		$pass1 = $_REQUEST['password'];
		
		$sql   = "SELECT * FROM member WHERE email='".$email1."' and passsword='".$pass1."'"; 
		$res   = mysqli_query($conn,$sql); 
		if (mysqli_num_rows($res) == 1) {
		  $row = mysqli_fetch_array($res, MYSQLI_BOTH);
		  $_SESSION['id']        = $row['memid'];
		  $_SESSION['firstname'] = $row['name'];
		?>
		  <script type="text/javascript">window.location.href="index.php"</script>
		<?php } else { ?>
			<br><br><br>
		<div class="about-3">
        <div style="color:white;background-color:red;font-size:18px;text-align:center;padding:15px;">Email Id and Password Invalid... Try again...!!!</div>
        <script type="text/javascript">
                setTimeout(function () {            
               window.location.href='login.php'; // the redirect goes here
            },2000);    
        </script>   
		</div>
		<?php }
	}
?>	<br><br><br>
	<!-- About us -->
	<div class="about-3" style="background-image:url('images/banner2.jpg');background-size:cover;">
		<div class="wthree_head_section">
				<h3 class="w3l_header">Login <span>Now</span></h3>
			</div>
		<div class="container">
			<!-- <div class="d-flex"> -->
				<!-- <div class="about1"> 
					<h4>CrossFit and TrainHard GYM </h4>
				</div> -->
				<div class="row">
					<div class="col-md-3"></div>
			    	<div class="col-md-6">
			    		<div class="panel panel-default" style="padding-top:20px;">
						  	<div class="panel-body">
						    	<form method="POST" role="form">
			                    <fieldset>
						    	  	<div class="form-group">
						    		    <input class="form-control input-lg" placeholder="Email" name="email" type="text">
						    		</div>
						    		<div class="form-group">
						    			<input class="form-control input-lg" placeholder="Password" name="password" type="password" value="">
						    		</div>
						    		<div class="row">
						    			<div class="col-md-3 col-sm-3"></div>
						    			<div class="col-md-6 col-sm-6">
						    				<input class="btn btn-lg btn-black btn-block" type="submit" value="Login" name="save">
						    			</div>
						    		</div><br>
						    		<div class="row">
						    			<div class="col-md-3 col-sm-3"></div>
						    			<div class="col-md-9 col-sm-9">
						    				Not remember password.<a href="forgotpass.php"> Forgot Password</a>
						    			</div>
						    		</div>
						    	</fieldset>
						      	</form>
						      	<hr/>
			                    <center><h4>Not a Member.?</h4></center><br>
			                    <a href="package.php" class="btn btn-lg btn-black btn-block">Register Now</a>
						    </div>
						</div>
					</div>
					<div class="col-md-3"></div>
				</div>
			<!-- </div> -->
			
		</div>
	</div>
	<!-- //About us -->
<?php require "footer.php"; ?>

