<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<div class="container">
<?php
	require_once("checkAccess.php");
	$stuID = $_GET['stuID'];
	//$stuID = 'SEA01';
	include("conn.php");
	$q1= "select * from studetails where uname = '$stuID'";
	$q2= mysql_query($q1);
	echo "<table align=center class=\"table table-hover\"><br>";
	while($row = mysql_fetch_array($q2))
	{
	echo "<legend>".$row['uname']."'s Details Updation</legend>";
	echo "<form action=\"\" method=post >";
?>
	<input type="hidden" name="uname" value="<?php echo $row['uname'];?>">
	<tr><td >Student Name:</td><td><input type="text" name="first" value="<?php echo $row['first'];?>"></td><td>Last Name/Surname:</td><td><input type="text" name="last" value="<?php echo $row['last'];?>"></td></tr>
	<tr><td>Date of Birth:</td><td><input type="text" name="d" value="<?php echo $row['dob'];?>"></td> <td>Blood Group:</td><td><input type="text" name="bg"  value="<?php echo $row['blood'];?>"></td></tr>
	<tr><td >Class/Section</td><td><input type="text" name="class" value="<?php echo $row['class'];?>"></td><td>Tutor ID:</td><td><input type="text" name="tutor_id" value="<?php echo $row['tutor_id'];?>"></td></tr>		
	<tr><td >e-Mail ID:</td><td><input type="text" name="email" value="<?php echo $row['email'];?>" ></td><td >Phone Number:</td><td><input type="text" name="mobile" value="<?php echo $row['mobile'];?>"></td></tr>
	<tr><td >Emergency Conact:</td><td><input type="text" name="emergency_mob" value="<?php echo $row['emergency_mob'];?>"></td></tr>	
	<tr><td >Father Name:</td><td><input type="text" name="father" value="<?php echo $row['father'];?>" ></td><td> Mother Name: </td><td><input type="text" name="mother" value="<?php echo $row['mother'];?>"></td></tr>	
	<tr><td >Father e-Mail ID:</td><td><input type="text" name="fath_email" value="<?php echo $row['fath_email'];?>" ></td><td >Mother e-Mail ID:</td><td><input type="text" name="moth_email" value="<?php echo $row['moth_email'];?>"></td></tr>
	<tr><td >Father Mobile:</td><td><input type="text" name="fath_mobile" value="<?php echo $row['fath_mobile'];?>" ></td></tr>
	<tr><td >Present Address:</td><td><input type="text" name="present_addr" value="<?php echo $row['present_addr'];?>" ></td><td >Permanent Address:</td><td><input type="text" name="permanent_addr" value="<?php echo $row['permanent_addr'];?>"></td></tr>	
	</table>
<center><input type="submit" value="Update Details" name="save" class="btn btn-info"></center>
	
<?php
	}
?>
	</form>
<?php
include("conn.php");
if(array_key_exists("save",$_POST))
{
	foreach($_POST as $inp)
	{
		if($inp == '')
		{
			header("location:admin_updateStud.php");
		}
		else if($inp = NULL)
		{
			header("location:admin_updateStud.php");
		}
	}
	$uname=$_POST['uname'];
	$first = $_POST['first'];
	$last = $_POST['last'];
	$father = $_POST['father'];
	$mother = $_POST['mother'];
	$dob = $_POST['d'];
	$blood=$_POST['bg'];
	$class = $_POST['class'];
	$tutor_id=$_POST['tutor_id'];	
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$emergency_mob = $_POST['emergency_mob'];
	$fath_email = $_POST['fath_email'];		
	$moth_email = $_POST['moth_email'];
	$fath_mobile = $_POST['fath_mobile'];
	$present_addr = $_POST['present_addr'];
	$perma_addr = $_POST['permanent_addr'];	
	$save=$_POST["save"];
	$query="update studetails set uname='$uname', first='$first',last='$last',father='$father',mother='$mother',dob='$dob',blood='$blood',email='$email',fath_email='$fath_email',moth_email='$moth_email',mobile='$mobile',fath_mobile='$fath_mobile',emergency_mob='$emergency_mob',present_addr='$present_addr',permanent_addr='$perma_addr',class='$class',tutor_id='$tutor_id' where uname='$uname';";
	$result=mysql_query($query);
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
