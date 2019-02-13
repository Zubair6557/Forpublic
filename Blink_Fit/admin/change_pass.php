<?php
	require "header.php";  
	require "menu.php";
	if (isset($_REQUEST['chid']) && !empty($_REQUEST['chid']) && $_REQUEST['chid']!=0)
	{
		$sql1="SELECT * FROM admin_log WHERE aid='".$_REQUEST['chid']."'";
		$result1=mysqli_query($conn,$sql1);
		$rows=mysqli_fetch_array($result1,MYSQLI_BOTH);

		if (isset($_REQUEST['save']))
		{
			$pass=$_REQUEST['oldpass'];
			if ($pass == $rows['password'])
			{
				$aid1=$_REQUEST['aid'];
				$newpass1=$_REQUEST['newpass'];
				$conpass1=$_REQUEST['conpass'];
				if ($newpass1 == $conpass1)
				{	
					$sql="UPDATE admin_log SET password='$newpass1' WHERE aid='".$aid1."'"; 
					$res=mysqli_query($conn,$sql);
				?><script type="text/javascript">window.location.href="index.php"</script>
	  			<?php
	  			} else {    
	  			?>
	  			<div style="color:white;background-color:red;font-size:20px;text-align:center;padding-top:15px;padding-bottom:12px;">Please enter both password must be same.. Try agian..!!!</div>
	  			<?php
	  			}
			}
			else
			{
				?>
				<div style="color:white;background-color:red;font-size:20px;text-align:center;padding-top:15px;padding-bottom:12px;">Old  Password is invalid.. Try agian..!!!</div>
				<?php
			}
		}
	}
?>
<!--main content start-->
        <section id="main-content">
            <section class="wrapper">            
                <!--overview start-->
        	    <div class="row">
            		<div class="col-lg-12">
            			<h3 class="page-header"><i class="fa fa-lock"></i> Update Password</h3>
                    </div>
        	    </div>
                <div class="row">
               		<div class="col-lg-12 col-md-12">	
        		      	<div class="panel panel-default">
        			     	<div class="panel-heading">
        				    	<h2><i class="fa fa-lock"></i><strong>Change Password</strong></h2>
        				    </div>
        				    <div class="panel-body">
                                <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<form role="form" method="POST" enctype="multipart/form-data">

	<div class="form-group">
		<input type="hidden" class="user" name="aid" value="<?php echo $rows['aid']; ?>" placeholder="id">
		<label class="control-label">Old Password </label>
		<input type="password" class="form-control input-lg"  name="oldpass" placeholder="Old Password" required>	
	</div>
									
	<div class="form-group">
		<label class="control-label"> New Password </label>
		<input type="password" class="form-control input-lg" name="newpass" placeholder="New Password" required>
	</div>
	<div class="form-group">
		<label class="control-label"> Confirm Password </label>
		<input type="password" class="form-control input-lg" name="conpass" placeholder="Confirm Password" required>
	</div>
	<div class="form-group">
		<input type="submit" class="btn btn-info btn-md" value="Update" name="save" />
		<a href="index.php"><input type="button" name="reset" value="Cancel" class="btn btn-danger btn-md"></a>
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