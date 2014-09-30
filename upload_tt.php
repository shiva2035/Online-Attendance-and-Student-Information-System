<?php
	require_once("checkAccess.php");
?>
<script type=text/javascript>
function load()
{
	document.getElementById('class').innerHTML="<select name=\"\"></select>";
}
</script>
<style>
#form
{
	align:center;
	color:green;
	//background-color:brown;
	margin-top:50px;
	margin-left:250px;
	margin-right:400px;
}

</style>
<center>
<?php
//session_start();
if(!array_key_exists("disp",$_POST))
{
?>
<br><fieldset><legend><b><font color="green">Upload Your Files Here </b></legend>
<center><font color=red size =2 >* Before Uploading the Time Table rename your file as:<br><br>If it is faculty-wise rename it with facultyid (ex:fac_01.pdf)<br><br>If it is class-wise time table rename it with classname(ex. sea1.pdf)</font></center>
<form action="" method="post" name="file" enctype="multipart/form-data" id="form">
<table align=center>
<tr><td>Your File: </td><td> <input type="file" name="file"></td><td><input type="hidden"name="disp"value="true"></td><td><input type="submit" value="Upload-Here" name="upload"></td></tr></table>
</form></center>
</fieldset>
<?php
}
if(array_key_exists("upload",$_POST))
{
		if ($_FILES["file"]["error"] > 0)
		{
		    echo "Error: " . $_FILES["file"]["error"] . "<br />";
		}
		else
		{
			$res = move_uploaded_file($_FILES["file"]["tmp_name"],"timetables/".$_FILES["file"]["name"]) or die($_FILES["file"]["error"]);
			if($res)
			{
				echo "<center><br><br><b><font color=green>Successfully Uploaded the File</font></center>";
			}
		}
}
?>
