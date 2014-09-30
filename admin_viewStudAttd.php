<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?php
include("conn.php");
if(!array_key_exists("search",$_POST))
{
?>
<br><br>
	<form action="" method=post><center>Enter Student ID : <input type="text" name="stu_id" ><br><input type="submit" name="search" value="Search" class="btn btn-info"></center></form>
<?php
}
else
{
	$uname = $_POST['stu_id'];
	$mon =date("m");
	$yr = date("Y");
	$tab_n= $mon."_".$yr;
	$table = "attendance_$tab_n";
	$x1= "select * from $table where rollno='$uname'; ";
	$x2 = mysql_query($x1);
	$td = date("d/M/Y");
	echo "<br><center><font size=4 color=blue><b>Attendance Status of $uname as on today(i.e: $td )</b></font></center>";
	echo "<table align=center class=\"table table-condensed\" width=800>";
	echo "<tr><th>Course</th><th>Course Name</th><th>Faculty ID</th><th>$uname Status</th><th width=200>Course Timings</th></tr>";
	$x = date("d");
	//($x<10)?($x='0'.$x):($x=$x.'');
	while($row=mysql_fetch_array($x2))
	{
		$y1=mysql_query("select * from courses where course_id='".$row['sub']."'");
		$y2=mysql_fetch_array($y1);
		echo "<tr id=today_attd><td>".$row['sub']."</td><td>".$y2['course_name']."</td><td align=center>".$y2['fac_id']."</td><td align=center>";
		if($row[$x]=='P')
		{
			echo "<img src=images/yes.png>";
		}
		else if($row[$x]=='A')
		{
			echo "<img src=images/no.png>";
		}
		else if($row[$x]=='')
		{
			echo "<img src=images/ng.png>";
		}
		else if($row[$x]=='H')
		{
			echo "<img src=images/h.png>";
		}		
		else echo "-";
		echo "</td><td align=center>".$y2['course_timings']."</td></tr>";
	}echo "</table>";
	echo "<center><div><img src=images/h.png> : Holiday <img src=images/yes.png> : Present  <img src=images/no.png> : Absent   <img src=images/ng.png> : Not Given</div></center>";
	
	echo "<hr>";
	$uname= $_POST['stu_id'];
	$mon =date("m");
	$yr = date("Y");
	$tab_n= $mon."_".$yr;
	$table = "attendance_$tab_n";
	$x1= "select * from $table where rollno='$uname'; ";
	$x2 = mysql_query($x1);
	$td = date("M/Y");
	$y = date("d");
	echo "<br><center><font size=4 color=blue><b>Monthly Attendance Report of $uname for this month(i.e: $td )</b></font></center>";
	echo "<table align=center class=\"table table-condensed\">";
	echo "<tr style={background-color:green;color:white;}><th>Subject</th>";
	for($i=01;$i<=$y;$i++)
	{
		($i<10)?($i='0'.$i):($i=$i.'');
		echo "<th>$i</th>";		
	}
	echo "<th width=200>Total Present Hours</th><th>%</th><th>Remarks</th></tr>";
	while($row=mysql_fetch_array($x2))
	{
		echo "<tr id=today_attd><td>".$row['sub']."</td>";
		$total = 0;
		$absent=0;
		$present = 0;
		for($x=01;$x<=$y;$x++){
			($x<10)?($x='0'.$x):($x=$x.'');
			if($y>=$x)
			{
				if($row[$x]=='P')
				{
					$present++;
					$total++;
					echo "<td align=center><img src=images/yes.png></td>";
				}
				elseif($row[$x]=='A')
				{
					$absent++;
					$total++;
					echo "<td align=center><img src=images/no.png></td>";
				}
				elseif($row[$x]=='')
				{
					$total++;
					echo "<td align=center><img src=images/ng.png></td>";
				}
				elseif($row[$x]=='H')
				{	
					$total++;
					echo "<td align=center><img src=images/h.png></td>";
				}								
			}
			else
				echo "<td align=center>-</td>";
		
		}
		echo "<td align=center>".($total-$absent)."</td><td align=center>". (($total-$absent)/ $total)*100 ."</td><td align=center></td></tr>";
	}
	echo "</table></fieldset>";


}
	?>
<br>
<script>
function myFunction()
{
	window.print();
}
</script>
<center><a href="" onclick="myFunction()">Print Report</a></center>
