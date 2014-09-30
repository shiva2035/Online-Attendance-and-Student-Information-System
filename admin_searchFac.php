<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<br><div class="container">
<fieldset style="{background-color:#f8f8f8;margin-left:100;margin-right:100;}">
<form action="" method=post>
<table align=center>
<tr><td>Enter Faculty ID : </td><td><input type="text" name="fac_id"></td></tr>
<tr><td></td><td><b>(OR)</b></td></tr>
<tr><td>Enter Faculty Name : </td><td><input type="text" name="fac_name"></td></tr>
<tr><td></td><td><input type="reset" value="Reset" class="btn btn-warning"> <input type="submit" name="search" value="Search" class="btn btn-success"></td></tr>
</table>
</form>
<font color=red size=2><center>------------------------- PLEASE DO NOT REFRESH THE PAGE -----------------------------</center></font>
<legend><b>Search Faculty Details</b></legend><br>
<?php
	include("conn.php");
	if(array_key_exists("search",$_POST))
	{
		$fac_id=$_POST['fac_id'];
		$fac_name=$_POST['fac_name'];
		if($fac_name=='' || $fac_name == NULL)
		$x1= "select * from  `fac_users` where uname = '$fac_id'";
		else
		$x1= "select * from  `fac_users` where first like '%$fac_name%'";
		$x2 = mysql_query($x1);
		if(!(($nr=mysql_num_rows($x2))>0)) echo "<center><b><font color=red>No Records Found</font></b></center>";
		echo "<b><center>Total Records Found: $nr</b><br><table align=center class=\"table table-hover\">";
		$sl=0;
		echo "<tr style={background-color:green;color:white;}><th>Sl.No</th><th>Faculty ID</th><th>Faculty Name</th><th>Experience</th><th>Mobile  No</th><th>e-Mail ID</th><th>Modify Link</th></tr>";
		while($row= mysql_fetch_array($x2))
		{
			$sl++;
			$uname= $row['uname'];
			echo "<tr height=25><td align=center>$sl</td><td align=center><a href=\"admin_viewFac.php?fac_id=".$row['uname']."\">".$row['uname']."</a></td><td>".$row['first']." ".$row['last']."</td><td>".$row['exp']."</td><td>".$row['mobile']."</td><td>".$row['email']."</td><td><a href=\"admin_updateFac.php?facID=$uname\">Modify</a></td></tr>";
		}
		echo "</table><br><br>";
		
	?>		
</fieldset>			
<?php
}
?>
</div>
