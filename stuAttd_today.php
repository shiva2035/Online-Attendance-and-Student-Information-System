<style>
#today_attd:hover
{
	background-color:pink;
	color:white;
}
</style>
<?php
	include("conn.php");
	session_start();
	$uname = $_SESSION['user'];
	$mon =date("m");
	$yr = date("Y");
	$tab_n= $mon."_".$yr;
	$table = "attendance_$tab_n";
	$x1= "select * from $table where rollno='$uname'; ";
	$x2 = mysql_query($x1);
	$td = date("d/M/Y");
	echo "<br><fieldset style={margin-left:200;margin-right:200;}><legend><b>Your Attendance Status as on today(i.e: $td )</b></legend>";
	echo "<table align=center>";
	echo "<tr style={background-color:green;color:white;}><th>Course</th><th>Course Name</th><th>Faculty ID</th><th>Your Status</th><th width=200>Course Timings</th></tr>";
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
	?>
<br>
<center><a href="" onclick="myFunction()">Print Report</a></center>
