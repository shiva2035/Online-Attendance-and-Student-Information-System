<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?php
	require_once("checkAccess.php");
?>
<script type=text/javascript>
function load()
{
	alert("hi");
}
</script>
<?php
include("conn.php");
$mon =date("m");
$yr = date("Y");
$tab_n= $mon."_".$yr;
$table = "attendance_$tab_n";

//session_start();
$uname = $_SESSION['user'];
?>
<br><fieldset style="{margin-left:100;margin-right:100;}">
<legend><b>Modify Your Class Attendance</b></legend>
<?php
	echo "<form action=\"\" method=post>";
?>
<table align=center>
<tr><td>Faculty ID</td><td><input type="text" name="fac_id" readonly=true value="<?php echo $uname;?>"></td>
<?php
$qq1=mysql_query("select * from fac_users where uname='$uname'");
$rw=mysql_fetch_array($qq1);
$class = $rw['class'];
echo "<td>Class </td><td><input type=text readonly=true name=class value=\"$class\"></td>";
?>
</tr>
<tr><td>Your Subject ID</td>
<?php
$q1=mysql_query("select * from courses where fac_id='$uname'");
$row=mysql_fetch_array($q1);
$subj=$row['course_id'];
echo "<td><input type=text readonly=true name=subject value=\"$subj\"></td><td> Subject Name</td><td><input type=text readonly=true name=subject value=\"".$row['course_name']."\"></td>";
?>
</tr></table><hr>
<?php
	$s1= "select * from $table where sub='$subj';";
	$s2= mysql_query($s1);
	$dt = date("d");
	//($dt<10)?($dt='0'.$dt):($dt=$dt.'');
	echo "<table align=center border=1><tr style={background-color:green;color:white;}><th>Roll No</th><th width=200>Student Name</th><th width=60>Status</th><th width=150>Modify Status</th></tr>";
	while($row=mysql_fetch_array($s2))
	{
		$t1 ="select * from `studetails` where uname='".$row['rollno']."'";
		$t2 = mysql_query($t1);
		$row1= mysql_fetch_array($t2);
		echo "<tr><td><a href=\"\">".$row['rollno']."</a></td><td>".$row1['first']." ".$row1['last']."</td><td align=center>". $res = getStatus($row['rollno'],$subj)."</td><td><table align=center><td align=center width=50 style={border:1px;border-style:solid;border-color:green;}><a href=\"fac_modAttd1.php?rollno=".$row['rollno']."&sub=".$subj."&dt=$dt&stat=P\"><img src=\"images/yes.png\"></a></td><td align=center width=50 style={border:1px;border-style:solid;border-color:red;}><a href=\"fac_modAttd1.php?rollno=".$row['rollno']."&sub=".$subj."&dt=$dt&stat=A\"><image src=\"images/no.png\"></a></td></table></td></tr>";
	}
	echo "</table>";
	echo "</form>";
function getStatus($uid,$subj)
{
	$mon =date("m");
	$yr = date("Y");
	$tab_n= $mon."_".$yr;
	$table = "attendance_$tab_n";
	$x1= "select * from `$table` where rollno='$uid';";
	$x2 = mysql_query($x1);
	$td = date("d/M/Y");
	$x = date("d");
	while($row=mysql_fetch_array($x2))
	{
		$y1=mysql_query("select * from courses where course_id='$subj'");
		$y2=mysql_fetch_array($y1);
		if($row[$x]=='P')
		{
			return "<img src=images/yes.png>";
		}
		else if($row[$x]=='A')
		{
			return "<img src=images/no.png>";
		}
		else if($row[$x]=='H')
		{
			return "<img src=images/h.png>";
		}		
		/*else if($row[$x]=='')
		{
			return "<img src=images/ng.png>";
		}*/		
	}
}
?>
<center><div><img src=images/h.png> : Holiday <img src=images/yes.png> : Present  <img src=images/no.png> : Absent   <img src=images/ng.png> : Not Given the Attendance</div></center>
