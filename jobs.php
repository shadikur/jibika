<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include "config.php";
include "time.php";
if (strlen($jibikauser) < 1) {
sess();
}
else {
$employer = ucwords($jibikauser);
$data = mysql_fetch_assoc(mysql_query("select * from jibika_user where username = '$jibikauser'"));

//------------> GET PAGES
if (!function_exists('getpg')) {
function getpg($t,$d) {
return ceil($t/$d);}
}
$post_time = time();
//------------> QUERIES
$start = isset($_GET['start']) ? $_GET['start'] : '0';
$newstrt = $start + 5;
$prevstrt = $start - 5;

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
.style5 {font-size: 12px}
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
	</div>
</div>

<!-- header ends -->
<!-- content begins -->
<div id="main">
<div id="mainbot">
<div id="maintop"></div>
	<div class="style4" id="right">
shuvo;
if ($jibikauser == $owner1 || $jibikauser == $owner2) {
if ($_REQUEST['add'] == 'project') {
$ptitle = $_REQUEST['ptitle'];
$pdetails = $_REQUEST['pdetails'];
$dtime = $_REQUEST['dtime'];
$budget = $_REQUEST['budget'];
mysql_query("insert into jibika_jobs(job_title,job_details,deliver,budget,post_time) values('$ptitle','$pdetails','$dtime','$budget','$nowx')");
echo "Project Added!<br/>";
}
echo <<< shuvo
<h4>Add Project</h4>
<form action="jobs.php?sid=$sid&amp;add=project" method="post">
Project Title:<br/>
<input type="text" name="ptitle" /><br/>
Project Details:<br/>
<input type="text" name="pdetails" /><br/>
Delivery Time : <input type="text" name="dtime" size="6"/> <br/>Budget : <input type="text" name="budget" size="12"/><br/>
<input type="submit" value="Add Now"/></form>
shuvo;
}
echo <<< shuvo
        <h4>Available Jobs :) </h4>
shuvo;
	if ($_REQUEST['act'] == 'del' && ($jibikauser == $owner1 || $jibikauser == $owner2)) {
	$id = $_REQUEST['id'];
	mysql_query("delete from jibika_jobs where id='$id'");
	echo "Project Closed!<br/>";
	}
	if ($_REQUEST['act'] == 'accept') {
	$aid = $_REQUEST['aid'];
	mysql_query("insert into jibika_apply(employer,time,pid) values('$jibikauser','$time','$aid')");
	echo "<b><big><font color='yellow'>Project Applied. Wait for confirmation!</font></b></big><br/>";
	}
echo "<hr/>
<p class=\"style8\">&nbsp;</p>";
$count = mysql_fetch_assoc(mysql_query("select count(*) value from jibika_jobs"));
$results = mysql_query("select * from jibika_jobs order by post_time DESC limit $start,5");
while ($report = mysql_fetch_assoc($results)){
$ptitle = $report['job_title'];
$details = $report['job_details'];
$sime = $report['post_time'];
$stime = $now - $sime ;
include "format.php";
echo "<b><big><font color='yellow'>&#187;".ucwords($ptitle)." : </font></b><font color='#FFFFFF'>".$details."</font><br/>";
echo "<B>Budget : ".$report['budget']." | Delivery Time: ".$report['deliver']."</b></big><br/>";
echo "(Posted ".gettimemsg($stime)." ago) | <a href=\"jobs.php?act=accept&amp;sid=$sid\">Accept this job!</a>";
if ($jibikauser == $owner1 || $jibikauser == $owner2) { echo "| <a href=\"jobs.php?act=del&amp;id=".$report['id']."&amp;sid=$sid\"><font color='red'>Close Project</font></a>"; }
echo "<br/><br/><hr/>";
}
$mypage = getpg($count['value'],'5');
echo "</p><p align=\"left\">";
if ( $start == 5 || $start > 5 ) {
echo "<a href=\"jobs.php?start=".$prevstrt."&amp;sid=".$sid."\">Previous</a>" ;}
echo " (Page ".(($start / 5) + 1)." of $mypage) ";
if ($count['value'] > $newstrt ) {
echo " <a href=\"jobs.php?start=".$newstrt."&amp;sid=".$sid."\">Next</a>";}

echo <<< shuvo
			<p class="style8"><br />
			  <strong><br />
		      <span class="style10"><br />
	        </span></strong></p>
			<div class="style8">
          <p>&nbsp;</p>
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
				<li><a href="mailto:jibika.tk@gmail.com?Subject=$jibikauser (Poroject Posting)">Post Project </a></li>
				<li><a href="complete.php?sid=$sid">Your Completed Project</a></li>
		        <li><a href="rating.php?sid=$sid">Your Rating<br />
                  <br />
	            </a></li>
		  </ul>
	</div>
	</div><div style="clear:both"></div>
<!--content ends -->
<!--footer begins -->
	</div>
</div>

<div id="footer">
<p>Copyright &copy; 2010 , All right's reserved by $tiyle $title</p> 
	<p>Designed by <a href="www.jibika.tk" title="$title">$title</a> II Total: 
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