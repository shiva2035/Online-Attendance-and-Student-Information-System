<title>::RGUKT-BASAR::OASIS-Portal::</title>
<link rel="icon" href="images/rgu.png" type="image/x-icon" />
<link href="style2.css" rel="stylesheet" type="text/css" />
<style type = "text/css">
body
{
	margin:50 100 100;
	border:1px;
	background-color:#E6F9FF;#F8F8F8;
}
#header
{
	align:center;
	margin-top:15;
	-webkit-margin-top:15;
	text-align:right;
	vertical-align:middle;
	background-color:#B0C4DE;//#FF7F60;darkred;
	color:white;
}
#header1
{
	margin-top:-95;
	font-size:16pt;
	font-style:bolder;
	font-family:Georgia;
	text-align:center;
	vertical-align:bottom;
	background-image:url("images/head.jpg");
	color:brown;
	width:100%;
	height:100;
}
#head_div
{
	background-color: rgb(21, 20, 10);
	background-color:darkblue;
	background-color:#69BCE6;
	color:white;
	margin-top:-50;
	height:100;
	//-moz-border-radius:25;
}
</style>
<sctipt text/javascript></script>
<div id="head_div">
<center><font size=6 color=white >OASIS (Online Attendance and Student Information System)</font><br><font size=3 color=white>(Dept.of Computer Science and Engineering, RGUKT-Basar)</font></center>
</div>
<div id="header">
	<ul id="menu">
	<li><a href="index.php?page=home" id="hlink">Home</a></li>
	<li><a href="" id="hlink">Notice Board</a>
	<ul>
	<li><a href="index.php?page=admin_spot" id="hlink">Notice Board</a></li>
	<li><a href="index.php?page=time_table" id="hlink">Time Tables</a></li>
	</ul>
	</li>
	
<?php if(isset($_SESSION['user']))
{
	$utype=$_SESSION['utype'];
	switch($utype)
	{
		//STUDENT_HOME
		case "student":
		{ ?>
		<li><a href="" id="hlink">Attendance</a>
		<ul>
			<li><a href="index.php?page=stuAttd_today">Today's Report</a></li>
			<li><a href="index.php?page=stuAttd_monthly">Monthly Report</a></li>			
		</ul>
		</li>					
		<li><a href="index.php?page=viewPDF.php?id=<? echo $_SESSION['user'];?>" id="hlink">Your CV</a></li>
		<li><a href="" id="hlink">Mail</a>
			<ul>
			<li><a href="index.php?page=mail_inbox" id="hlink">Inbox</a></li>
			<li><a href="index.php?page=mail_outbox" id="hlink">Outbox</a></li>
			<li><a href="index.php?page=mail_compose" id="hlink">Compose</a></li>
			</ul>
		</li>
		<li><a href="index.php?page=admin_viewStud"><?php echo $_SESSION['user'];?></a>
			<ul>
			<li><a href="index.php?page=admin_viewStud">View Profile</a></li>
			<li><a href="index.php?page=upload" id="hlink">Update Resume/Profile-Pic</a></li>
			<!--<li><a href="index.php?page=update_profile" id="hlink">Update Profile</a></li>-->
			<li><a href="logout.php" id="hlink">Logout</a></li>	
			</ul>
		</li>
		<?php
		break;
		}
		//ADMIN_HOME
		case "admin":
		{ ?>
			<li><a href="" id="hlink">Student</a>
			<ul>
				<li><a href="index.php?page=admin_searchStud">Search Student</a></li>
				<li><a href="index.php?page=admin_addStud">Add Single Student</a></li>
				<li><a href="index.php?page=admin_addBulkStud">Add Bulk Students</a></li>
				<li><a href="index.php?page=admin_viewStudAttd">View Student Attendance</a></li>
			</ul>
			<li><a href="" id="hlink">Faculty</a>
			<ul>
				<li><a href="index.php?page=admin_searchFac">Search Faculty</a></li>	
				<li><a href="index.php?page=admin_addFac">Add Single Faculty</a></li>
				<li><a href="index.php?page=admin_addBulkFac">Add Bulk Faculty</a></li>
				<li><a href="index.php?page=upload_tt">Add Faculty Work Load</a></li>				

			</ul>						
			</li>
			<li><a href="" id="hlink">Courses</a>
			<ul>
				<li><a href="index.php?page=admin_viewAllCourses" id="hlink">View All Courses</a></li>
				<li><a href="index.php?page=admin_addCourse" id="hlink">Add New Course</a></li>
				<li><a href="index.php?page=admin_editCourse" id="hlink">Edit Course Details</a></li>
				<li><a href="index.php?page=admin_uploadCourseReg" id="hlink">Upload Course Registration</a></li>
			</ul>
			</li>
			<li><a href="" id="hlink">Attendance</a>
			<ul>
				<li><a href="index.php?page=admin_createAttd">Create Attendance Sheet for this Month</a></li>
				<li><a href="index.php?page=admin_viewStudAttd">View Student Attendance Report</a></li>
				<li><a href="">View Course wise Attendance</a></li>
			</ul>			
			</li>			
			<li><a href="" id="hlink">Circulars</a>
			<ul>
			<li><a href="index.php?page=admin_compose_notice" id="hlink">Compose New Circular</a></li>
			<li><a href="index.php?page=admin_edit_circ" id="hlink">View and Edit Circulars</a></li>
			</ul>
			</li>
			<li><a href="" id="hlink">Mail</a>
			<ul>
			<li><a href="index.php?page=mail_inbox" id="hlink">Inbox</a></li>
			<li><a href="index.php?page=mail_outbox" id="hlink">Outbox</a></li>
			<li><a href="index.php?page=mail_compose" id="hlink">Compose</a></li>
			</ul>
			</li>
			<li><a href="index.php?page=admin_info"><?php echo $_SESSION['user'];?></a>
				<ul>
				<li><a href="index.php?page=admin_prof">View Profile</a></li>
				<li><a href="index.php?page=upload" id="hlink">Update Resume/Profile-Pic</a></li>
				<!--<li><a href="index.php?page=update_profile" id="hlink">Update Profile</a></li>-->
				<li><a href="logout.php" id="hlink">Logout</a></li>	
				</ul>
			</li>			
		<?php
		break;
		}
		//Faculty_HOME
		case "faculty":
		{ ?>
			<li><a href="" id="hlink">Student Attendance</a>
			<ul>
				<li><a href="index.php?page=fac_bulkAction" id="hlink">Bulk Action on All Students Attendance</a></li>
				<li><a href="index.php?page=fac_submitAttd" id="hlink">Submit Student Attendance</a></li>
				<li><a href="index.php?page=fac_modAttd" id="hlink">View/Modify Student Attendance</a></li>
			</ul>
			</li>
			<li><a href="index.php?page=admin_searchStud">Find Student</a></li>
			<li><a href="index.php?page=viewPDF.php?id=<?php echo $_SESSION['user'];?>" id="hlink">Your CV</a></li>
			<li><a href="" id="hlink">Mail</a>
			<ul>
			<li><a href="index.php?page=mail_inbox" id="hlink">Inbox</a></li>
			<li><a href="index.php?page=mail_outbox" id="hlink">Outbox</a></li>
			<li><a href="index.php?page=mail_compose" id="hlink">Compose</a></li>
			</ul>
			</li>
			<li><a href="index.php?page=admin_viewFac" id="hlink"><?php echo $_SESSION['user'];?></a>
				<ul>
				<li><a href="index.php?page=admin_viewFac" id="hlink">View Profile</a></li>
				<li><a href="index.php?page=upload" id="hlink">Update Resume/Profile-Pic</a></li>
				<!--<li><a href="" id="hlink">Update Profile</a></li>-->
				<li><a href="logout.php" id="hlink">Logout</a></li>	
				</ul>
			</li>	
		<?php
		break;
		}
	}
}
	else
	{ ?>
	<li><a href="index.php?page=login">Login</a>
	<ul>
	<li><a href="index.php?page=admin_addFac">Faculty Registration</a></li>
	<li><a href="index.php?page=admin_addStud">Student Registration</a></li>
	</ul>
	</li>
	<?php
	}
	?>
	</ul>
</div>

