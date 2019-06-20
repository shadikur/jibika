<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include "config.php";
include "time.php";
if (strlen($jibikauser) < 1) {
sess();
}
else {

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
        <h4>Edit Your Profile :)</h4>
shuvo;
if ($_REQUEST['act'] == 'update') {
$rn = $_REQUEST['real'];
$bday = $_REQUEST['bday'];
$bmonth = $_REQUEST['bmonth'];
$byear = $_REQUEST['byear'];
$pno = $_REQUEST['pno'];
$div = $_REQUEST['div'];
$dis = $_REQUEST['dis'];
$ps = $_REQUEST['ps'];

mysql_query("update jibika_user set realname='$rn',mobile='$pno',birthday='$bday',bmonth='$bmonth',byear='$byear',division='$div',district='$dis',thana='$ps'");
echo "<b><font color='#99FF00'>&#187; Profile Successfully Updated!</font></b><br/><br/>";
}
echo <<< shuvo
        <form id="form1" method="post" action="edit.php?sid=$sid&amp;act=update">
          <p>
            <label for="textfield"></label>
            
            <span class="style11">
            <label for="textfield">Real Name::::::</label>
            <input type="text" name="real" id="textfield" />
            </span>            <span class="style11"><br />
            <strong>
            <label for="label">Birth Day:::::::::</label>
            </strong></span><strong>
            <label for="label"></label>
            <input name="bday" type="text" id="label" value="DD" size="6" maxlength="2" /> 
            - 
            <input name="bmonth" type="text" value="MM" size="6" maxlength="2" />
            - 
            <input name="byear" type="text" value="YYYY" size="9" maxlength="4" />
            <span class="style10"><br />
            </span>
            <span class="style11">
            <label for="label2">Phone No::::::::</label>
            <input name="pno" type="text" id="label2" value="+88" />
            </span>            <span class="style10">            <br />
            </span>
            <span class="style11">
            <label for="label3">Division:::::::::::</label>
            <input type="text" name="div" id="label3" />
            </span>
            <span class="style10">
            <br />
            </span><span class="style11">
            <label for="label4">District</label>
            ::::::::::::
            <input name="dis" type="text" id="label4" />
            </span><br />
            <span class="style11">
            <label for="label5">Police Station:</label>
            <input type="text" name="ps" id="label5" />
            <br />
            </span><span class="style10"><input type="submit" value="Update"/><input type="reset" value="Clear"/><br />
                  </span></strong></p>
        </form>
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
				<li><a href="mailto:jibika.tk@gmail.com?Subject=$jibikauser (Project posting)">Post Project </a></li>
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