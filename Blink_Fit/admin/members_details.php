<?php
	require "header.php";
    $sql="SELECT * FROM member";
    $result=mysqli_query($conn,$sql);
    $count = 0;
    if (isset($_REQUEST['del']))
    {
        $sql1="DELETE FROM member WHERE  memid='".$_REQUEST['del']."'" ;
        $resut1=mysqli_query($conn,$sql1);
		header('location:members_details.php');
    ?>
   <!-- <script type="text/javascript">window.location.href="members_details.php"</script>-->
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
                    <li>
                        <a class="" href="packages_detail.php">
                            <i class="fa fa-dropbox"></i>
                            <span>Packages</span>
                        </a>
                    </li>
                    <li class="active">
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
            			<h3 class="page-header"><img src="img/team.png" height="40px" width="40px"> Member Details</h3>
                    </div>
        	    </div>
                <div class="row">
               		<div class="col-lg-12 col-md-12">	
        		      	<div class="panel panel-default">
        			     	<div class="panel-heading">
        				    	<h2><img src="img/team.png" height="20px" width="20px"><strong> Member Detaiils</strong></h2>
        				    </div>
        				    <div class="panel-body table-responsive">
                                <table class="table table-bordered table-stripted" style="text-align:center;color:white;">
                                    <tr style="text-align:center;color:white;background-color:white;">
                                        <th>Serial No</th>
                                        <th>Name</th>
                                        <th>Contact No</th>
                                        <th>Email</th>
                                        <th>Is Paid</th>
                                        <th>From Date</th>
                                        <th>To Date</th>
                                        <th>Package Name</th>
                                        <th>Package Price</th>
                                        <th>Action</th>
                                    </tr>
                                    <?php while ($rows=mysqli_fetch_array($result,MYSQLI_BOTH)){
                                        $sql1="SELECT * FROM packages WHERE payid='".$rows['payid']."'";
                                        $result1=mysqli_query($conn,$sql1);
                                        $rows1=mysqli_fetch_array($result1,MYSQLI_BOTH);
			                        ?>
                                    <tr>
                                        <td><?php echo ++$count; ?></td>
			                            <td><?php echo $rows['name']; ?></td>
                                        <td><?php echo $rows['contact_no']; ?></td>
                                        <td><?php echo $rows['email']; ?></td>
                                        <td><?php echo $rows['is_paid']; ?></td>
                                        <td><?php echo $rows['from_date']; ?></td>
                                        <td><?php echo $rows['to_date']; ?></td>
                                        <td><?php echo $rows1['pac_name']; ?></td>
                                        <td><?php echo $rows1['pac_price']; ?></td>
                                        <td>
                                            <a href="members_details.php?del=<?php echo $rows['memid']; ?>" class="btn btn-danger">Delete</a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </table>
        				    </div>
                        </div>	
                    </div><!--/col-->
        	    </div>
<?php require "footer.php"; ?>