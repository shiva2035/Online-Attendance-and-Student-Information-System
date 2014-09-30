<?php
	session_start();
	if(!array_key_exists("save",$_POST)){
?>
<div id="body">
<?php //if(!array_key_exists("save",$_POST)){?>
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
<fieldset style="{background-color:#f8f8f8;margin-left:250;margin-right:250;}">
<legend><b>Faculty Registration</b></legend><br>
<center><b><u><font color="red">Fill the below fields carefully, Once you save the options they cannot be edited.</u></font></center></br>
<form action="" method="post">
	<table align=center>
	<tr><td>Faculty ID</td><td><input type="text" name="fac_id" id="input"><font color=red size=1>(Ex: fac_01 )</font></td></tr>
	<tr><td>Password</td><td><input type="password" name="password" id="input"></td></tr>
	<tr><td>First Name:</td><td><input type="text" name="first"id="input"></td></tr>
	<tr><td>Last Name:</td><td><input type="text" name="last"id="input"></td></tr>
	<tr><td>Date of Birth:</td><td><select name="d" id="input"><option>Date</option><?php for($i=1;$i<=31;$i++) if($i<10)echo "<option value=\"0$i\">0$i</option>";else echo "<option value=\"$i\">$i</option>";?></select><select name="m" id="input"><option>Month</option><?php for($i=1;$i<=12;$i++) if($i<10)echo "<option value=\"0$i\">0$i</option>";else echo "<option value=\"$i\">$i</option>";?></select><select name="y" id="input"><option>Year</option><?php for($i=1960;$i<=2012;$i++) echo "<option>$i</option>";?></select></td></tr>
	<tr><td>Date of Joining:</td><td><select name="dj" id="input"><option>Date</option><?php for($i=1;$i<=31;$i++) if($i<10)echo "<option value=\"0$i\">0$i</option>";else echo "<option value=\"$i\">$i</option>";?></select><select name="mj" id="input"><option>Month</option><?php for($i=1;$i<=12;$i++) if($i<10)echo "<option value=\"0$i\">0$i</option>";else echo "<option value=\"$i\">$i</option>";?></select><select name="yj" id="input"><option>Year</option><?php for($i=1960;$i<=2012;$i++) echo "<option>$i</option>";?></select></td></tr>	
	<tr><td>Experience:</td><td><select name="expy" id="input"><option>Yrs</option><?php for($i=1;$i<=20;$i++) if($i<10)echo "<option value=\"0$i\">0$i</option>";else echo "<option value=\"$i\">$i</option>";?></select><select name="expm" id="input"><option>Month</option><?php for($i=1;$i<=12;$i++) if($i<10)echo "<option value=\"0$i\">0$i</option>";else echo "<option value=\"$i\">$i</option>";?></select></td></tr>		
	<tr><td>Blood Group:</td><td>
	<select name="bg" id="input">
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
	<tr><td>EMAIL ID</td><td><input type="text" name="email" id="input"></td></tr>
	<tr><td>Mobile No:</td><td><input type="text" name="mobile"id="input"><font color=red size=1>(Ex: 9963808956 Only 10 digits)</font></td></tr>
	<tr><td>Emergency Contact No:</td><td><input type="text" name="emergency_mob"id="input"><font color=red size=1>(Ex: 9963808956 Only 10 digits)</font></td></tr>
	<tr><td>Any Remarks</td><td><input type="text" name="remarks" id="input"></td></tr>
	</table>
	<fieldset style="{margin-left:100;margin-right:100;}"><legend>Present Address</legend>
	<table align=center>
	<tr><td><font color=blue size=2>Village/Street/PO:</td><td></font><input type="text" name="present_addr1"id="input"></td></tr>
	<tr><td><font color=blue size=2>Mandal/Division:</td><td></font><input type="text" name="present_addr2"id="input"></td></tr>
	<tr><td><font color=blue size=2>Dist,PIN, State:</td><td></font><input type="text" name="present_addr3"id="input"></td></tr>
	</table>
	</fieldset>	
	<fieldset style="{margin-left:100;margin-right:100;}"><legend>Permanent Address</legend>
	<table align=center>
	<tr><td><font color=red size=2>Village/Street/PO:</td><td></font><input type="text" name="permanent_addr1"id="input"></td></tr>
	<tr><td><font color=red size=2>Mandal/Division:</td><td></font><input type="text" name="permanent_addr2"id="input"></td></tr>
	<tr><td><font color=red size=2>Dist,PIN, State:</td><td></font><input type="text" name="permanent_addr3"id="input"></td></tr>
	</table>
	</fieldset>
	<br><table align=center>
	<tr><td></td><td><input type="reset" value="RESET" id="in-btn">&nbsp;&nbsp;<input type="submit" value="Register" name="save" id="in-btn"></td></tr>
	</table>
	</form>
	</fieldset>
<?php 
}
	include("conn.php");
	if(array_key_exists("save",$_POST))
	{
		foreach($_POST as $inp)
		{
			if($inp == '' || $inp = NULL)
			{
				header("location:register.php");
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
		$mobile = $_POST['mobile'];
		$emergency_mob = $_POST['emergency_mob'];
		$present_addr = $_POST['present_addr1'].",".$_POST['present_addr2'].",".$_POST['present_addr3'];
		$perma_addr = $_POST['permanent_addr1'].",".$_POST['permanent_addr2'].",".$_POST['permanent_addr3'];
		$remarks = $_POST['remarks'];
		$save=$_POST["save"];
		$query="insert into fac_users values(\"$fac_id\",\"$password\",\"$first\",\"$last\",\"$dob\",\"$doj\",\"$exp\",\"$blood\",\"$email\",\"$mobile\",\"$emergency_mob\",\"$present_addr\",\"$perma_addr\",\"$remarks\");";
		$result=mysql_query("$query");
		if($result)
		{
			header('location:profile_face.php');
		}
		else
		{
			echo "<br/><b>".mysql_error();
		}
	}
?>
</div>
