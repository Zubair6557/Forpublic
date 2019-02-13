<?php
	session_start();
	$_SESSION['id']        = "";
	session_unset($_SESSION['id']);
	header("Location:index.php");

?>