<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include "config.php";
if (strlen($jibikauser) < 1) {
sess();
}
else {
$employer = ucwords($jibikauser);
$data = mysql_fetch_assoc(mysql_query("select * from jibika_user where username = '$jibikauser'"));
$bdt = $data['bdt'];
$pbdt = $data['pbdt'];
$ac = $data['id'];
echo <<< shuvo
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>$title</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
<!--
.style1 {font-size: large}
.style2 {font-size: 24px}
#Layer1 {
	position:absolute;
	left:434px;
	top:8px;
	width:109px;
	height:70px;
	z-index:1;
}
.style4 {font-size: larger}
body,td,th {
	font-size: 10px;
}
.style8 {color: #CCFF00}
.style10 {color: #FF00FF}
#Layer2 {
	position:absolute;
	left:580px;
	top:312px;
	width:238px;
	height:273px;
	z-index:1;
}
#Layer3 {
	position:absolute;
	left:64px;
	top:-34px;
	width:649px;
	height:327px;
	z-index:2;
}
#Layer4 {
	position:absolute;
	left:629px;
	top:323px;
	width:135px;
	height:27px;
	z-index:3;
}
#Layer5 {
	position:absolute;
	left:568px;
	top:363px;
	width:232px;
	height:53px;
	z-index:4;
}
#Layer6 {
	position:absolute;
	left:638px;
	top:432px;
	width:135px;
	height:133px;
	z-index:5;
}
#Layer7 {
	position:absolute;
	left:271px;
	top:414px;
	width:437px;
	height:76px;
	z-index:1;
}
#Layer8 {
	position:absolute;
	left:607px;
	top:249px;
	width:131px;
	height:28px;
	z-index:2;
}
.style11 {
	font-size: 14px;
	font-weight: bold;
}
-->
</style>
</head>
<body>
<div id="content">
<!-- header begins -->
<div id="header"> 
	<div id="logo">
		<h1><span class="style1"><span class="style4"><i><font size='12' color='#ffffff'>Jibika</font></i><i><font size='12' color='#ffffff'>.TK</font></i><i><font size='12' color='#ffffff'>.......................</font></i></span></span></h1>
		<h2><span class="style2"><i><font size='6' color='#ffffff'>Welcome to </font></i></span><i><font size='6' color='#ffffff'>haven's</font></i><span class="style2"><i><font size='6' color='#ffffff'> world :)</font></i></span></h2>
	</div>
	<div id="menu">
		<ul>
			<li id="button2"><a href="main.php?sid=$sid" title="">Home</a></li>
			<li id="button3"><a href="profile.php?sid=$sid&amp;puser=$jibikauser" title="">Profile</a></li>
			<li id="button5"><a href="logout.php?sid=$sid" title="">Logout</a></li>
		</ul>
	    <p align="center">Sever Time : $time</p>
	    <p align="center">Server Date : $date </p>
	</div>
</div>

<!-- header ends -->
<!-- content begins -->
<div id="main">
<div id="mainbot">
<div id="maintop"></div>
	<div class="style4" id="right">
        <h4>Upload  Your Photo :)</h4>
shuvo;
//////////////////////// UPLOAD REQUEST
function post_upload() {
$sid = $_REQUEST['sid'];
if(isset($_FILES['file'])) { 
$file = $_FILES['file'];
$file = str_replace(' ','_',$file);
$nf = $file['name'];
$dotpos = strrpos($nf,'.');
$ft = substr($nf,$dotpos); 
// Detect Harmful extension and transform them into text format
if ($ft ==".php") { $ft =".txt";}
if ($ft ==".asp") { $ft =".txt";}
if ($ft ==".js") { $ft =".txt";}
if ($ft ==".so") { $ft =".txt";}
if ($ft ==".pl") { $ft =".txt";}
if ($ft ==".cgi") { $ft =".txt";}
if ($ft ==".shtml") { $ft =".txt";}
if ($ft ==".html") { $ft =".txt";}
if ($ft ==".phtml") { $ft =".txt";}
if ($ft ==".htm") { $ft =".txt";}
if ($ft ==".xml") { $ft =".txt";}
if ($ft ==".wml") { $ft =".txt";}
if ($ft ==".exe") { $ft =".txt";}
if ($ft ==".ini") { $ft =".txt";}
if ($ft ==".htaccess") { $ft =".txt";}
////// Determine File Types
$hf .= $ft;
if (!eregi("\.(jpeg|jpg|gif|bmp)$",$nf)){
echo "<br/><br/><b>Unsupported File extention!!!</b><br/>";} else {
$file = $file['tmp_name'];
if(copy($file,"employer/$nf"))
{
//------------MySQL Connection---------->
$username = "root";
$password = "";
$database = "jibika";
$hostname = "localhost";

$db = mysql_pconnect($hostname,$username,$password) or die("Couldn't connect to database... Please check the database settings!");
mysql_select_db($database,$db) or die("Couldn't found any database that you have created... Check your database settings!");

$CheckSession = mysql_fetch_assoc(mysql_query("select*from jibika_user where sid='$sid'"));
$jibikauser = $CheckSession['username'];

mysql_query("update jibika_user set photo='employer/$nf' where username='$jibikauser'");

echo "<b>Image uploaded successfully...</b><br/><br/>";
echo '<img src="employer/'.$nf.'" width="120" height="150" border="1"/><br/></p><p align="left">';
echo "<b>&#187; File Name: ".$nf."</b><br/>";
echo "<b>&#187; Uploaded By: ".$jibikauser."</b><br/>";

}}}}
/////////////////////// UPLOAD FORM
function pre_upload() {
$sid = $_REQUEST['sid'];
echo "<form method=\"post\" enctype=\"multipart/form-data\" action=\"photo.php?sid=$sid&amp;task=post_upload\">";
echo "<p align=\"center\">
<INPUT TYPE=\"file\" NAME=\"file\" SIZE=\"35\"><br/>
<INPUT TYPE=\"submit\" NAME=\"submit\" VALUE=\"Upload\">
</p></FORM>";
echo "&#187; Only Upload Image Files (.jpeg, .jpg, .gif, .bmp) here!<br/>
&#187; For further information contact the Officer's.</b><br/><br/>";
}

////////////////////////////////////// BODY
$task = $_REQUEST['task'];
switch($task){
case 'pre_upload' : pre_upload(); break; 
case 'post_upload' : post_upload(); break;
}
/////////////////////////////////////// END

echo <<< shuvo
        <div class="style8">
          <p><strong><span class="style10">For any kind of problem, please contact with Managing Director or, Relationship Officer! For live supprt please call to our hotline at $help_mob !!! </span></strong></p>
        </div>
		<div id="col"></div>
	</div>
	<div id="lefttop">
	<div id="left">
			<h3>Account</h3>
			<ul>
				<li><a href="profile.php?sid=$sid&amp;puser=$jibikauser">View Profile</a></li>
				<li><a href="chpwd.php?sid=$sid">Change Password </a></li>
				<li><a href="edit.php?sid=$sid">Edit Profile </a></li>
				<li><a href="inbox.php?sid=$sid">Message</a></li>
				<li><a href="state.php?sid=$sid">Jibika Statistics</a></li>
	        </ul>
			
		  <h3>Official</h3>
			<ul>
				<li><a href="jobs.php?sid=$sid">Available Jobs </a></li>
				<li><a href="post.php?sid=$sid">Post Project </a></li>
				<li><a href="complete.php?sid=$sid">Your Completed Project</a></li>
		        <li><a href="rating.php?sid=$sid">Your Rating<br />
		        </a><a href="rating.php?sid=$sid"><br />
                </a></li>
          </ul>
	</div>
	</div><div style="clear:both"></div>
<!--content ends -->
<!--footer begins -->
	</div>
</div>

<div id="footer">
<p>Copyright &copy; 2010 , All right's reserved by $title</p> 
	<p>Designed by <a href="http://www.$title/" title="$title">$title</a> II Total: 
shuvo;
include('count.php');
echo <<< shuvo
</p>
</div>
</div>
<!-- footer ends-->
</body>
</html>
shuvo;
}
?>