<?php 
    ini_set("display_errors", "off");
    session_start();
	include ("connect.php");
    $reg_sql       = "SELECT * FROM member WHERE name='".$_SESSION['firstname']."' and memid ='".$_SESSION['id']."' and is_paid='paid'";
    $reg_res       = mysqli_query($conn,$reg_sql);
    $reg_rows      = mysqli_fetch_array($reg_res,MYSQLI_BOTH);    
?>
<!DOCTYPE html>
<html>
<head>
	<title>Blink Fit  </title>
	<!-- custom-theme -->
	<script type="application/x-javascript">
		addEventListener("load", function () {	
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<!-- Owl-carousel-CSS -->
	
<!-- Testimonials-slider-css-files -->
	<link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
	<link href="css/owl.theme.css" rel="stylesheet">
<!-- //Testimonials-slider-css-files -->

	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href="//fonts.googleapis.com/css?family=Raleway:400,500,600,700,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Montserrat:100,100i,200,200i,300,400,400i,500,500i,600,600i,700,700i,800" rel="stylesheet">
</head>

<body>
	<!-- banner -->
	<div class="main_section_agile" id="home">
		<div class="agileits_w3layouts_banner_nav">
			<div class="container">
			<nav class="navbar navbar-default">
				<div class="navbar-header navbar-left">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a style="font-size:20px;color:#FFC107;" href="index.php"><img src="images/logo3.png" height="60px" width="60px"> <b style="color:white;">BLINK</b> <b>FIT</b></a>

				</div>
				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
					<nav class="link-effect-2" id="link-effect-2">
						<div class="row">
				<div class="col-md-4 col-lg-4 col-sm-4">
					
				</div>
				<?php if (isset($_SESSION['id']) && $_SESSION['id'] != '') { ?>
				<div class="col-md-8 col-lg-8 col-sm-8" style="margin-top:5px;">
					<a href="" style="color:#FFC107;font-size:15px;"><?php echo $reg_rows['name']; ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
					<a href="logout.php" class="btn btn-danger">Logout</a>
				</div>
				<?php } else { ?>
				<div class="col-md-8 col-lg-8 col-sm-8" style="margin-top:5px;">
					<a href="login.php" class="btn btn-black">LOGIN</a>
					<a href="package.php" class="btn btn-black">SIGNUP</a>
				</div>
				<?php } ?>
			</div>