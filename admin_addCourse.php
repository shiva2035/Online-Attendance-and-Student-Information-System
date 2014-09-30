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
		$x1 = "insert into  courses values('$cid','$cname','$fac_id','$course_timings','$total_lects','$remarks')";
		$x2 = mysql_query($x1);
		if(!$x2)
			echo "<br><br><center><font color=red><b>".mysql_error()."</b></font></center>";
		else
		{
			echo "<br><br><center><font color=green><b>Successfully Modified the course</b></font></center>";
			header("location:admin_editCourse.php");
		}
	}
	else
	{
?>

<form action="" method="post">
<br><center><b>Add New Course</b><hr>
<table align=center>
<tr><td>Coure ID</td><td><input type=text name="ccourse_id" placeholder="Enter Course ID(Ex: CS2101)"></td></tr>
<tr><td>Coure Name</td><td><input type=text name="ccourse_name" placeholder="Enter Course Name"></td></tr>
<tr><td>Faculty ID</td><td><input type=text name="cfac_id" placeholder="Enter Faculty ID(Ex: fac_01)"></td></tr>
<tr><td>Coure Timings</td><td><input type=text name="ccourse_timings" placeholder="Ex:08.35-09.30"></td></tr>
<tr><td>Total Lecture Hours</td><td><input type=text name="ctotal_lects" placeholder="Enter Total No of Lecture Hours"></td></tr>
<tr><td>Remarks</td><td><input type=text name="cremarks" placeholder="Enter Remarks if any"></td></tr>
<tr><td><input type=reset value=RESET class="btn btn-warning"></td><td> <input type=submit name=submit value="Add this Course" class="btn btn-success"></td></tr>
</table></form>
<?php
	
	}
		
?>	
