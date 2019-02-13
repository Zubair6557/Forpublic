<?php
	require "header.php";
    $sql="SELECT * FROM packages";
    $result=mysqli_query($conn,$sql);
    $count = 0;
    if (isset($_REQUEST['del']) && !empty($_REQUEST['del']) && $_REQUEST['del']!=0)
    {
        $sql1="DELETE FROM packages WHERE  payid='".$_REQUEST['del']."'" ;
        $resut1=mysqli_query($conn,$sql1);
    ?>
    <script type="text/javascript">window.location.href="packages_detail.php"</script>
    <?php
    }
?>

<!--sidebar start-->
        <aside>
            <div id="sidebar"  class="nav-collapse ">
                <!-- sidebar menu start-->
                <ul class="sidebar-menu">                
                    <li >
                        <a class="" href="index.php">
                            <i class="fa fa-home"></i><span>Home</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="supplements_detail.php">
                            <img src="img/proteins.png" height="20px" width="20px">
                            <span>Supplements</span>
                        </a>
                    </li>
                    <li >
                        <a class="" href="equipments_detail.php">
                            <img src="img/weightlifting1.png" height="20px" width="20px">
                            <span>Equipments</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="videos_detail.php">
                            <img src="img/video1.png" height="20px" width="20px">
                            <span>Videos</span>
                        </a>
                    </li>
                    <li class="active">
                        <a class="" href="packages_detail.php">
                            <i class="fa fa-dropbox"></i>
                            <span>Packages</span>
                        </a>
                    </li>
                    <li >
                        <a class="" href="members_details.php">
                            <img src="img/team.png" height="20px" width="20px">
                            <span>Members</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="payment_detail.php">
                             <img src="img/credit-card.png" height="20px" width="20px">
                            <span>Payment</span>
                        </a>
                    </li>
                    <li >
                        <a class="" href="feedback_detail.php">
                             <img src="img/feedback.png" height="20px" width="20px">
                            <span>Feedback</span>
                        </a>
                    </li>
                    <li>
                        <a class="" href="logout.php">
                            <img src="img/exit.png" height="20px" width="20px">
                            <span>Logout</span>
                        </a>
                    </li>
                    <!-- <li class="sub-menu">
                        <a href="javascript:;" class="">
                            <i class="fa fa-users"></i>
                            <span>Members</span>
                            <span class="menu-arrow arrow_carrot-right"></span>
                        </a>
                        <ul class="sub">
                            <li><a class="" href="#">Careate</a></li>
                            <li><a class="" href="#">Manage</a></li>
                        </ul>
                    </li>        -->
                </ul>
                <!-- sidebar menu end-->
            </div>
        </aside>
        <!--sidebar end-->
        <!--main content start-->
        <section id="main-content">
            <section class="wrapper">            
                <!--overview start-->
        	    <div class="row">
            		<div class="col-lg-12">
            			<h3 class="page-header"><img src="img/dropbox.png" height="40px" width="40px"> Packages Details</h3>
                    </div>
        	    </div>
                <div class="row">
               		<div class="col-lg-12 col-md-12">	
        		      	<div class="panel panel-default">
        			     	<div class="panel-heading">
        				    	<h2><img src="img/dropbox.png" height="20px" width="20px"><strong> Packages Detaiils</strong></h2>
        				    </div>
        				    <div class="panel-body table-responsive">
                                <a href="packages_create.php" class="btn btn-success btn-lg"> Create Packages</a><br><br>
                                <table class="table table-bordered  table-stripted" style="text-align:center;color:white;">
                                    <tr style="text-align:center;color:white;background-color:white;">
                                        <th>Serial No</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Duration</th>
                                        <th>Details</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php while ($rows=mysqli_fetch_array($result,MYSQLI_BOTH)){
			                        ?>
                                    <tr>
                                        <td><?php echo ++$count; ?></td>
			                            <td><?php echo $rows['pac_name']; ?></td>
			                            <td>Rs. <?php echo $rows['pac_price']; ?>/-</td>
                                        <td><?php echo $rows['pay_duration']; ?> Month</td>
                                        <td><?php echo $rows['pac_dt']; ?></td>
                                        <td>
                                            <a href="packages_edit.php?eid=<?php echo $rows['payid']; ?>" class="btn btn-info"><i class="fa fa-edit"></i></a>
                                            <a href="packages_detail.php?del=<?php echo $rows['payid']; ?>" class="btn btn-danger"><img src="img/recycle-bin.png" height="20px" width="20px"></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </table>
        				    </div>
                        </div>	
                    </div><!--/col-->
        	    </div>
<?php require "footer.php"; ?>