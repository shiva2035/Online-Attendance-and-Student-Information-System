<?php
	session_start();
	$utype=$_SESSION['utype'];
	if(!isset($_SESSION['user'])||($utype == "student"))
	{
		header("Location: unauth.php");
	}
?>
