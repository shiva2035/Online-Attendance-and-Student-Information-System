<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen"><br>
<div class="container">
<?php
	require_once("checkAccess.php");
	include("conn.php");
	$x1 = "select * from courses";
	$x2 = mysql_query($x1);
	echo "<br><table align=center>";
	echo "<tr><th>Course ID</th><th>Course Name</th><th>Faculty ID</th><th>Course Timings</th><th>Total Lect.Hours</th><th>Remarks</th><th>Modify Course</th></tr>";
	while($row=mysql_fetch_array($x2))
	{
		echo "<tr><td>".$row['course_id']."</td><td>".$row['course_name']."</td><td>".$row['fac_id']."</td><td>".$row['course_timings']."</td><td>".$row['total_lects']."</td><td>".$row['remarks']."</td><td align=center><a href=\"admin_editCourse.php?cid=".$row['course_id']."\"><image src=images/edit.png></a></td></tr>";
	}
	echo "</table>";
	
?>
