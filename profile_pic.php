<?php
session_start();
//require_once('test.php');
?>
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
if(!array_key_exists("disp",$_POST))
{
?>
<center><b><font color="green"> Upload Your Profile Photo here</b></center><br>
<center><b><font color="maroon">Allows only ".jpg" type.<br><br>Size should be lessthan 800Kbs.(Ex:B082035.jpg)</b></center>
<form action="" method="post" name="file" enctype="multipart/form-data" id="form" align="center">
<input type="file" name="file">
<input type="submit" value="Upload-Here" name="upload">
<input type="hidden"name="disp"value="true">
</form></center>
</html>
<?php
}
if(array_key_exists("upload",$_POST))
{
if(($_FILES["file"]["type"] == "image/jpeg")&&($_FILES["file"]["size"] < 500000)) 
  {
	  if ($_FILES["file"]["error"] > 0)
		    {
		  	    echo "Error: " . $_FILES["file"]["error"] . "<br />";
		    }
	  else
		    {
					$uname=$_SESSION['uname'];				
					$_FILES["file"]["name"]="$uname.jpg";
		    
			if(file_exists("profile-face/".$_FILES["file"]["name"]))
				{
					echo "<br><br><br>File already exist</br>";
				}
			else
				{
					//$uname=$_SESSION['user'];				
					//$_FILES["file"]["name"]="$uname.jpg";
					move_uploaded_file($_FILES["file"]["tmp_name"],"profile-face/".$_FILES["file"]["name"]);
					echo "<center><br><br><b><u>Flie ".$_FILES["file"]["name"]."<b> is stored in profile-face <br/>";
					echo "</u><center><h><b><br><blink>Your Profile Photo is uploaded.</blink><br/><br/><a href=\"login.php\">Click here to access your account</a></h1></b></center></br>";
//rename("profile-face/".$_FILES["file"]["name"],"$uname.jpg");			
//chmod($_FILES["file"]["name"],`w+` );
//if(!rename("profile-face/".$_FILES["file"]["name"],"$uname".".jpg"))
//echo mysql_error();
				}
		    }
  }
else
  {
  		echo "<b>Invalid file:</b>";
  }
echo "<br/><b>File Name :  ".$_FILES["file"]["name"];
echo "<br/><b>File Type:  ".$_FILES["file"]["type"];
echo "<br/><b>File size :  ".($_FILES["file"]["size"])/1024 ."Kbs</center>";
}
?>
