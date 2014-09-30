<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?php
	//session_start();
	require_once("checkAccess.php");
	$uname = $_SESSION['user']
?>
<fieldset style="{margin-left:150;margin-right:150;}">
<legend><b>Bulk Action : Todays Attendance</b></legend>
<?php
if(array_key_exists("submit_p",$_POST))
{
	include("conn.php");
	$mon =date("m");
	$yr = date("Y");
	$tab_n= $mon."_".$yr;
	$table = "attendance_$tab_n";
	$dt = date("d");
	
		$q1=mysql_query("select * from courses where fac_id='$uname'");
		$row=mysql_fetch_array($q1);
		$subj=$row['course_id'];	
	
	$x1 = "update $table set `$dt`='P' where `sub` = '$subj' ";
	$x2 = mysql_query($x1);
	if(!$x2) echo "<b><font color=red><center><br>".mysql_error()."<br><br>";
	else
	{
		header("location: fac_modAttd.php");
	}
}
if(array_key_exists("submit_h",$_POST))
{
	include("conn.php");
	$mon =date("m");
	$yr = date("Y");
	$tab_n= $mon."_".$yr;
	$table = "attendance_$tab_n";
	$dt = date("d");
		
		$q1=mysql_query("select * from courses where fac_id='$uname'");
		$row=mysql_fetch_array($q1);
		$subj=$row['course_id'];	

	$x1 = "update $table set `$dt`='H' where `sub` = '$subj' ";
	$x2 = mysql_query($x1);
	if(!$x2) echo "<b><font color=red><center><br>".mysql_error()."<br><br>";
	else
	{
		header("location: fac_modAttd.php");
	}	
}
else
{
?>	
	<div class="container">
	<table class="table table-hover" width=500>
	<form action="" method="post">	
	<tr><td>Make All Students Present today</td><td><input type="submit" name="submit_p" id="submit" value="All Students Present Today" class="btn btn-info"></a></td></tr>
	<tr><td>Make today as Holiday</td><td><input type="submit" name="submit_h" value="Declare today as Holiday" class="btn btn-info"></td></tr>
	</form>
	</table>
	</div>
<?php 	
}	
?>
</fieldset>
