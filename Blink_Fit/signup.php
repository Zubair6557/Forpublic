<?php
	require "header.php";
	require "menu.php";
	
	$_SESSION['packageid']=$_REQUEST['buyid'];
	
	$sql1="SELECT * FROM packages WHERE payid='".$_REQUEST['buyid']."' ";
    $result1=mysqli_query($conn,$sql1);
    $rows=mysqli_fetch_array($result1,MYSQLI_BOTH);

    if (isset($_REQUEST['save'])) {
    	$name1  = $_REQUEST['mname'];
    	$mo1    = $_REQUEST['mno'];
    	$fdate1 = $_REQUEST['fdate'];
    	$tdate1 = $_REQUEST['todate'];
    	$email1 = $_REQUEST['emailid'];
    	$pass1  = $_REQUEST['password'];

    	// $fdate1 = date('Y-m-d', strtotime($_REQUEST['fdate']));
    	// $tdate1 = date('Y-m-d', strtotime($_REQUEST['todate']));

    	$_SESSION['packageid']; 
		$sql1="SELECT * FROM packages WHERE payid='".$_SESSION['packageid']."'";
	    $result1=mysqli_query($conn,$sql1);
	    $rows=mysqli_fetch_array($result1,MYSQLI_BOTH);    	

	    $pac_name1     = $rows['pac_name'];
	    $pac_price1    = $rows['pac_price'];
	    $pac_dt1       = $rows['pac_dt'];
	    $pay_duration1 = $rows['pay_duration'];

	    $_SESSION['name2']         = $name1;
    	$_SESSION['mo2']           = $mo1;
    	$_SESSION['fdate2']        = $fdate1;
    	$_SESSION['todate12']      = $tdate1;        
        $_SESSION['emailid1']      = $email1;          
    	$_SESSION['pass2']         = $pass1;
	    $_SESSION['pac_name2']     = $pac_name1;
    	$_SESSION['pac_price2']    = $pac_price1;
    	$_SESSION['pac_dt2']       = $pac_dt1;
    	$_SESSION['pay_duration2'] = $pay_duration1; 
    	
    	
    	?>      
        <script type="text/javascript">window.location.href="purchase.php"</script>
        <?php
    }

?>	<br><br><br>
	<!-- About us -->
	<div class="about-3" style="background-image:url('images/banner2.jpg');background-size:cover;">
		<div class="wthree_head_section">
				<h3 class="w3l_header">Sign U<span>p Now</span></h3>
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
						    		    <input class="form-control input-lg" placeholder="Name" name="mname" type="text" required="">
						    		</div>
						    		<div class="form-group">
						    		    <input class="form-control input-lg" placeholder="Mobile No." name="mno" type="text" maxlength="10" minlength="10" required="">
						    		</div>
						    		<div class="row">
						    			<div class="col-md-6">
						    				<div class="form-group">
						    				<label>From Date</label>
							    		    <input class="form-control input-lg" placeholder="Name" name="fdate" type="date" id="FromDate" required="">
							    		</div>
						    			</div>
						    			<div class="col-md-6">
						    				<div class="form-group">
						    				<label>To Date</label>
						    				<div style="margin:1%;" id="Result"> </div>
							    		    <input class="form-control input-lg" placeholder="Name" name="todate" type="date" id="ToDate"  required="">
							    		</div>
						    			</div>
							    		
						    		</div>
						    	  	<div class="form-group">
						    		    <input class="form-control input-lg" placeholder="Email" name="emailid" type="email" required="">
						    		</div>
						    		<div class="form-group">
						    			<input class="form-control input-lg" placeholder="Password" name="password" type="password" value="" required="">
						    		</div>
						    		<div class="row">
						    			<div class="col-md-3 col-sm-3"></div>
						    			<div class="col-md-6 col-sm-6">
						    				<input class="btn btn-lg btn-black btn-block" type="submit" value="Sign Up" name="save">
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
