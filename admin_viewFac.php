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
		//border:1;
		//border-style:solid;
		//-moz-border-radius:5;
		color:black;
		font-family:aerial;
		font-style:bold;
	}
	#const1
	{
		color:white;
		background-color:maroon;
		text-align:left;
		width:180;
	}
	#const2
	{
		color:green;
		background-color:LightCyan;
		text-align:left;
		width:400
	}
	#const2:hover
	{
		background-color:skyblue;
	}	
	#img
	{
		width:80;
		height:80;
		float:right;
		border:1.5px;
		border-style:solid;
	}
	#img:hover
	{
		//width:320;
		//height:240;
	}	
</style>
</br>
<fieldset style="{background-color:#f8f8f8;margin-left:250;margin-right:250;}">
<legend style="{background-color:maroon;color:white;}"><b>Faculty Details</b></legend>
<?php
	include("conn.php");
	session_start();
	if($_SESSION['utype']=="faculty")
	$s1 = "select * from fac_users where uname='".$_SESSION['user']."'";
	else
	$s1 = "select * from fac_users where uname='".$_GET['fac_id']."'";
	$s2= mysql_query($s1);
	while($row=mysql_fetch_array($s2))
	{
	?>
		<fieldset style="{background-color:#f8f8f8;//margin-left:150;//margin-right:150;}">
		<legend style="{background-color:orange;color:white;width:250;}"><b><?php echo $row['uname'];?></b>'s Details</legend>
		<table align=center>
		<img src="profile-face/<?php echo $row['uname']; ?>.jpg" id="img">
		<tr><td id="const1">Faculty Full Name:</td><td id="const2"><?php echo $row['first']."  ";?><?php echo $row['last'];?></td></tr>
		<tr><td id="const1">Faculty ID:</td><td id="const2"><?php echo $row['uname'];?></td></tr>
		<tr><td id="const1">Date of Birth:</td><td id="const2"><?php echo $row['dob'];?></td></tr>
		<tr><td id="const1">Date of Joining:</td><td id="const2"><?php echo $row['doj'];?></td></tr>
		<tr><td id="const1">Experience:</td><td id="const2"><?php echo $row['exp'];?></td></tr>
		<tr><td id="const1">Blood Group:</td><td id="const2"><?php echo $row['blood'];?></td></tr>
		<tr><td id="const1">Any Other:</td><td id="const2"><?php echo $row['remarks'];?></td></tr>
		<tr><td id="const1">Faculty Resume/CV:</td><td id="const2"><a href="resume/<?php echo $row['uname']; ?>.png"><?php echo $row['uname'];?></a></td></tr>
		</table>
		
		</fieldset><br>
		<fieldset><legend style="{background-color:orange;color:white;width:250;}">Address for Communication</legend>
		<table>
		<tr><td id= "const1">Present Address:</td><td id="const2"><?php echo $row['present_addr'];?></td>
		<tr><td id= "const1">Permanent Address:</td><td id="const2"><?php echo $row['permanent_addr'];?></td>
		<tr><td id="const1">e-Mail ID:</td><td id="const2"><?php echo $row['email'];?></td></tr>
		<tr><td id="const1">Phone Number:</td><td id="const2"><?php echo $row['mobile'];?></td></tr>
		<tr><td id="const1">Emergency Conact:</td><td id="const2"><?php echo $row['emergency_mob'];?></td></tr>
		</table>
		</fieldset><br>
		<fieldset><legend style="{background-color:orange;color:white;width:250;}">Faculty Time Table</legend>
		<table>
		<?php
			$ss1 = "select * from courses where fac_id='".$row['uname']."';";
			$ss2 = mysql_query($ss1);
			while($row1 = mysql_fetch_array($ss2))
			{
				echo "<tr><td id=\"const1\">Course Name:</td><td id=\"const2\">". $row1['course_name']."</td></tr>";
				echo "<tr><td id=\"const1\">Course Code:</td><td id=\"const2\">".$row1['course_id']."</td></tr>";
				echo "<tr><td id=\"const1\">Course Timings:</td><td id=\"const2\">".$row1['course_timings']."</td></tr>";
				echo "<tr><td id=\"const1\">Lectures Per Month:</td><td id=\"const2\">".$row1['total_lects']."</td></tr>";
				echo "<tr><td id=\"const1\">Remarks:</td><td id=\"const2\">".$row1['remarks']."</td></tr>";		
			}
		?>
		</table>
		</fieldset>
	<?php
	}
	?>	
</fieldset>
	<center><a href="" onclick="javascript:window.print()">Print Profile</a></center>
</div>
