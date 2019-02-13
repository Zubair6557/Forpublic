<?php
	require "header.php";
	if (isset($_REQUEST['mail'])) 
    {
        include("PHPMailer-master/functions.php");
        $subject="WebSite Contact";
        $body  = '';
        $body .= 'Name :' .$_REQUEST['name'] .'<br>';
        $body .= 'Phone No :' .$_REQUEST['phno'] .'<br>';
        $body .= 'Email :' .$_REQUEST['email'] .'<br>';
        $body .= 'Message : ' .$_REQUEST['message'] .'<br>';
        $email12 = "divyang.135300693024@gmail.com";
        $to_email= $email12;
        $to_name="Blink Fit admin"; 

        $sentmail = sendmail($to_email, $to_name, $subject, $body);
        if ($sentmail) {
        ?> 
        	 <br><br><br>
        	<div class="about-3">
        	<div style="color:white;background-color:green;font-size:20px;text-align:center;padding-top:15px;padding-bottom:12px;">Mail is send.</div>
                <script type="text/javascript">
                setTimeout(function () {            
                   window.location.href='about.php'; // the redirect goes here
                },2000);    
            </script>   </div>
        <?php            
        } else {
        ?>
        	 <br><br><br>
        <div class="about-3">
             <div style="color:white;background-color:red;font-size:20px;text-align:center;padding-top:15px;padding-bottom:12px;">Mail is not send. try again.</div>
                <script type="text/javascript">
                setTimeout(function () {            
                   window.location.href='contact.php'; // the redirect goes here
                },2000);    
            </script>   </div>
        <?php
        }
    }
?>						<ul class="nav navbar-nav">
							<li><a href="index.php" class="effect-3">Home</a></li>
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
							<li><a href="feedback.php" class="effect-3">Feedback</a>
							</li>
							<li><a href="about.php" class="effect-3">About</a></li>
							<li class="active"><a href="contact.php" class="effect-3">Contact</a></li>
							<?php } else { ?>
							<li><a href="video_free.php" class="effect-3">Videos</a>
							</li>
							<li><a href="about.php" class="effect-3">About</a></li>
							<li class="active"><a href="contact.php" class="effect-3">Contact</a></li>
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
		.thumbnail{
			border: 1px solid white !important;
	    border-radius: 0px !important;
	    -webkit-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.16);
	    -moz-box-shadow: 0px 0px 14px 0px rgba(0,0,0,0.16);
	    box-shadow: 0px 1px 14px white;

			
		}
	</style>
<!-- /mail -->
    <div class="banner-bottom inner" style="background-image:url('images/banner2.jpg');background-size:cover;">
        <div class="container">
            <div class="wthree_head_section">
                <h3 class="w3l_header w3_agileits_header">Contact <span>Us</span></h3>
            </div>
          <div class="agile_wthree_inner_grids">
          
		<div class="contact-form agile_inner_grids thumbnail" style="background-color:#ececec;padding:20px;color: black;">
			  
			<form method="POST">
				<div class="fields-grid">
					<div class="styled-input agile-styled-input-top">
						<input type="text" required="" name="name">
						<label>Full Name</label>
						<span></span>
					</div>
					<div class="styled-input agile-styled-input-top">
						<input type="text"  required="" name="phno">
						<label>Phone</label>
						<span></span>
					</div>
					<div class="styled-input">
						<input type="email" required="" name="email">
						<label>Email</label>
						<span></span>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="styled-input textarea-grid">
					<textarea name="message" required=""></textarea>
					<label>Message</label>
					<span></span>
				</div>
				<input type="submit" value="SEND" name="mail">
			</form>
		</div>
		<div class="clearfix"> </div>
          </div>
        </div>
    </div>
    <!-- //mail -->
    	<!-- /map -->
			<div class="map">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387142.84010033106!2d-74.25819252532891!3d40.70583163828471!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew+York%2C+NY%2C+USA!5e0!3m2!1sen!2sin!4v1475140387172" style="border:0"></iframe>

			</div>
		<!-- //map -->
<?php require "footer.php"; ?>