<?php require "connect.php";
  
  if (isset($_REQUEST['save']))
  {
  	$uname=$_REQUEST['uname'];
  	$pass1=$_REQUEST['pass'];
  	$sql="SELECT * FROM admin_log WHERE username='".$uname."' and password='".$pass1."'";
  	$res=mysqli_query($conn,$sql);
  	$row=mysqli_num_rows($res); 
  	if ($row==1) 
  	{
  		$_SESSION['adlogin']=$uname;
  	?><script type="text/javascript">window.location.href="index.php"</script>
  <?php        
      }
  	else
  	{ ?>
  		<div style="background-color:red;padding:10px;text-align:center;font-size:18px;color:white;">Username and Password Invalid... Try again...!!!</div>
  <?php	}
  }
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Blink Fit Admin Login</title>
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Roboto:400,500' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="css/style1.css">  
</head>
<body>
  <div class="login-container">
  <section class="login" id="login">
    <header>
      <center>
      <h2>Blink Fit</h2>
      <h4>Admin Login</h4><br>
      </center>
    </header>
    <form class="login-form" action="#" method="POST">
      <input type="text" class="login-input" placeholder="User Name" name="uname" required autofocus/>
      <input type="password" class="login-input" placeholder="Password" name="pass" required/>
      <div class="submit-container">
        <button type="submit" class="login-button" name="save">Login</button>
      </div>
    </form>
  </section>
</div>
<script src="js/index1.js"></script>
</body>
</html>
