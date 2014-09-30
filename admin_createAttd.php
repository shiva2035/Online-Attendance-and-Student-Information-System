<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?php
	require_once("checkAccess.php");
?>
<br><fieldset style="{margin-left:350;margin-right:150;}">
<legend><b>Create Attendance Sheet</b></legend>
<?php
if(array_key_exists("submit",$_POST))
{
	include("conn.php");
	$mon =date("m");
	$yr = date("Y");
	$tab_n= $mon."_".$yr;
	$table = "attendance_$tab_n";
	$x1="create table `oams`.`$table` (rollno varchar(8), sub varchar(8), `01` varchar(1), `02` varchar(1),`03` varchar(1),`04` varchar(1),`05` varchar(1),`06` varchar(1),`07` varchar(1),`08` varchar(1),`09` varchar(1),`10` varchar(1),`11` varchar(1),`12` varchar(1),`13` varchar(1),`14` varchar(1),`15` varchar(1),`16` varchar(1),`17` varchar(1),`18` varchar(1),`19` varchar(1),`20` varchar(1),`21` varchar(1),`22` varchar(1),`23` varchar(1),`24` varchar(1),`25` varchar(1),`26` varchar(1),`27` varchar(1),`28` varchar(1),`29` varchar(1),`30` varchar(1),`31` varchar(1))";
	$x2 = mysql_query($x1);
	if(!$x2)
		echo "<b><font color=red><center><br>".mysql_error()."<br><br>";
	else
	{
		$x5 = "select * from course_reg;";
		$x6=mysql_query($x5);
		while($row = mysql_fetch_array($x6))
		{
			$subjects = array();
			for($i=1;$i<=10;$i++)
			{
			
				array_push($subjects, $row["sub$i"]);
			}
			$rollno= strtoupper($row['rollno']);
			foreach($subjects as $sub)
			{
				$y1 = "insert into `oams`.`$table` (`rollno`, `sub`) values('$rollno','$sub');";
				$y2 = mysql_query($y1);
				if(!$y2)	echo "<b><font color=red><center><br>".mysql_error()."<br><br>";
			}
		}
	}
}
else
{
	echo "<form action=\"\" method=\"post\" align=center>";
	echo "<input type=\"submit\" name=submit value=\"Create Register\" class=\"btn btn-info\">";
	echo "</form>";
}	
?>
</fieldset>
