<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?php
session_start();
if(array_key_exists("submit",$_POST))
{
	$uname=$_POST['uname'];
	$pass=$_POST['pass'];
	$type=$_POST['type'];
	include("conn.php");
	$submit=$_POST['submit'];
	setcookie("uname",$uname);
	require_once('member_check.php');
}
else
{
	if(!isset($_SESSION['user']))
	{
		//include("head.php");
	?>
<?php
{
?><br>
<fieldset>
<form action="" method="post" class="form-group">
<br>
<table align=center>
<th></th><th></th>
<tr><td><img src="images/rgu.png"></td><td><font face="sans-serif" size="8pt">RGUKT-B</font><hr></td></tr>
<tr><td>Username: </td><td><input type="text" name="uname" id="input"></td></tr>
<tr><td>Password: </td><td><input type="password" name="pass" id="input"></td></tr>
<tr><td>Who are You?: </td><td><select name="type"><option value="Select">Select Type of User</option><option value="student">Student</option><option value="faculty">Faculty</option><option value="admin">Administration</option></select></td></tr>
<tr><td></td><td><input type="reset" value="Reset" class="btn btn-warning">&nbsp;&nbsp;<input type="submit" value="submit" name="submit" class="btn btn-success"></td></tr>
<tr><td>   </td></tr><tr><td>   </td></tr><tr><td>   </td></tr><tr><td></td></tr>
</form>
</table>
</fieldset>
</body>
</html>
<?php
}
}
else
{
	//require_once('head.php');
	header("location:home.php");
}

}
?>
<br><br><br><br>
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
<!--<div id="bottom2" valign=middle>STUDENTS[2008]@Rajiv Gandhi University of Knowledge Technologies-BASAR<br/>Dept.of Computer Science and Engineering-2k8, (Best View in Firefox 3.4 or Above)</div>-->
