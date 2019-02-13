<?php
	session_start();
	$_SESSION['adlogin']="";
	session_unset($_SESSION['adlogin']);
	header("Location:login.php");

?>