<?php
	require_once("checkAccess.php");
	include("conn.php");
//	session_start();
	$roll = $_GET['rollno'];
	$sub = $_GET['sub'];
	$dt = $_GET['dt'];
	$stat = $_GET['stat'];
	$mon =date("m");
	$yr = date("Y");
	$tab_n= $mon."_".$yr;
	$table = "attendance_$tab_n";
	$s1= "update $table set `$dt`='$stat' where `rollno`= '$roll' AND `sub` = '$sub'";
	$s2= mysql_query($s1);
	if(!$s2)echo mysql_error();
	else
	{
		header("location:fac_modAttd.php");
	}
?>
