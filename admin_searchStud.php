<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<div class="container">
<?php
	require_once("checkAccess.php");
?>
<div id="body">
<style>
	#in-btn
	{
		background-color:IndianRed;
		border:none;
		width:80;
		text-transform:uppercase;
		color:white;
	}
	#input
	{
		background-color:LightCyan;
		border:1;
		border-style:solid;
		-moz-border-radius:5;
		color:black;
		font-family:aerial;
		font-style:bold;
	}
</style>
</br>
<fieldset style="{background-color:#f8f8f8;margin-left:100;margin-right:100;}">
<form action="" method=post>
<table align=center>
<tr><td>Enter Student ID : </td><td><input type="text" name="stu_id" ></td></tr>
<tr><td></td><td><b>(OR) </b></td></tr>
<tr><td>Enter Student Name : </td><td><input type="text" name="stu_name" ></td></tr>
<tr><td></td><td><input type="reset" value="Reset" class="btn btn-warning"> <input type="submit" name="search" value="Search" class="btn btn-success"></td></tr>
</table>
</form>
<font color=red size=2><center>------------------------- PLEASE DO NOT REFRESH THE PAGE -----------------------------</center></font>
<legend><b>Search Student Details</b></legend><br>
<?php
	include("conn.php");
	if(array_key_exists("search",$_POST))
	{
		$stu_id=$_POST['stu_id'];
		$stu_name=$_POST['stu_name'];
		if($stu_name=='' || $stu_name == NULL)
		$x1= "select * from  `studetails` where uname = '$stu_id'";
		else
		$x1= "select * from  `studetails` where first like '%$stu_name%'";
		$x2 = mysql_query($x1);
		if(!(($nr=mysql_num_rows($x2))>0)) echo "<center><b><font color=red>No Records Found</font></b></center>";
		echo "<b><center>Total Records Found: $nr</b><br><table align=center class=\"table table-hover\">";
		$sl=0;
		echo "<tr style={background-color:green;color:white;}><th>Sl.No</th><th>Student ID</th><th>Student Name</th><th>Father Name</th><th>Mobile  No</th><th>e-Mail ID</th><th>Modify Link</th></tr>";
		while($row= mysql_fetch_array($x2))
		{
			$sl++;
			$uname= $row['uname'];
			echo "<tr height=25><td align=center>$sl</td><td align=center><a href=\"admin_viewStud.php?stu_id=".$row['uname']."\">".$row['uname']."</a></td><td>".$row['first']." ".$row['last']."</td><td>".$row['father']."</td><td>".$row['mobile']."</td><td width=200>".$row['email']."</td><td><a href=\"admin_updateStud.php?stuID=$uname\">Modify</a></td></tr>";
		}
		
	?>		
</fieldset>			
<?php
}
?>
</div>
