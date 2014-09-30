<!doctype html>
<head>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
</head>
<?
	//require_once("checkAccess.php");
?>
</br>
<?php
if(!array_key_exists("save",$_POST))
{
?>
	<div class="container">
	<fieldset>
	<legend style="{background-color:maroon;color:white;}"><b>Student Registration</b></legend><br>
	<center><b><u><font color="red" size=2>Fill the below fields carefully, Once you save the options they cannot be edited.</u><br><br>* If any field is not relevant to you then type "NA" in that field</font></center></br>
	<form action="" method="post">
	<fieldset><legend> Student Details</legend>
	<br>
	<table align=center>
	<tr><td >University ID:</td><td><input type="text" name="uname" placeholder="Enter Your Roll Number"><font size=1 color=red>(Your University Roll No)</font></td></tr>
	<tr><td >Password:</td><td><input type="password" name="password" placeholder="Type Password"> Re-Enter Password:&nbsp;&nbsp;&nbsp;&nbsp;<input type="password" name="password" placeholder="Re-type Password"></td></tr>
	<tr><td >Student Name:</td><td><input type="text" name="first" placeholder="Enter Your First Name" > Last Name/Surname:&nbsp;&nbsp;<input type="text" name="last" placeholder="Enter Your Last Name"></td></tr>
	<tr><td >Father Name:</td><td><input type="text" name="father" placeholder="Your Father Name" > Mother Name: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="mother" placeholder="Your Mother Name"></td></tr>
	<tr><td >Date of Birth:</td><td><select name="d" ><option>Date</option><?php for($i=1;$i<=31;$i++) if($i<10)echo "<option value=\"0$i\">0$i</option>";else echo "<option value=\"$i\">$i</option>";?></select><select name="m" ><option>Month</option><?php for($i=1;$i<=12;$i++) if($i<10)echo "<option value=\"0$i\">0$i</option>";else echo "<option value=\"$i\">$i</option>";?></select><select name="y" ><option>Year</option><?php for($i=1960;$i<=2012;$i++) echo "<option>$i</option>";?></select></td></tr>
	<tr><td >Blood Group</td><td><select name="bg" ><option>Select Your Blood Group</option>
	<option value="A+">A+</option>
	<option value="A-">A-</option>
	<option value="B+">B+</option>
	<option value="B-">B-</option>
	<option value="AB+">AB+</option>
	<option value="AB-">AB-</option>
	<option value="O+">O+</option>
	<option value="O-">O-</option>	
	</select></td></tr>
	<tr><td >Class/Section</td><td>
	<select name="class" ><option>Select Your Class/Section</option>
	<option value="SEA">Second Year - Section A</option>
	<option value="SEB">Second Year - Section B</option>
	<option value="TEA">Third Year - Section A</option>
	<option value="TEB">Third Year - Section B</option>
	<option value="BEA">Fourth Year - Section A</option>
	<option value="BEB">Fourth Year - Section B</option>
	<option value="ME2">M.Tech - I</option>
	<option value="ME1">M. Tech - II</option>
	</select></td></tr>
	<tr><td >Tutor ID:</td><td><input type="text" name="tutor_id" placeholder="Enter Your Tutor ID"></td></tr>		
	<tr><td >e-Mail ID:</td><td><input type="text" name="email" placeholder="Enter Your E-Mail ID" ></td></tr>
	<tr><td >Phone Number:</td><td><input type="text" name="mobile" placeholder="Enter Your 10-digit Mobile Number"></td></tr>
	<tr><td >Emergency Conact:</td><td><input type="text" name="emergency_mob" placeholder="Enter Your Emergency Contact Number"></td></tr>	
	</table>
	</fieldset>
	<fieldset><legend> Parents Communication Details</legend>
	<br>
	<table align=center>
	<tr><td >Father e-Mail ID:</td><td><input type="text" name="fath_email" placeholder="Enetr Your Father E-Mail ID" ></td></tr>
	<tr><td >Father Mobile:</td><td><input type="text" name="fath_mobile" placeholder="Enter Your Father Mobile No" ></td></tr>
	<tr><td >Mother e-Mail ID:</td><td><input type="text" name="moth_email" placeholder="Enter Your Mother E-Mail ID"></td></tr>		
	</table>
	</fieldset><br>

	<table align=center class="table">	
	<tr bgcolor=skyblue><th>Present Address</th><th></th><th width=20></th><th>Permanent Address</th><th></th></tr>
	<tr><td><font color=blue size=2>Village/Street/PO:</td><td></font><input type="text" name="present_addr1" placeholder="Village/Street/Door No"></td><td></td><td><font color=red size=2>Village/Street/PO:</td><td></font><input type="text" name="permanent_addr1" placeholder="Village/Street/Door No"></td></tr>
	<tr><td><font color=blue size=2>Mandal/Division:</td><td></font><input type="text" name="present_addr2" placeholder="Mandal/Thaluka/Division"></td><td></td><td><font color=red size=2>Mandal/Division:</td><td></font><input type="text" name="permanent_addr2" placeholder="Mandal/Thaluka/Division"></td> </tr>
	<tr><td><font color=blue size=2>Dist,PIN, State:</td><td></font><input type="text" name="present_addr3" placeholder="District/PIN code"></td><td></td><td><font color=red size=2>Dist,PIN, State:</td><td></font><input type="text" name="permanent_addr3" placeholder="District/PIN code"></td></tr>
	</table>
	<br>
	<table align=center>
	<tr><td></td><td><input type="reset" value="RESET" class="btn btn-warning">&nbsp;&nbsp;<input type="submit" value="Register" name="save" class="btn btn-success"></td></tr>

	</table>
	</form>
	</fieldset>
	</div>
<?php
}
include("conn.php");
if(array_key_exists("save",$_POST))
{
	foreach($_POST as $inp)
	{
		if($inp == '')
		{
			header("location:admin_addStud.php");
		}
		else if($inp = NULL)
		{
			header("location:admin_addStud.php");
		}
	}
	$uname=$_POST['uname'];
	$password = $_POST['password'];
	$first = $_POST['first'];
	$last = $_POST['last'];
	$father = $_POST['father'];
	$mother = $_POST['mother'];
	$dob = $_POST['y']."-".$_POST['m']."-".$_POST['d'];
	$blood=$_POST['bg'];
	$class = $_POST['class'];
	$tutor_id=$_POST['tutor_id'];	
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$emergency_mob = $_POST['emergency_mob'];
	$fath_email = $_POST['fath_email'];		
	$moth_email = $_POST['moth_email'];
	$fath_mobile = $_POST['fath_mobile'];
	$present_addr = $_POST['present_addr1'].",".$_POST['present_addr2'].",".$_POST['present_addr3'];
	$perma_addr = $_POST['permanent_addr1'].",".$_POST['permanent_addr2'].",".$_POST['permanent_addr3'];	
	$save=$_POST["save"];
	$query="insert into studetails values(\"$uname\",\"$password\",\"$first\",\"$last\",\"$father\",\"$mother\",\"$dob\",\"$blood\",\"$email\",\"$fath_email\",\"$moth_email\",\"$mobile\",\"$fath_mobile\",\"$emergency_mob\",\"$present_addr\",\"$perma_addr\",\"$class\",\"$tutor_id\");";
	$result=mysql_query("$query");
	if($result)
	{
		echo "<font color=green>Successfully Inserted Records. Please Login to Access Your Account <a href=\"index.php?page=login\">Login</a></font>";
		//header('location:profile_pic.php');
	}
	else
	{
		echo "<br/><b>".mysql_error();
	}
}
?>
</div>
</body>
