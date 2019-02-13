<?php
    include("connect.php");
    if ($_SESSION['adlogin']=='')
    {
        header("Location:login.php");
    } 
    $sql="SELECT * FROM admin_log WHERE username='".$_SESSION['adlogin']."'";
    $res=mysqli_query($conn,$sql);
    $row=mysqli_fetch_array($res,MYSQLI_BOTH);
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Blink Fit</title>
    <!-- Bootstrap CSS -->    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="css/elegant-icons-style.css" rel="stylesheet" />
    <link href="css/font-awesome.min.css" rel="stylesheet" />    
    <!-- Custom styles -->
    <link rel="stylesheet" href="css/fullcalendar.css">
    <link href="css/widgets.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/style-responsive.css" rel="stylesheet" />
    <link href="css/jquery-ui-1.10.4.min.css" rel="stylesheet">
  </head>

  <body>
    <!-- container section start -->
    <section id="container" class="">
        <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
            </div>

            <!--logo start-->
            <a href="#" class="logo"><img src="img/logo3.png" height="50px" width="50px"> Blink <span class="lite">Fit</span></a>
            <!--logo end-->
            
            <div class="top-nav notification-row">                
                <!-- notificatoin dropdown start-->
                <ul class="nav pull-right top-menu">
                    
                    <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="profile-ava">
                                <img alt="Divyang Sodha" height="40px" width="40px" src="<?php echo $row['image']; ?>">
                            </span>
                            <span class="username"><?php echo $row['firstname']; ?></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>
                            <li class="eborder-top">
                                <a href="profile_edit.php?aid=<?php echo $row['aid']; ?>"><i class="icon_profile"></i> My Profile</a>
                            </li>
                            <li class="eborder-top">
                                <a href="change_pass.php?chid=<?php echo $row['aid']; ?>"><i class="icon_key"></i> Change Password</a>
                            </li>
                            <li>
                                <a href="logout.php"><img src="img/exit.png" height="20px" width="20px"> Log Out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- user login dropdown end -->
                </ul>
                <!-- notificatoin dropdown end-->
            </div>
        </header>      
        <!--header end-->