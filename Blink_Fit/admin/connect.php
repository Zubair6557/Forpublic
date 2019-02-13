<?php
	$conn=mysqli_connect("localhost","root","","fitness");
	if(!isset($_SESSION['adlogin'])) 
    { 
        session_start(); 
    } 
?>
