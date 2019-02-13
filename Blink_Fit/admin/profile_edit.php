<?php
	require "header.php";  
	require "menu.php";
	if (isset($_REQUEST['aid']) && !empty($_REQUEST['aid']) && $_REQUEST['aid']!=0)
	{
			$sql1="SELECT * FROM admin_log WHERE aid='".$_REQUEST['aid']."'";
			$result1=mysqli_query($conn,$sql1);
			$rows=mysqli_fetch_array($result1,MYSQLI_BOTH);
	}
	if (isset($_REQUEST['save']))
	{
		$aid1=$_REQUEST['aid'];
		$firstname=$_REQUEST['firstname'];
		$lastname=$_REQUEST['lastname'];
		$gender=$_REQUEST['gender'];
		$email=$_REQUEST['email'];
		$uname=$_REQUEST['uname'];
		$add=$_REQUEST['add'];
		
		$image=$_FILES['img']['name'];
    	$move1="upload/".$image;
    	move_uploaded_file($_FILES['img']['tmp_name'],$move1);

    	if ($image!="")
    	{
			
			$sql="UPDATE admin_log SET firstname='$firstname',lastname='$lastname',gender='$gender',
			email='$email',image='$move1',address='$add',username='$uname' WHERE aid='".$aid1."' "; 
    	}
    	else
    	{
    			$sql="UPDATE admin_log SET firstname='$firstname',lastname='$lastname',gender='$gender',
			email='$email',address='$add',username='$uname' WHERE aid='".$aid1."' ";    
		}
		$result=mysqli_query($conn,$sql);
?><script type="text/javascript">window.location.href="index.php"</script>
  <?php    
  }
?>
<!--main content start-->
        <section id="main-content">
            <section class="wrapper">            
                <!--overview start-->
        	    <div class="row">
            		<div class="col-lg-12">
            			<h3 class="page-header"><i class="fa fa-edit"></i> Update Profile</h3>
                    </div>
        	    </div>
                <div class="row">
               		<div class="col-lg-12 col-md-12">	
        		      	<div class="panel panel-default">
        			     	<div class="panel-heading">
        				    	<h2><i class="fa fa-edit"></i><strong>Change Profile</strong></h2>
        				    </div>
        				    <div class="panel-body">
                                <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<form role="form" method="POST" enctype="multipart/form-data">
	<div class="form-group">
		<input type="hidden" class="user" name="aid" value="<?php echo $rows['aid']; ?>" placeholder="id">
		<label class="control-label"> First Name</label>
		<input type="text" class="form-control input-lg" name="firstname" value="<?php echo $rows['firstname']; ?>" placeholder="Firstname">
	</div>
	<div class="form-group">
		<label class="control-label">Last Name</label>
		<input type="text" class="form-control input-lg" name="lastname" value="<?php echo $rows['lastname']; ?>" placeholder="Lastname">
	</div>
	<div class="form-group">
		<label class="control-label">Gender</label>
        <input id="textinput" name="gender" type="radio" value="M" <?php if($rows['gender']=="M"){ ?> checked <?php } ?>>Male
		<input id="textinput" name="gender" type="radio" value="F" <?php if($rows['gender']=="F"){ ?> checked <?php } ?>>Female
	</div>
	<div class="form-group">
		<label class="control-label">Profile picture:</label>
        <input type="file" class="form-control input-lg" name="img">
	</div>
	<div class="form-group">
		<label class="control-label">Email ID:</label>
		<input type="emial" class="form-control input-lg" name="email" value="<?php echo $rows['email']; ?>" onfocus="this.value = '';" placeholder="Enter Email ID">
	</div>
	<div class="form-group">
		<label class="control-label">User Name:</label>
		<input type="text" name="uname" rows="5" placeholder="Enter User name...." class="form-control input-lg" value="<?php echo $rows['username']; ?>" required readonly>
	</div>
	<div class="form-group">
		<label class="control-label">Address:</label>
        <textarea name="add" rows="5" placeholder="Enter Address...." class="form-control input-lg" required><?php echo $rows['address']; ?></textarea>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-info btn-md" value="Update" name="save" />
		<a href="index.php"><input type="button" name="reset" value="Cancel" class="btn btn-danger btn-md "></a>
	</div>
</form>
</div>
        				    </div>
                        </div>	
                    </div><!--/col-->
        	    </div>
<?php 
	require "footer.php";  
?>