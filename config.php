<?php
//------------MySQL Connection---------->
$username = "root";
$password = "";
$database = "jibika";
$hostname = "localhost";

$db = mysql_pconnect($hostname,$username,$password) or die("Couldn't connect to database... Please check the database settings!");
mysql_select_db($database,$db) or die("Couldn't found any database that you have created... Check your database settings!");

//---------Site settings--------->
$title = "JbLance.TK";
$help_mob = "+88 01913404014";
$owner1= "shuvo";
$owner2= "bapi";
$ua = $_SERVER['HTTP_USER_AGENT'];

//----------Time and date settings--------->
$nowx = time();
$now = time() + 6*60*60 ;
$time = date("h : i : s A", $now);
$date = date("d  M  Y", $now);

//----------Check login----------------->
$sid = $_REQUEST['sid'];
$session = $_REQUEST['sid'];
$CheckSession = mysql_fetch_assoc(mysql_query("select*from jibika_user where sid='$session'"));
$jibikauser = $CheckSession['username'];
$jibika_login = (strlen($jibika_user) > 1);

function sess() {
echo <<< shuvo
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>JbLance.TK</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="styles.css" rel="stylesheet" type="text/css" media="screen" />
<style type="text/css">
<!--
#Layer1 {
	position:absolute;
	left:434px;
	top:8px;
	width:109px;
	height:70px;
	z-index:1;
}
body,td,th {
	font-size: 10px;
}
#Layer2 {
	position:absolute;
	left:503px;
	top:77px;
	width:168px;
	height:75px;
	z-index:1;
}
#Layer3 {
	position:absolute;
	left:207px;
	top:63px;
	width:205px;
	height:131px;
	z-index:2;
}
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
.style12 {color: #00FF00}
#Layer4 {
	position:absolute;
	left:396px;
	top:310px;
	width:347px;
	height:227px;
	z-index:3;
}
.style13 {
	color: #FF0000;
	font-weight: bold;
}
.style14 {color: #FF0000}
-->
</style>
</head>
<body>
<div id="Layer2">
  <div align="left"><a href="register.php"><img src="../Shuvo/images/join-now-button1.png" alt="join" width="190" height="90" /></a></div>
</div>
<div id="Layer3">

  <div align="left">
  <span class="style14">
shuvo;
$attempt = $_REQUEST['attempt'];
if ($attempt == 'error') { echo "<font color=\"red\">&raquo; Invalid login!</font><br/>"; }
echo <<< shuvo
    </span></div>
  <form action="login.php" method="post">
  <p align="left" class="style14">User Name :</p>
  <p align="left" class="style14">
    <input name="user" type="text" value="" maxlength="15" />
  </p>
  <p align="left" class="style14">Password :</p>
  <p align="left" class="style14">
    <input type="password" name="password" maxlength="15"/>
</p>
  <p align="left"><span class="style14">
    <input type="submit" value="Login" />
  </span>
  </form> 
    <div align="left"><span class="style12"><br />
    </span><a href="forget.php" class="style12">&raquo; Forget Password? Click here...</a> 
      </p>
    </div>
</div>
<div id="content">
<!-- header begins -->
<div id="header"> 
	<div id="logo">
	  <h3 align="center" class="style13">Your Session Has Been Expired or, Logged out ! Come Back Soon, Thank you!! </h3>
    </div>
	</div>

<!-- header ends -->
<!-- content begins -->
<div id="footer">
<p>Copyright &copy; 2011 , All right's reserved by <a href="http://www.jblance.tk">JbLance.TK</a></p>
<p>Designed by <a href="http://www.jblance.tk" title="shuvo">JbLance.TK</a> || Total: 
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