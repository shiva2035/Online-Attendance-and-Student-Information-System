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
session_start();
if(!array_key_exists("disp",$_POST))
{
?>
<br><fieldset><legend><b><font color="green">Upload Your Resume Here </b></legend>
<p> Please Download <a href="run.sh">this</a> file and convert your resume to png format before uploading</p>
<form action="" method="post" name="file" enctype="multipart/form-data" id="form">
<table align=center>
<tr><td>Browse File</td><td><input type="file" name="file"></td></tr>
<tr><td>File Type</td><td><select name="dest"><option value="">Type of File</option><option value="profile-face">Profile Picture</option><option value="resume">Resume</option></select></td></tr>
<tr><td><input type="hidden"name="disp"value="true"></td><td><input type="submit" value="Upload-Here" name="upload"></td></tr></table>
</form></center>
</fieldset>
<?php
}
if(array_key_exists("upload",$_POST))
{
	$dest=$_POST['dest'];
	
	if($dest=="resume")
	{
		if ($_FILES["file"]["error"] > 0)
		{
		    echo "Error: " . $_FILES["file"]["error"] . "<br />";
		}
		else
		{
			$uname=$_SESSION['user'];				
			$_FILES["file"]["name"]="$uname.png";
			$res = move_uploaded_file($_FILES["file"]["tmp_name"],"$dest/".$_FILES["file"]["name"]) or die($_FILES["file"]["error"]);
			if($res)
			{
				echo "<center><font color=green>Successfully Uploaded the Profile Pic</font></center>";
			}
		}
	}
	else if($dest= "profile-face")
	{
		if(($_FILES["file"]["type"] == "image/jpeg")&&($_FILES["file"]["size"] < 500000)) 
		{
			if ($_FILES["file"]["error"] > 0)
			{
			    echo "Error: " . $_FILES["file"]["error"] . "<br />";
			}
			else
			{
				$uname=$_SESSION['user'];				
				$_FILES["file"]["name"]="$uname.jpg";
				$res = move_uploaded_file($_FILES["file"]["tmp_name"],"$dest/".$_FILES["file"]["name"]) or die($_FILES["file"]["error"]);
				if($res)
				{
					echo "<center><font color=green>Successfully Uploaded the Profile Pic</font></center>";
				}
			}
		}
		else
		{
			echo "<b>Invalid file:</b>";
		}
	}
}
?>
