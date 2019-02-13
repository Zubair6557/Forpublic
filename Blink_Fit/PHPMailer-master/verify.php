<?php
$conn=mysqli_connect("localhost","root","","mail");

$email = $_REQUEST['email'];
$activationkey = $_REQUEST['activationkey'];

$select="SELECT * FROM mail WHERE email='" . $email  ."' AND activationkey='". $activationkey ."'";

$res=mysqli_query($conn,$select);

if (mysqli_num_rows($res) == 1) {
  $up="UPDATE mail SET activationkey=NULL, statues=1 WHERE email ='". $email ."' AND activationkey='". $activationkey ."'";
  $res=mysqli_query($conn,$up) or die(mysql_error());
  echo 'Your Account has been activated';
} else {
  echo 'Account couldnot be activated';
}
?>