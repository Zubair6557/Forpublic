<?php
  require "header.php";
  if (isset($_REQUEST['eid']) && !empty($_REQUEST['eid']) && $_REQUEST['eid']!="")
  {
    $sql1="SELECT * FROM fit_videos WHERE video_id='".$_REQUEST['eid']."' ";
    $result1=mysqli_query($conn,$sql1);
    $rows=mysqli_fetch_array($result1,MYSQLI_BOTH);
  }
  if (isset($_POST['save'])) {
    $catid1      = $_REQUEST['catid'];
    $name1       = $_REQUEST['name'];
    $type2       = $_REQUEST['type1'];
    $tag2        = $_REQUEST['tag1'];
    $image1      = $_FILES['video']['name'];
    $move1       = "upload/videos/".$image1;
  
      
    if($image1==''){
      $up_sql =  "UPDATE fit_videos SET video_name='$name1',video_type='$type2',video_tag='$tag2' WHERE video_id='".$catid1."'"; 
    } else {
      $up_sql =  "UPDATE fit_videos SET video_name='$name1',video_type='$type2',video_path='$move1',video_tag='$tag2' WHERE video_id='".$catid1."'"; 
    }
    $res_sql = mysqli_query($conn,$up_sql); 
    //file_put_contents($move,base64_decode($image1));
    move_uploaded_file($_FILES['video']['tmp_name'],$move1);
  ?>    
  <section id="main-content">
    <section class="wrapper">            
        <!--overview start-->
      <div class="row">
        <div class="col-lg-12">  
    <div style="color:white;background-color:royalblue;font-size:20px;text-align:center;padding-top:15px;padding-bottom:12px;">Video Deatils Updated.</div>
                <script type="text/javascript">
                setTimeout(function () {            
                   window.location.href='videos_detail.php'; // the redirect goes here
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
                    <li >
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
                    <li class="active">
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
    			<h3 class="page-header"><img src="img/video1.png" height="40px" width="40px"> Update Video details</h3>
            </div>
	    </div>
        <div class="row">
       		<div class="col-lg-12 col-md-12">	
		      	<div class="panel panel-default">
			     	<div class="panel-heading">
				    	<h2><img src="img/video1.png" height="20px" width="20px"><strong> Update Video details</strong></h2>
				    </div>
				    <div class="panel-body">
              <form class="form-horizontal" method="POST" 
              enctype="multipart/form-data">
                <fieldset>
                  <input type="hidden" name="catid" value="<?php echo $rows['video_id']; ?>">
                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="name">Name</label>  
                    <div class="col-md-5">
                    <input id="name" name="name" placeholder="Enter Equipment Name" class="form-control input-lg" required="" type="text" value="<?php echo $rows['video_name']; ?>">
                      
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="name">Type</label>  
                    <div class="col-md-5">
                    <input id="textinput" name="type1" type="radio" value="paid" <?php if($rows['video_type']=="paid"){ ?> checked <?php } ?>> Paid
                    <input id="textinput" name="type1" type="radio" value="free" <?php if($rows['video_type']=="free"){ ?> checked <?php } ?> > Free
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-md-4 control-label" for="name">Select Video</label>  
                    <div class="col-md-5">
                    <input id="name" name="video"  class="form-control input-lg" type="file">
                      
                    </div>
                  </div>
                  <div class="form-group">
                  <div class="col-md-4"></div>
                  <div class="col-md-5">
                    <video width="100%" height="200px" controls>
                      <source src="<?php echo $rows['video_path']; ?>" type="video/mp4">
                    </video>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="pdate">Video Tag</label>  
                    <div class="col-md-5">
                    <input id="name" name="tag1" placeholder="Enter Video Tag" class="form-control input-lg" required="" type="text" value="<?php echo $rows['video_tag']; ?>">
                      
                    </div>
                  </div>

                  <!-- Button (Double) -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="save"></label>
                    <div class="col-md-8">
                      <input type="submit" name="save" class="btn btn-info" value="Update">
                      <a href="videos_detail.php" class="btn btn-danger">Cancle</a>
                    </div>
                  </div>
                </fieldset>
              </form>
				    </div>
                </div>	
            </div><!--/col-->
	    </div>
<?php require "footer.php"; ?>
