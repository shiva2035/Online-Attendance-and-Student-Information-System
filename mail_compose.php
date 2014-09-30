<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<title>.::Composing Mail::.</title>
<?php
session_start();
$uname=$_SESSION['user'];
include("conn.php");
function send($to,$sub,$msg)
{
	$con=mysql_connect("localhost","root","password");
	if(!$con)echo mysql_error();
}
if(array_key_exists('send',$_POST))
{
	$send=$_POST['send'];
	$to=$_POST['to'];
	$sub=$_POST['subject'];
	$msg=$_POST['message'];
	$tm=date('H:i:s');
	send('$to','$sub','$msg');
	$q1="insert into inbox values(\"$to\",\"$sub\",\"$msg\",\"$uname\",\"$tm\")";
	$q2=mysql_query("$q1");
	if(!$q2)echo mysql_error();
	$q3="insert into outbox values(\"$uname\",\"$sub\",\"$msg\",\"$to\",\"$tm\");";
	$q4=mysql_query("$q3");
	if(!$q3)echo mysql_error();
	if($q4&&$q2)echo "<b>Your message is delivered Successfully</b>";
	else echo "<b>Unable to process your message</b>";
}
else{
?>
<fieldset><legend><b>Compose a New Message</b></legend>
<form action="" method="post">
<table align=center>
<tr><td>To:</td><td><input type="text" name="to" width="400"></td></tr>
<tr><td>Subject:</td><td><input type="text" name="subject" width="400"></td></tr>
<tr><td>Message:</td><td><textarea name="message" class="input-xxlarge" rows=8></textarea></td></tr>
<tr><td></td><td><input type="submit"value="Send Mail" name="send" class="btn btn-info"></td></tr>
<table></form>
</fieldset>
<?php
}
?>
</body>
