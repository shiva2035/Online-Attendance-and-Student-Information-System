<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen"><br>
<div class="container">
<?php
if(array_key_exists("cid",$_GET))
{
	$cid = $_GET['cid'];
	require_once("checkAccess.php");
	include("conn.php");
	$x1 = "select * from courses where course_id='$cid'";
	$x2 = mysql_query($x1);
	echo "<form action=\"admin_modifyCourse.php\" method=\"post\">";
	echo "<br><table align=center>";
	while($row=mysql_fetch_array($x2))
	{
		echo "<tr><td>Coure ID</td><td><input type=text value=\"".$row['course_id']."\" name=\"ccourse_id\" readonly=true></td></tr>";
		echo "<tr><td>Coure Name</td><td><input type=text value=\"".$row['course_name']."\" name=\"ccourse_name\"></td></tr>";
		echo "<tr><td>Faculty ID</td><td><input type=text value=\"".$row['fac_id']."\" name=\"cfac_id\"></td></tr>";
		echo "<tr><td>Coure Timings</td><td><input type=text value=\"".$row['course_timings']."\" name=\"ccourse_timings\"></td></tr>";
		echo "<tr><td>Total Lecture Hours</td><td><input type=text value=\"".$row['total_lects']."\" name=\"ctotal_lects\"></td></tr>";
		echo "<tr><td>Remarks</td><td><input type=text value=\"".$row['remarks']."\" name=\"cremarks\"></td></tr>";
		echo "<tr><td><input type=reset value=RESET class=\"btn btn-warning\"></td><td> <input type=submit name=submit value=\"Modify this Course\" class=\"btn btn-success\"></td></tr>";
	}
	echo "</table></form>";
}
else
{
?>
<fieldset>
<legend><b>Enter Course Id</b></legend>
<form action="" method=get><input type="text" name="cid" placeholder="Enter Course ID(Ex: CS2102)"><br><input type="submit" name="submit" value="Get Course Details" class="btn btn-info"></form>
</fieldset>
<?php
}	
?>
</div>
