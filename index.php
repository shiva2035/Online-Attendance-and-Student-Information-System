<?php
	session_start();
	require_once('head.php');
	if($_GET['page']==""){header("location:index.php?page=home");}
	else $page=$_GET['page'];
	if(!isset($page))echo $page;
	if($page==null||$page==''){
		echo "<fieldset><legend><b>Access Forbidden</b></legend></fieldset>";
	}
?>
<style>
#iframe
{
	background-color:white;
	width:100%;
	-webkit-min-height:800;
	height:460;
	min-height:540;
	border-left-style:groove;
	border-right-style:solid;
	border:0.2px;
}
#ifdiv
{
	//min-height:auto;
	//-webkit-min-height:1500px;
}
#bottom2
{
	margin-bottom:-100;
	text-align:center;
	vertical-align:middle;
	text-align:center;
	color:white;
	background-color:#69BCE6;
	height:49;
	margin-left:-100;
	margin-right:-100;
	font-size:12pt;
}
.alert-info
{
	background-color:#d9edf7;border-color:#bce8f1;color:#3a87ad;
}
</style>
<?php
$page= "$page.php";
echo "<div ID=\"ifdiv\"><iframe src=\"$page\" id=\"iframe\"></iframe></div>";
?>
<div id="bottom2" valign=middle><br>Dept.of Computer Science and Engineering-2k8, (Best View in Firefox 3.4 or Above) &nbsp;&nbsp;<font size=3>website developer: Shiva Kumar K, RGUKT-Basar [shiva2035.webs.com]</font></div>

