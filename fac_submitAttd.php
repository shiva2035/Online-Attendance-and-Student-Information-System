<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?php
	require_once("checkAccess.php");
	include("conn.php");
	//session_start();
	$uname = $_SESSION['user'];
	if(!(array_key_exists("submit",$_POST)))
	{
	?>
	<br><fieldset style="{margin-left:150;margin-right:150;}">
	<legend><b>Submit Your Class Attendance</b></legend>
	<form action="" method=post>
	<table align=center>
	<tr><td>Faculty ID</td><td><input type="text" name="fac_id" readonly=true value="<?php echo $uname;?>"></td></tr>
	<tr><td>Your Class</td><td>
	<?php
	$qq1=mysql_query("select * from fac_users where uname='$uname'");
	$rw=mysql_fetch_array($qq1);
	echo "<input type=text readonly=true name=class value=\"".$rw['class']."\">";
	?>
	</td></tr>
	<tr><td>Your Subject</td><td>
	<?php
	$q1=mysql_query("select * from courses where fac_id='$uname'");
	$row=mysql_fetch_array($q1);
	echo "<input type=text readonly=true name=subject value=\"".$row['course_id']."\"><input type=text readonly=true name=subject value=\"".$row['course_name']."\">";
	?>
	</td></tr>
	<tr><td>Absentees Roll No's:</td><td><input type="text" name="absent_ids">(<font size=1>Enter Roll No's Seperated by comma[,]</font>)</td></tr>
	<tr><td></td><td><input type="reset" value="Reset" class="btn btn-warning">  <input type="submit" name="submit" value="Submit Attendance" class="btn btn-success"></td></tr>
	</form>

	<?php
	}
	else
	{
		$class = $_POST['class'];
		$subj = $_POST['subject'];
		$absentees = array();
		$absentees=explode(",",$_POST['absent_ids']);
		$dt = date("d");
		($dt<10)?($dt='0'.$dt):($dt=$dt.'');
		foreach($absentees as $ab)
		{
		$mon =date("m");
		$yr = date("Y");
		$tab_n= $mon."_".$yr;
		$table = "attendance_$tab_n";
			$s1= "update `oams`.`$table` set `$dt`='A' where `rollno`= '$ab' AND `sub` = '$subj';";
			$s2= mysql_query($s1);
			if(!$s2)echo mysql_error();
			echo "<center><font color=green><br><br>Successfully Submitted the attendance</font></center>";
		}
	}
?>
