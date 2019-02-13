<?php
	require "header.php";
	require "menu.php";
	if (isset($_REQUEST['save']))
	{
		$email1    = $_REQUEST['email'];
		$sql   = "select * from member where email='".$email1."' ";
        $res1  = mysqli_query($conn,$sql);
        $count = mysqli_num_rows($res1);
        if($count == 1) {
            include("PHPMailer-master/functions.php");
            $row     = mysqli_fetch_array($res1);
            $subject="Password recovered";
            $body .= 'Respected Sir/Madam..<br><br> This email was send admin by Gym Trainer in response to your request to recover password. <br> I am the Admin of the Gym Trainer Site. Sir/Madam this is your password please enter this password and login our site. <br><br> Your current password is '.$row['passsword'];
            $to_email= $row['email'];
            $headers = "blinkfit09@gmail.com";
            $sentmail = sendmail($to_email, $headers, $subject, $body);
            if($sentmail) {?>
            	 <br><br><br>
        <div class="about-3">
            	<div style="color:white;background-color:green;font-size:20px;text-align:center;padding-top:15px;padding-bottom:12px;">Your Password Has Been Sent To Your Email Address.</div>
                <script type="text/javascript">
                setTimeout(function () {            
                   window.location.href='index.php'; // the redirect goes here
                },2000);    
            </script>   
            </div>
    <?php   } else {  ?>
    		 <br><br><br>
        <div class="about-3">
    			<div style="color:white;background-color:red;font-size:20px;text-align:center;padding-top:15px;padding-bottom:12px;">Cannot send password to your e-mail address.Problem with sending mail...</div>
                <script type="text/javascript">
                setTimeout(function () {            
                   window.location.href='forgotpass.php'; // the redirect goes here
                },2000);    
            </script>   
            </div>
    <?php   }
        } else { ?>
        	 <br><br><br>
        <div class="about-3">
        		<div style="color:white;background-color:red;font-size:20px;text-align:center;padding-top:15px;padding-bottom:12px;">Mail is not Present..!Not found your email in our database.</div>
                <script type="text/javascript">
                setTimeout(function () {            
                   window.location.href='forgotpass.php'; // the redirect goes here
                },2000);    
            </script>   
            </div>
<?php   }
    
  }
?>	<br><br><br>
	<!-- About us -->
	<div class="about-3" style="background-image:url('images/banner2.jpg');background-size:cover;">
		<div class="wthree_head_section">
				<h3 class="w3l_header">Forgot <span>Password</span></h3>
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
			    			<div class="row">
			    				<div class="col-md-2"></div>
			    				<div class="col-md-8">
			    					<img src="images/fg.png" width="100%" height="auto">
			    				</div>
			    				<div class="col-md-2"></div>
			    			</div>
			    			<div class="panel-body">
						    	<form method="POST" role="form">
			                    <fieldset>
						    	  	<div class="form-group">
						    			<input type="email" class="form-control input-lg" placeholder="Enter Your Register Email" name="email"> 
						    		</div>
						    		<div class="row">
						    			<div class="col-md-3 col-sm-3"></div>
						    			<div class="col-md-6 col-sm-6">
						    				<input class="btn btn-lg btn-black btn-block" type="submit" value="Send Mail" name="save">
						    			</div>
						    		</div>
						    	</fieldset>
						      	</form>
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

