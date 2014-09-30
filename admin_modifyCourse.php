<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen"><br>
<div class="container">
<?php
	require_once("checkAccess.php");
	include("conn.php");
	if(array_key_exists("submit",$_POST))
	{
		$cid= $_POST['ccourse_id'];
		$cname = $_POST['ccourse_name'];
		$fac_id = $_POST['cfac_id'];
		$course_timings =$_POST['ccourse_timings'];
		$total_lects = $_POST['ctotal_lects'];
		$remarks = $_POST['cremarks'];
		$x1 = "update courses  set `course_id`='$cid', `course_name`='$cname',`fac_id`='$fac_id',`course_timings`='$course_timings',`total_lects`='$total_lects',`remarks`='$remarks' where course_id='$cid';";
		$x2 = mysql_query($x1);
		if(!$x2)
			echo "<br><br><center><font color=red><b>".mysql_error()."</b></font></center>";
		else
		{
			echo "<br><br><center><font color=green><b>Successfully Modified the course</b></font></center>";
			header("location:admin_editCourse.php");
		}
	}
?>
</div>
