<style>
#today_attd:hover
{
	background-color:violet;
	color:white;
	border:2;
	border-style:solid;
	border-color:red;
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
	$td = date("M/Y");
	$y = date("d");
	echo "<br><fieldset style={background-color:#f8f8f8;//margin-left:250;//margin-right:250;}><legend><b>Welcome Mr./Mrs: $uname Your Attendance Report for this month(i.e: $td )</b></legend>";
	echo "<table align=center>";
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
	echo "<center><div><img src=images/h.png> : Holiday <img src=images/yes.png> : Present  <img src=images/no.png> : Absent</div></center>";	
	?>	
<br><br>
<script>
function myFunction()
{
	window.print();
}
</script>
<center><a href="" onclick="myFunction()">Print Report</a></center>
