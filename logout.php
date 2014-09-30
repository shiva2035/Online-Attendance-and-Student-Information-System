<?php
	session_start();
	$uname=$_SESSION['user'];
	session_destroy();
	header("location:index.php?page=home");
?>
