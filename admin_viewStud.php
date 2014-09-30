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
<fieldset style="{background-color:#f8f8f8;margin-left:250;margin-right:250;}" align=center>
<legend style="{background-color:maroon;color:white;}"><b>Student Details</b></legend>
<?php
	include("conn.php");
	session_start();
	if(($_SESSION['utype']=="admin")||($_SESSION['utype']=="faculty"))
	$s1 = "select * from studetails where uname='".$_GET['stu_id']."'";
	else
	$s1 = "select * from studetails where uname='".$_SESSION['user']."'";
	$s2= mysql_query($s1);
	while($row=mysql_fetch_array($s2))
	{
	?>
		<fieldset style="{background-color:#f8f8f8;//margin-left:150;//margin-right:150;}">
		<legend style="{background-color:orange;color:white;width:100%;}"><b><?php echo $row['uname'];?></b>'s Details</legend>
		<table>
		<img src="profile-face/<?php echo $row['uname']; ?>.jpg" id="img">
		<tr><td id="const1">Full Name:</td><td id="const2"><?php echo $row['first']."  ". $row['last'];?></td></tr>
		<tr><td id="const1">Father Name:</td><td id="const2"><?php echo $row['father'];?></td></tr>
		<tr><td id="const1">Mother Name:</td><td id="const2"><?php echo $row['mother'];?></td></tr>
		<tr><td id="const1">Student ID:</td><td id="const2"><? echo $row['uname'];?></td></tr>
		<tr><td id="const1">Date of Birth:</td><td id="const2"><?php echo $row['dob'];?></td></tr>
		<tr><td id="const1">Blood Group:</td><td id="const2"><?php echo $row['blood'];?></td></tr>
		<tr><td id="const1">Class/Section:</td><td id="const2"><?php echo $row['class'];?></td></tr>
		<tr><td id="const1">Tutor ID:</td><td id="const2"><?php echo $row['tutor_id'];?></td></tr>		
		<tr><td id="const1">Student Resume/CV:</td><td id="const2"><a href="resume/<?php echo $row['uname']?>.png"><?php echo $row['uname'];?></a></td></tr>
		</table>
		
		</fieldset><br>
		<fieldset><legend style="{background-color:orange;color:white;width:100%;}">Communication Details</legend>
		<table>
		<tr><td id= "const1">Present Address:</td><td id="const2"><?php echo $row['present_addr'];?></td>
		<tr><td id= "const1">Permanent Address:</td><td id="const2"><?php echo $row['permanent_addr'];?></td>
		<tr><td id="const1">e-Mail ID:</td><td id="const2"><?php echo $row['email'];?></td></tr>
		<tr><td id="const1">Phone Number:</td><td id="const2"><?php echo $row['mobile'];?></td></tr>
		<tr><td id="const1">Emergency Conact:</td><td id="const2"><?php echo $row['emergency_mob'];?></td></tr>
		</table>
		</fieldset>
		<fieldset><legend style="{background-color:orange;color:white;width:100%;}"> Parents Communication Details</legend>
		<table>
		<tr><td id="const1">Father Mobile:</td><td id="const2"><?php echo $row['fath_mobile'];?></td></tr>
		<tr><td id="const1">Father e-Mail:</td><td id="const2"><?php echo $row['fath_email'];?></td></tr>
		<tr><td id="const1">Mother e-Mail:</td><td id="const2"><?php echo $row['moth_email'];?></td></tr>
		</table>
		</fieldset>
		<br>
	<?php
	}
	?>	
</fieldset>
	<center><a href="" onclick="javascript:window.print()">Print Profile</a></center>
</div>
