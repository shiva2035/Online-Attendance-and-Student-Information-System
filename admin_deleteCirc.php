<?php
	require_once("checkAccess.php");
	//session_start();
	include("conn.php");
	$cid = $_GET['circular'];
	$res = mysql_query("select * from notice where cid ='$cid'");
	$row = mysql_fetch_array($res);
	echo $row['link'];
	$sq= "DELETE FROM `oams`.`notice` WHERE `notice`.`cid` = '$cid'";
	$sq1=mysql_query($sq);
	if(!$sq1)echo mysql_error();
	else
	{
		$link = "notices/".$row['link'];
		$x=unlink("$link");
		if($x) echo "Success";
		header("location:admin_edit_circ.php");
	}
?>
