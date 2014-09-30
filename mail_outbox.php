<?php
session_start();
include("conn.php");
$uname=$_SESSION['user'];
$q1="select * from outbox where uname=\"$uname\" order by time desc;";
$q2=mysql_query("$q1");
if(!$q2)echo mysql_error();
?>
<style>
#table
{
width:1120;
margin:0 0 0 0;
}
#to
{
color:green;
width:150;
background-color:white;
}
#msg
{
background-color:white;
color:green;
border:2;
border-style:double;
}
#time
{
background-color:white;
width:100;
color:green;
}

</style>
<table bgcolor="orange" align="center" id="table"><th>Sent to</th><th>Title</th><th>Time</th></tr>
<?php
while($rr=mysql_fetch_array($q2))
{
?>
<tr>
<td id="to"><b><?php echo $rr['to']?></b></td>
<td id="msg"><b><?php echo $rr['subject']; ?> : </b><?php echo $rr['message'];?></td>
<td id="time"><?php echo $rr['time'];?></td>
</tr>
<?php
}
?>

