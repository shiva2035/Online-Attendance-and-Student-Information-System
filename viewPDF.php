<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?php
	session_start();
	$uname=$_SESSION['user'];
	$filename = $_GET['id'];
	$img= "resume/$uname.png"; 
	if(!file_exists($img))
	{
		echo "<center><br><br><br><font color=red>Your CV Is not Found in the Database</font></center>";
	}
	else
	echo "<div id=div><img src=$img></div>";
?>
	<br>
<style>
#bottom2
{
	margin-bottom:-150;
	text-align:center;
	vertical-align:middle;
	text-align:center;
	color:white;
	background-color:blue;
	//width:100%;
	height:50;
	margin-left:-100;
	margin-right:-100;
	font-size:12pt;
}
</style>
