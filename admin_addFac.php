<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">

<?php
	//require_once("checkAccess.php");
?>
<div id="wrap">
<div class="container">
</br>
<?php

	if(!array_key_exists("save",$_POST))
	{
?>
	<fieldset>
	<legend><b>Faculty Registration</b></legend>
	<center><b><u><font color="red" size=2>Fill the below fields carefully, Once you save the options they cannot be edited.</u><br><br>* If any field is not relevant to you then type "NA" in that field</font></center></br>
	<form action="" method="post">
	<fieldset><legend>Faculty Details</legend>
	<table align=center>
	<tr><td>Faculty ID</td><td><input type="text" name="fac_id" placeholder="Faculty ID"><font color=red size=1>(Ex: fac_01 )</font></td></tr>
	<tr><td>Password</td><td><input type="password" name="password" placeholder="Enter Password"> Re-enter Password:<input type="password" name="password" placeholder="Re-Enter Password"></td></tr>
	<tr><td>Faculty Name:</td><td><input type="text" name="first" placeholder="First Name"> Last Name/Surname:<input type="text" name="last" placeholder="Last Name"></td></tr>
	<tr><td></td></tr>
	<tr><td>Date of Birth:</td><td><select name="d" ><option>Date</option><?php for($i=1;$i<=31;$i++) if($i<10)echo "<option value=\"0$i\">0$i</option>";else echo "<option value=\"$i\">$i</option>";?></select><select name="m" ><option>Month</option><?php for($i=1;$i<=12;$i++) if($i<10)echo "<option value=\"0$i\">0$i</option>";else echo "<option value=\"$i\">$i</option>";?></select><select name="y" ><option>Year</option><?php for($i=1960;$i<=2012;$i++) echo "<option>$i</option>";?></select></td></tr>
	<tr><td>Date of Joining:</td><td><select name="dj" ><option>Date</option><?php for($i=1;$i<=31;$i++) if($i<10)echo "<option value=\"0$i\">0$i</option>";else echo "<option value=\"$i\">$i</option>";?></select><select name="mj" ><option>Month</option><?php for($i=1;$i<=12;$i++) if($i<10)echo "<option value=\"0$i\">0$i</option>";else echo "<option value=\"$i\">$i</option>";?></select><select name="yj" ><option>Year</option><?php for($i=1960;$i<=2012;$i++) echo "<option>$i</option>";?></select></td></tr>	
	<tr><td>Experience:</td><td><select name="expy" ><option>Yrs</option><?php for($i=1;$i<=20;$i++) if($i<10)echo "<option value=\"0$i\">0$i</option>";else echo "<option value=\"$i\">$i</option>";?></select><select name="expm" ><option>Month</option><?php for($i=1;$i<=12;$i++) if($i<10)echo "<option value=\"0$i\">0$i</option>";else echo "<option value=\"$i\">$i</option>";?></select></td></tr>		
	<tr><td>Blood Group:</td><td>
	<select name="bg" >
	<option>Select Your Blood Group</option>
	<option value="A+">A+</option>
	<option value="A-">A-</option>
	<option value="B+">B+</option>
	<option value="B-">B-</option>
	<option value="AB+">AB+</option>
	<option value="AB-">AB-</option>
	<option value="O+">O+</option>
	<option value="O-">O-</option>	
	</select></td></tr>
	<tr><td>EMAIL ID</td><td><input type="text" name="email" placeholder="Enter your e-Mail ID"></td></tr>
	<tr><td>Class/Section</td><td>
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
	<tr><td>Mobile No:</td><td><input type="text" name="mobile" placeholder="Enter Your 10-digit Mobile Number"><font color=red size=1>(Ex: 9963808956 Only 10 digits)</font></td></tr>
	<tr><td>Emergency Contact No:</td><td><input type="text" name="emergency_mob" placeholder="Emergency Contact Number"><font color=red size=1>(Ex: 9963808956 Only 10 digits)</font></td></tr>
	<tr><td>Any Remarks</td><td><input type="text" name="remarks" placeholder="Enter If you have any Remarks"></td></tr>
	</table>
	</fieldset>
	<table align=center class="table">	
	<tr bgcolor=skyblue><th>Present Address</th><th></th><th width=20></th><th>Permanent Address</th><th></th></tr>
	<tr><td><font color=blue size=2>Village/Street/PO:</td><td></font><input type="text" name="present_addr1"></td><td></td><td><font color=red size=2>Village/Street/PO:</td><td></font><input type="text" name="permanent_addr1"></td></tr>
	<tr><td><font color=blue size=2>Mandal/Division:</td><td></font><input type="text" name="present_addr2"></td><td></td><td><font color=red size=2>Mandal/Division:</td><td></font><input type="text" name="permanent_addr2"></td> </tr>
	<tr><td><font color=blue size=2>Dist,PIN, State:</td><td></font><input type="text" name="present_addr3"></td><td></td><td><font color=red size=2>Dist,PIN, State:</td><td></font><input type="text" name="permanent_addr3"></td></tr>
	</table>
	</fieldset>
	<br><table align=center>
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
			header("location:admin_addFac.php");
		}
		else if($inp = NULL)
		{
			header("location:admin_addFac.php");
		}
	}
	$fac_id = $_POST['fac_id'];
	$password = $_POST['password'];
	$first = $_POST['first'];
	$last = $_POST['last'];
	$dob = $_POST['y']."-".$_POST['m']."-".$_POST['d'];
	$doj = $_POST['yj']."-".$_POST['mj']."-".$_POST['dj'];
	$exp = $_POST['expy']."Yrs-".$_POST['expm']."Months";
	$blood=$_POST['bg'];
	$email = $_POST['email'];
	$class = $_POST['class'];
	$mobile = $_POST['mobile'];
	$emergency_mob = $_POST['emergency_mob'];
	$present_addr = $_POST['present_addr1'].",".$_POST['present_addr2'].",".$_POST['present_addr3'];
	$perma_addr = $_POST['permanent_addr1'].",".$_POST['permanent_addr2'].",".$_POST['permanent_addr3'];
	$remarks = $_POST['remarks'];
	$save=$_POST["save"];
	$query="insert into fac_users values(\"$fac_id\",\"$password\",\"$first\",\"$last\",\"$dob\",\"$doj\",\"$exp\",\"$blood\",\"$email\",\"$mobile\",\"$emergency_mob\",\"$present_addr\",\"$perma_addr\",\"$class\",\"$remarks\");";
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
</div></div>
<br><br><hr>
