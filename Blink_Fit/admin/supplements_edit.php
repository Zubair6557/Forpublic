<?php
  require "header.php";
  if (isset($_REQUEST['eid']) && !empty($_REQUEST['eid']) && $_REQUEST['eid']!="")
  {
    $sql1="SELECT * FROM suppliments WHERE supid='".$_REQUEST['eid']."' ";
    $result1=mysqli_query($conn,$sql1);
    $rows=mysqli_fetch_array($result1,MYSQLI_BOTH);
  }
  if (isset($_REQUEST['save'])) {
    $catid1      = $_REQUEST['catid'];
    $name1       = $_REQUEST['name'];
    $dt1         = $_REQUEST['pdate'];
    
    $image1      = $_FILES['pic']['name'];
    $move1       = "upload/supplements/".$image1;
    move_uploaded_file($_FILES['pic']['tmp_name'],$move1);
    
    if($image1==''){
      $up_sql =  "UPDATE suppliments SET sup_name='$name1',sup_dt='$dt1' WHERE supid='".$catid1."'"; 
    } else {
      $up_sql =  "UPDATE suppliments SET sup_name='$name1',sup_img='$move1',sup_dt='$dt1' WHERE supid='".$catid1."'"; 
    }
    $res_sql = mysqli_query($conn,$up_sql); 
  ?>    
  <section id="main-content">
    <section class="wrapper">            
        <!--overview start-->
      <div class="row">
        <div class="col-lg-12">  
    <div style="color:white;background-color:royalblue;font-size:20px;text-align:center;padding-top:15px;padding-bottom:12px;">Supplements Updated.</div>
                <script type="text/javascript">
                setTimeout(function () {            
                   window.location.href='supplements_detail.php'; // the redirect goes here
                },2000);    
            </script>   </div></div></section></section>
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
                    <li class="active">
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
                    <li >
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
                    <li >
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
    			<h3 class="page-header"><img src="img/proteins1.png" height="40px" width="40px"> Update Supplements </h3>
            </div>
	    </div>
        <div class="row">
       		<div class="col-lg-12 col-md-12">	
		      	<div class="panel panel-default">
			     	<div class="panel-heading">
				    	<h2><img src="img/proteins1.png" height="20px" width="20px"><strong>Updte Supplements details</strong></h2>
				    </div>
				    <div class="panel-body">
              <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                <fieldset>
                <input type="hidden" name="catid" value="<?php echo $rows['supid']; ?>">
                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="name">Name</label>  
                    <div class="col-md-5">
                    <input id="name" name="name" placeholder="Enter Supplements Name" class="form-control input-lg" required="" type="text" value="<?php echo $rows['sup_name']; ?>">
                      
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-4 control-label" for="name">Select Supplements Image</label>  
                    <div class="col-md-5">
                    <input id="name" name="pic"  class="form-control input-lg" type="file"><br>
                    </div>
                    <div class="col-md-3">
                    <img src="<?php echo $rows['sup_img']; ?>" height="100px"  width="100px">
                      
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="pdate">Details</label>  
                    <div class="col-md-5">
                    <textarea name="pdate" placeholder="Enter Full Details" class="form-control input-lg" required="" rows="5"><?php echo $rows['sup_dt']; ?></textarea>
                      
                    </div>
                  </div>

                  <!-- Button (Double) -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="save"></label>
                    <div class="col-md-8">
                      <button id="save" type="submit" name="save" class="btn btn-info">Update</button>
                      <a href="supplements_detail.php" class="btn btn-danger">Cancle</a>
                    </div>
                  </div>
                </fieldset>
              </form>
				    </div>
                </div>	
            </div><!--/col-->
	    </div>
<?php require "footer.php"; ?>

