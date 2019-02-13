<?php 
	require "header.php";
	require "menu.php";

	$paypal_url='https://www.sandbox.paypal.com/cgi-bin/webscr'; 
	// Test Paypal API URL
	$paypal_id='blinkfit09@gmail.com';
	
	$price123= 65;
	$price1 = $_SESSION['pac_price2']/$price123; 
	// $pricemain = $_SESSION['pac_price2'];
	// $price1= $pricemain/$price123;
	// echo $price1; die(); <?php echo $price1; 

	 $_SESSION['pid'] = $_SESSION['packageid']; 
	 $_SESSION['n1'] = $_SESSION['name2'];
	 $_SESSION['m1'] = $_SESSION['mo2'];
	 $_SESSION['f1'] = $_SESSION['fdate2'];
	 $_SESSION['t1'] = $_SESSION['todate12'];        
     $_SESSION['e1'] =  $_SESSION['emailid1'];          
	 $_SESSION['p1'] = $_SESSION['pass2'];
     $_SESSION['pn1'] =  $_SESSION['pac_name2'];
	 $_SESSION['pp1'] = $_SESSION['pac_price2'];
	 $_SESSION['pd1'] = $_SESSION['pac_dt2'];
	 $_SESSION['pd2'] = $_SESSION['pay_duration2']; 
	
?>
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
				<h3 class="w3l_header"> Payment<span> Now</span></h3>
			</div>
		<div class="container">
			<!-- <div class="d-flex"> -->
				<!-- <div class="about1"> 
					<h4>CrossFit and TrainHard GYM </h4>
				</div> -->
			<div class="row">
				<div class="col-md-12 col-sm-12">
					<span class="thumbnail">
						<div class="row">
							<div class="col-md-12 col-sm-12">
								<center><h2>Your Package is <?php echo $_SESSION['pn1']; ?></h2></center>
								<hr class="line">
							</div>
						</div>
						<h1 style="color:orange;font-size:30;"> Personal Details</h1><hr>
						<div class="row">
                        	<div class="col-xs-6 col-sm-6 col-md-6">
                            	<div class="form-group">
                                	<label class="control-label">Name: </label>
                                	<label class="control-label">
                                	<?php echo $_SESSION['n1']; ?>
                                	</label>
                            	</div>
                        	</div>
                        	<div class="col-xs-6 col-sm-6 col-md-6">
                            	<div class="form-group">
                                	<label class="control-label">Mobile No: </label>
                                	<label class="control-label">
                                	<?php echo $_SESSION['m1']; ?>
                                	</label>
                            	</div>
                        	</div>
                    	</div>
	                    <div class="row">
	                        <div class="col-xs-6 col-sm-6 col-md-6">
	                            <div class="form-group">
	                                <label class="control-label">Email: </label>
	                                <label class="control-label">
	                                	<?php echo $_SESSION['e1']; ?>
	                                </label>
	                            </div>
	                        </div>
	                        <div class="col-xs-6 col-sm-6 col-md-6">
	                        	<div class="form-group">
                                	<label class="control-label">From Date: </label>
                                	<label class="control-label">
                                	<?php echo $_SESSION['f1']; ?>
                                	</label>
                            	</div>
	                        </div>
	                    </div>
	                    <div class="row">
	                        <div class="col-xs-6 col-sm-6 col-md-6">
	                            <div class="form-group">
	                                <label class="control-label">To Date: </label>
	                                <label class="control-label">
	                                	<?php echo $_SESSION['t1']; ?>
	                                </label>
	                            </div>
	                        </div>
	                        <div class="col-xs-6 col-sm-6 col-md-6">
	                        	
	                        </div>
	                    </div>
	                    <hr>
	                    <h1 style="color:orange;font-size:30;"> Package Details</h1><hr>
	                    <div class="row">
                        	<div class="col-xs-6 col-sm-6 col-md-6">
                            	<div class="form-group">
                                	<label class="control-label">Package Name: </label>
                                	<label class="control-label">
                                	<?php echo $_SESSION['pn1']; ?>
                                	</label>
                            	</div>
                        	</div>
                        	<div class="col-xs-6 col-sm-6 col-md-6">
                            	<div class="form-group">
                                	<label class="control-label">Package Price: </label>
                                	<label class="control-label"> Rs. 
                                	<?php echo $_SESSION['pp1']; ?> /-
                                	</label>
                            	</div>
                        	</div>
                    	</div>
	                    <div class="row">
	                        <div class="col-xs-6 col-sm-6 col-md-6">
	                            <div class="form-group">
	                                <label class="control-label">Package Duration: </label>
	                                <label class="control-label">
	                                	<?php echo $_SESSION['pd2']; ?> Months 
	                                </label>
	                            </div>
	                        </div>
	                        <div class="col-xs-6 col-sm-6 col-md-6">
	                        	
	                        </div>
	                    </div>
	                    <div class="row">
	                    	<div class="col-xs-8 col-sm-8 col-md-8"></div>
	                        <div class="col-xs-4 col-sm-4 col-md-4">
	                            <div class="form-group">
	                            	<form action="<?php echo $paypal_url; ?>" method="POST" name="frmPayPal1">

								    <input type="hidden" name="business" value="<?php echo $paypal_id; ?>">

								    <input type="hidden" name="cmd" value="_xclick">

								    <input type="hidden" name="item_name" value="<?php echo $_SESSION['n1']; ?>">
								    <!--
								    <input type="hidden" name="item_number" value="1">
									-->
								    <input type="hidden" name="credits" value="510">

								    <input type="hidden" name="userid" value="1">

								    <input type="hidden" name="amount" value="<?php echo $price1; ?>">

								    <input type="hidden" name="no_shipping" value="1">

								    <input type="hidden" name="handling" value="">	

								    <input type="hidden" name="currency_code" value="USD">

								    <input type="hidden" name="cancel_return" value="http://localhost/Blink_Fit/cancel.php">

								    <input type="hidden" name="return" value="http://localhost/Blink_Fit/success.php">

								    <input type="image" src="https://www.sandbox.paypal.com/en_US/i/btn/btn_buynowCC_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">

								    <img alt="" border="0" src="https://www.sandbox.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1">

								    </form>
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