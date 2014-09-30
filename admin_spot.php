<style>
#tab
{
	//margin-left:100;
	//margin-right:100;
}
fieldset
{
	margin-left:100;
	margin-right:100;
	border:1;
	border-style:solid;
}
legend
{
	background-color:black;color:white;
	//width:100;
	text-align:center;
}
tr:hover
{
	background-color:orange;
}
</style>
<?php
	include("conn.php");
	$q1="select * from notice order by cid desc";
	$q2=mysql_query($q1)or die(mysql_error());
	$sl =0;
	//echo "<fieldset align=center><legend><b>All Archives</b></legend>";
	$result = mysql_query("SELECT * FROM notice order by cid desc");
	$data = array();
	while($row = mysql_fetch_assoc($result)){
		$year = date("Y",strtotime($row['date']));
		$month = date("F",strtotime($row['date']));
		$data[$year][$month][] = $row;
	}
	echo "<fieldset><legend><b>All Notices Archives</b></legend>";
	if(!(mysql_num_rows($result)>0))
	{
		echo "<center><font color=red><br><b>There are no Circulars Posted in here...</b><br><br></font></center>";
	}
	foreach ($data as $year => $month_array){
		if($year==date("Y"))
		{
			foreach ($month_array as $month => $dar){
				echo "<div style={background-color:gray;border:2;border-style:double;color:orange;text-style:bolder;text-align:center;}><b>{$month}-{$year}</b></div><table id=\"tab\">";
				$pc=0;
				foreach($dar as $da)
				{
					$pc++;
					if(date("Y-m-d")==$da['date'])
					{
						$img = "<img src=images/hot.gif style={width:50;height:20;}>";
					}
					else $img = "";
					echo '<tr><td width=100 align=center>'.$pc.'</td><td width=500><a href="admin_viewCircular.php?circular='.$da["cid"].'">'.$da["title"].'</a>'.$img.'</td><td width=200>'.$da['date'].'</td><td>'.$da['time'].'</td></tr>';		
				}
				echo "</table><table>";
				echo "</table></li>";
			}
		}
		//echo "</fieldset><br>";
	}
	//echo "</fieldset>";
?>
