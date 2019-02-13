<?php
  require "header.php";
  if (isset($_REQUEST['save'])) {
    
    $name1       = $_REQUEST['name'];
    $price1      = $_REQUEST['price'];
    $dut1        = $_REQUEST['dut'];
    $dt1         = $_REQUEST['pdate'];
    $ins_sql =  "INSERT INTO packages(pac_name,pac_price,pac_dt,pay_duration) VALUES ('".$name1."','".$price1."','".$dt1."','".$dut1."')";
    $res_sql = mysqli_query($conn,$ins_sql); 
  ?>  
    <section id="main-content">
    <section class="wrapper">            
        <!--overview start-->
      <div class="row">
        <div class="col-lg-12">  
    <div style="color:white;background-color:green;font-size:20px;text-align:center;padding-top:15px;padding-bottom:12px;">Package created.</div>
                <script type="text/javascript">
                setTimeout(function () {            
                   window.location.href='packages_detail.php'; // the redirect goes here
                },2000);    
            </script>   
          </div></div></section></section>
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
    			<h3 class="page-header"><img src="img/dropbox.png" height="40px" width="40px"> Create Packages</h3>
            </div>
	    </div>
        <div class="row">
       		<div class="col-lg-12 col-md-12">	
		      	<div class="panel panel-default">
			     	<div class="panel-heading">
				    	<h2><img src="img/dropbox.png" height="20px" width="20px"><strong>Create Packages</strong></h2>
				    </div>
				    <div class="panel-body">
              <form class="form-horizontal" method="POST" enctype="multipart/form-data">
                <fieldset>
                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="name">Name</label>  
                    <div class="col-md-5">
                    <input id="name" name="name" placeholder="Enter Equipment Name" class="form-control input-lg" required="" type="text">
                      
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="name">Price</label>  
                    <div class="col-md-5">
                    <input id="name" name="price" placeholder="Enter Price" class="form-control input-lg" required="" type="text">
                      
                    </div>
                  </div>

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="name">Duration</label>  
                    <div class="col-md-5">
                      <select name="dut" class="form-control input-lg" required>
                        <option value="">- Select Duration - </option>
                          <option value="3">3 Month</option>
                          <option value="6">6 Month</option>
                          <option value="12">12 Month</option>
                          <option value="18">18 Month</option>
                          <option value="24">24 Month</option>
                      </select>
                    </div>
                  </div>                  

                  <!-- Text input-->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="pdate">Details</label>  
                    <div class="col-md-5">
                    <textarea name="pdate" placeholder="Enter Details" class="form-control input-lg" required="" rows="5"></textarea>
                      
                    </div>
                  </div>

                  <!-- Button (Double) -->
                  <div class="form-group">
                    <label class="col-md-4 control-label" for="save"></label>
                    <div class="col-md-8">
                      <button id="save" type="submit" name="save" class="btn btn-success">Save</button>
                      <a href="packages_detail.php" class="btn btn-danger">Cancel</a>
                    </div>
                  </div>
                </fieldset>
              </form>
				    </div>
                </div>	
            </div><!--/col-->
	    </div>
<?php require "footer.php"; ?>