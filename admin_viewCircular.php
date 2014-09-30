<style>
#menus
{
	list-style:none;
	color:green;
}
#menus a
{
	font-weight:bold;
	align:center;
}
#menus a:hover
{
	border-style:double;
	list-style:none;
	color:green;
	background-color:white;
}
</style>

<?php
	session_start();
	$cid = $_GET['circular'];
	include("conn.php");
	//include("header.php");
	$q1="select * from notice where cid=\"$cid\"";
	$q2=mysql_query($q1)or die(mysql_error());
	echo "<br>";
	echo "<center><img src=\"images/nb.png\" style=\"{background-image:url(images/nb.png);background-position:center center;background-repeat:no-repeat;}\"></center><br>";		
	while($row=mysql_fetch_array($q2))
	{
		?>
		<table width=800 align=center style="{border:1;border-style:dotted;}">
		<tr style="{background-color:green;color:white;}"><td align=center><b><? echo $row['title'];?></b></td></tr>
		<tr><td><b><? echo $row['message'];?></b></td></tr>
		<tr><td><font color="orange"><b>Associated Link: </b><a href="<? echo $row['hlink'];?>"><? echo $row['hlink'];?></a></td></tr>
		<tr><td><font color=orange><b>Download Attachment: </b></font><a href="notices/<? echo $row['link'];?>"><? echo $row['link'];?></a></td></tr>
		<tr><td><font color=orange><b>Circular Posted On: </b></font><? echo $row['date'];?>, <? echo $row['time'];?></a></td></tr>
		<tr><td align=right>Sd/-<br><? echo $row['type']?> Incharge,<br>RGUKT-Basar.</td></tr>
		</table>
		<br>
		<?php
		if(isset($_SESSION['utype']))
		{
			$utype=$_SESSION['utype'];
			if($utype=="admin")
				echo "<center><a href=\"admin_edit_circ.php\">Back to All Circulars</a></center>";
			else
				echo "<center><a href=\"admin_spot.php\">Back to All Circulars</a></center>";
		}
		else
			echo "<center><a href=\"admin_spot.php\">Back to All Circulars</a></center>";		
	}
?>
