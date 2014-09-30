<!doctype html>
<link href="bootstrap.min.css" rel="stylesheet" media="screen">
<?php
	require_once("checkAccess.php");
?>
<script type=text/javascript>
function loadFile()
{
	document.getElementById('file').innerHTML="<input type=\"file\" name=\"file\">";
}
</script>

<?php
//session_start();
if(!($_SESSION['user']=="admin"))
{
	include("spot.php");
}
else
{
?>

<center>
<fieldset style="{margin-left:200;margin-right:200;background-color:#f8f8f8;}"><legend><b>Compose Circular</b></legend>
<form action="" method="post" name="file" enctype="multipart/form-data" id="form">
<table>
<tr><td>Title of Circular:</td><td><input type="text" name="title"></td></tr>
<tr><td>Message:</td><td><textarea class="input-xxlarge" rows=6></textarea></td></tr>
<tr><td>Link to be Displayed:</td><td><input type="text" name="hlink"></td></tr>
<tr><td>Add Attachment:</td><td id=file><input type="button" onclick="loadFile()" value="Attach File" class="btn"><p ></p></td></tr>
<tr><td>Type of Circular:</td><td>
<select name="type">
<option value="Null">Select Type of Circular</option>
<option value="Administration">Administration Notice</option>
<option value="Examination">Examination Notice</option>
<option value="Academic Section">Academic Related Notice</option>
<option value="Placement Office">Placement & Career Development Cell</option>
<option value="Other Notice">Other Notice</option>
</select>
</td></tr>
<tr><td></td><td><input type="submit" name="submit" class="btn btn-info"></td></tr>
</table>
</form>
</fieldset>
<?php
if(array_key_exists('submit',$_POST))
{
	include("conn.php");
	$date= date("y-m-d"); 
	echo $date;

	$dates=date('h:i A', strtotime($tmt));

	$title=$_POST['title'];
	$msg= $_POST['msg'];
	$hlink = $_POST['hlink'];
	$tmp_id = "BSR".$y.$m.$d;
	$x=mysql_num_rows(mysql_query("select cid from notice where cid like '%$tmp_id%'"));
	$tid = $tmp_id.$x;
//Uploading the attachment goes here
	if(!isset($_FILES["file"]))
	{
		$link="-";
	}
	else
	{
		$link = $_FILES["file"]["name"];
		$ext = end(explode(".", $link));
		$_FILES["file"]["name"]=$tid.".".$ext;
		$link = $tid.".".$ext;
		move_uploaded_file($_FILES["file"]["tmp_name"],"notices/".$_FILES["file"]["name"]) or die("File Error: ".$_FILES["file"]["error"]);
		echo "<center><br><br><b><u>Flie ".$_FILES["file"]["name"]."<b> is stored in Notices <br/>";		
	}	
//////////////////////////////////
	$type=$_POST['type'];
	$q1="insert into notice values('$tid','$title','$msg','$hlink','$link','$date','$dates','$type')";
	$rr=mysql_query($q1)or die(mysql_error());
	if($rr) header("location:admin_viewCircular.php?circular=$tid");
}
}
//include("template.php");
?>
