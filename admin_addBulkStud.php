<!DOCTYPE html>
<?php 
	require_once("checkAccess.php");
	include 'conn.php';
	include 'Excel/reader.php';
	function uploadFile($fieldName, $fileType, $folderName, $name = "")
	{
		$flg = 0;
		$MaxID = "";
		$ext = "";
		$uploadfile = "";
		if (isset($fieldName) AND $fieldName['name'] != '')
		{
			$flg = 1;
			$allowed_filetypes = $fileType;
			$max_filesize = 1048576;
			$filename = $fieldName['name'];
			if ($name == "")
				$MaxID = time() . time() . rand(1, 100);
			else
				$MaxID = $name;
			$ext = substr($filename, strpos($filename, '.'), strlen($filename) - 1);
			if($ext==".xlsx")
				$ext=".xls";
			if (!in_array($ext, $allowed_filetypes))
				echo "<h1>The file you attempted to upload is not allowed...</h1>";
			else if (filesize($fieldName['tmp_name']) > $max_filesize)
				echo "<h1>The file you attempted to upload is too large...</h1>";
			else 
			{
				$uploadfile = $folderName . "/" . $MaxID . $ext;
				if (move_uploaded_file($fieldName['tmp_name'], $uploadfile) == FALSE)
				{
					echo "<h1>Error in Uploading File...</h1>";
					$MaxID = "";
				}
				else
					$MaxID = $MaxID . $ext;
			}
		}
		return $MaxID;
	}
	if(isset($_POST['submit']))
	{
		/*if($_FILES['csvFile']['name']!="")
		{
			$fileName=uploadFile($_FILES['excelFile'],array(".csv"),"excel_file");
			//$fileName = "data.xlsx";
			$row=0;
			if(($handle = fopen("excel/".$fileName , "r")) !== FALSE) 
			{
				while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) 
				{
					$num = count($data);
					//print_r($data);
					$query="INSERT INTO StudentData(FirstName,LastName,MobileNo,City)VALUES('".$data[0]."','".$data[1]."','".$data[2]."','".$data[3]."')";
					mysql_query($query);
				}
				fclose($handle);
			}
		}*/
		if($_FILES['excelFile']['name']!="")
		{
			$fileName=uploadFile($_FILES['excelFile'],array(".xls",".xlsx"),"excel_file");
			$data = new Spreadsheet_Excel_Reader();
			$data->read('excel_file/'.$fileName);
			$count =0;
echo "<table class=\"table table-bordered\" align=center><tr><th>Uname</th><th>Password</th><th>First Name</th><th>Last Name</th><th>Father Name</th><th>Mother Name</th><th>DOB<br>(YYYY-MM-DD)</th><th>Blood Group</th><th>e-Mail</th><th>Father e-Mail</th><th>Mother e-Mail</th><th>Mobile No</th><th>Father Mobile</th><th>Emergency Contact</th><th>Present Addr</th><th>Permanent Addr</th><th>Class</th><th>Tutor ID</th></tr>";
			for($i=1;$i<=$data->sheets[0]['numRows'];$i++)
			{
				$uname =$data->sheets[0]['cells'][$i][1];
				$pass1 =$data->sheets[0]['cells'][$i][2];
				$first =$data->sheets[0]['cells'][$i][3];
				$last =$data->sheets[0]['cells'][$i][4];
				$father =$data->sheets[0]['cells'][$i][5];
				$mother =$data->sheets[0]['cells'][$i][6];
				$dob =$data->sheets[0]['cells'][$i][7];
				$blood =$data->sheets[0]['cells'][$i][8];
				$email =$data->sheets[0]['cells'][$i][9];
				$fath_email =$data->sheets[0]['cells'][$i][10];
				$moth_email =$data->sheets[0]['cells'][$i][11];
				$mobile =$data->sheets[0]['cells'][$i][12];
				$fath_mobile =$data->sheets[0]['cells'][$i][13];
				$emergency_mob =$data->sheets[0]['cells'][$i][14];
				$present_addr =$data->sheets[0]['cells'][$i][15];
				$permanent_addr =$data->sheets[0]['cells'][$i][16];
				$class =$data->sheets[0]['cells'][$i][17];
				$tutor_id =$data->sheets[0]['cells'][$i][18];
				$query="INSERT INTO `oams`.`studetails`(uname,pass1,first,last,father,mother,dob,blood,email,fath_email,moth_email,mobile,fath_mobile,emergency_mob,present_addr,permanent_addr,class,tutor_id)VALUES('".$uname."','".$pass1."','".$first."','".$last."','".$father."','".$mother."','".$dob."','".$blood."','".$email."','".$fath_email."','".$moth_email."','".$mobile."','".$fath_mobile."','".$emergency_mob."','".$present_addr."','".$permanent_addr."','".$class."','".$tutor_id."')";
				$res = mysql_query($query);
				$count++;
				echo "<tr><td>$uname</td><td>$pass1</td><td>$first</td><td>$last</td><td>$father<br></td><td>$mother</td><td>$dob</td><td>$blood</td><td>$email</td><td>$fath_email</td><td>$moth_email</td><td>$mobile</td><td>$fath_mobile</td><td>$emergency_mob</td><td>$present_addr</td><td>$permanent_addr</td><td>$class</td><td>$tutor_id</td></tr>";				
			}
			echo "</table>";			
			if($count)
			{
				echo "<div class=\"control-group\"><center><label><font size=6 color=green>Successfully Inserted. Number of Inserted Records:$count</font></label></center></div>";
				unlink("excel_file/".$fileName);
			}
		}
	}
	else if(isset($_POST['delete']))
	{
		mysql_query("DELETE FROM StudentData");
	}	
	else
	{
	?>
	<html lang="en">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Import Excel File To MySql Database Using php">
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<link rel="stylesheet" href="css/bootstrap-responsive.min.css">
		<link rel="stylesheet" href="css/bootstrap-custom.css">

	</head>
	<body>   
	<!--Navigation--> 
	<div class="navbar navbar-inverse navbar-fixed-top">
		<div class="navbar-inner">
			<div class="container"> 
				<a class="brand" href="#"><marquee>Bulk Records Upload Excel to MySQL<font size=4 color=red>(Please Do not REFRESH the page while Excel file is being uploaded)</font></marquee></a>
			</div>
		</div>
	</div>	
	<div id="wrap">
	<div class="container">
		<div class="row">
			<div class="span3 hidden-phone"></div>
<br><br>
<table class="table table-bordered" align=center><tr><td><font color=red><center><b>***** The Uploaded Excel (.xls) file must contain only the above Columns in it. No other/extra Columns are not allowed</font></td></tr></table>						
<table class="table table-bordered" align=center><tr><th>Uname</th><th>Password</th><th>First Name</th><th>Last Name</th><th>Father Name</th><th>Mother Name</th><th>DOB<br>(YYYY-MM-DD)</th><th>Blood Group</th><th>e-Mail</th><th>Father e-Mail</th><th>Mother e-Mail</th><th>Mobile No</th><th>Father Mobile</th><th>Emergency Contact</th><th>Present Addr</th><th>Permanent Addr</th><th>Class</th><th>Tutor ID</th></tr></table>
			<div class="span6" id="form-login">
				<form class="form-horizontal well" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post" name="upload_excel" enctype="multipart/form-data">
					<fieldset>
						<legend>Upload/Import Excel File <font size=2 color=red>(.xls only)</font></legend>
						<!--<div class="control-group">
							<div class="control-label">
								<label>Select CSV File</label>
							</div>
							<div class="controls">
								<input type="file" name="csvFile" class="input-large"><br><font size=2 color=red>(.Not Working Right Now)</font>
							</div>
						</div>
						or-->
						<div class="control-group">
							<div class="control-label">
								<label>Excel(.xls) File</label>
							</div>
							<div class="controls">
								<input type="file" name="excelFile" class="input-large">
							</div>
						</div>
						<div class="control-group">
							<div class="controls">
							<button type="submit" id="submit" name="submit" class="btn btn-primary button-loading" data-loading-text="Loading...">Upload</button>
							</div>
						</div>
					</fieldset>
				</form>
			</div>
			<div class="span3 hidden-phone"></div>
		</div>
	</div>
	</body>
</html>
<?php
}
?>
