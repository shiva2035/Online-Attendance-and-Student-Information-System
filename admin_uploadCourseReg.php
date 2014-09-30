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
			echo "<table class=\"table table-bordered\" align=center><tr><th>Roll No</th><th>Subject1 Code</th><th>Subject2 Code</th><th>Subject3 Code</th><th>Subject4 Code</th><th>Subject5 Code</th><th>Subject6 Code</th><th>Subject7 Code</th><th>Subject8 Code</th><th>Subject9 Code</th><th>Subject10 Code</th></tr>";			
			for($i=1;$i<=$data->sheets[0]['numRows'];$i++)
			{
				$rollno =$data->sheets[0]['cells'][$i][1];
				$subj1 =$data->sheets[0]['cells'][$i][2];
				$subj2 =$data->sheets[0]['cells'][$i][3];
				$subj3 =$data->sheets[0]['cells'][$i][4];
				$subj4 =$data->sheets[0]['cells'][$i][5];
				$subj5 =$data->sheets[0]['cells'][$i][6];
				$subj6 =$data->sheets[0]['cells'][$i][7];
				$subj7 =$data->sheets[0]['cells'][$i][8];
				$subj8 =$data->sheets[0]['cells'][$i][9];
				$subj9 =$data->sheets[0]['cells'][$i][10];
				$subj10 =$data->sheets[0]['cells'][$i][11];
				$query="INSERT INTO `oams`.`course_reg` VALUES('".$rollno."','".$subj1."','".$subj2."','".$subj3."','".$subj4."','".$subj5."','".$subj6."','".$subj7."','".$subj8."','".$subj9."','".$subj10."')";
				$res = mysql_query($query);
				$count++;
				echo "<tr><td>$rollno</td><td>$subj1</td><td>$subj2</td><td>$subj3</td><td>$subj4<br></td><td>$subj5</td><td>$subj6</td><td>$subj7</td><td>$subj8</td><td>$subj9</td><td>$subj10</td></tr>";				
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
<table class="table table-bordered" align=center><tr><th>Roll No</th><th>Subject1 Code</th><th>Subject2 Code</th><th>Subject3 Code</th><th>Subject4 Code</th><th>Subject5 Code</th><th>Subject6 Code</th><th>Subject6 Code</th><th>Subject7 Code</th><th>Subject8 Code</th><th>Subject9 Code</th><th>Subject10 Code</th></tr></table>
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
