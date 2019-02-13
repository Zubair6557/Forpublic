<?php
$conn=mysqli_connect("localhost","root","","mail");
include("functions.php");

        if(isset($_REQUEST['save'])) {

         $username=$_REQUEST['username'];
         $email=$_REQUEST['email'];
         $password=$_REQUEST['password'];
         $activationkey= generateRandomString(25);


         $sql="INSERT INTO mail(username,email,password,activationkey) 
         VALUES('".$username."','".$email."','".$password."','".$activationkey."')";
         $res=mysqli_query($conn,$sql);
        
          if($res){
            $to_email= $email;
            $to_name = $username;
            $subject="Activation link..";
            $body ="Your conformation link \r\n";
            $body .="Click on this link to activate your account \r\n";
            $body .="http://localhost/PHPMailer-master/verify.php?email=".$email."&activationkey=".$activationkey;

            $sentmail = sendmail($to_email, $to_name, $subject, $body);

            if($sentmail){
              echo "Your Confirmation link Has Been Sent To Your Email Address.";
            } else {
              echo "Cannot send Confirmation link to your e-mail address";
            }
          } else {
            //error msg
          }
        }
?>

<!DOCTYPE html>
<html>
<head>
  <title>Mail Send By using PHPMailer</title>
  <link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
</head> 
<body class="cbp-spmenu-push">
  <div class="container">
    <form class="form-horizontal" method="post">
      <h1><center><b><i>Registation Form</i></b></center></h1>
      <div class="form-group">
        <label class="col-md-4 control-label">username</label>  
        <div class="col-md-4">
        <input name="username" type="text" placeholder="placeholder" class="form-control">
          
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">email</label>  
        <div class="col-md-4">
        <input name="email" type="text" placeholder="placeholder" class="form-control">
          
        </div>
      </div>

      <!-- Password input-->
      <div class="form-group">
        <label class="col-md-4 control-label">Password</label>
        <div class="col-md-4">
          <input name="password" type="password" placeholder="placeholder" class="form-control">
          
        </div>
      </div>

      <!-- Button -->
      <div class="form-group">
        <div class="col-md-4"></div>
        <div class="col-md-4">
          <button name="save" class="btn btn-success">Login</button>
        </div>
        <div class="col-md-4"></div>
      </div>
    </form>
  </div>
</body>
</html>
