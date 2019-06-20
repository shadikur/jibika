<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php include "config.php"; ?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title><?php echo $title; ?></title>
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
	left:41px;
	top:558px;
	width:168px;
	height:75px;
	z-index:1;
}
#Layer3 {
	position:absolute;
	left:57px;
	top:358px;
	width:151px;
	height:142px;
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
.style15 {
	color: #00CC00;
	font-weight: bold;
	font-style: italic;
	font-size: large;
}
.style16 {
	color: #FFFFFF;
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
		<h1><i><font size='12' color='#ffffff'>Jibika</font></i><span class="style1"><span class="style4"><i><font size='12' color='#ffffff'>.TK ......................</font></i></span></span></h1>
		<h2><span class="style2"><i><font size='6' color='#ffffff'>Welcome to  </font></i></span><i><font size='6' color='#ffffff'>haven's</font></i><span class="style2"><i><font size='6' color='#ffffff'> world :)</font></i></span></h2>
	</div>
	<div id="menu">
		<ul>
			<li id="button2"><a href="index.php" title="">Home</a></li>
			<li id="button3"><a href="contact.php" title="">Contact</a></li>
			<li id="button5"><a href="about.php" title="">About </a><a href="help.php" title="">Help</a></li>
		</ul>
	</div>
</div>

<!-- header ends -->
<!-- content begins -->
<div id="main">
<div id="mainbot">
<div id="maintop"></div>
	<div class="style4" id="right">
	  <h4>Join today and earn real money!!</h4>
			<p class="style8"> ** All fields are mendatoty!<br />
			  ** Please provide valid information in all fields. <br /> 
			  <span class="style16">Have a good time :) Be smarter and employed!</span><br />
			  <br />
			  <?php
			 
//include "config.php";
if ($_REQUEST['act'] == 'reg') {
$uid = htmlspecialchars(strtolower($_REQUEST['uid']));
$pwd = htmlspecialchars($_REQUEST['pwd']);
$cpwd = htmlspecialchars($_REQUEST['cpwd']);
$sex = htmlspecialchars($_REQUEST['sex']);
$mail = htmlspecialchars(strtolower($_REQUEST['mail']));
$code = htmlspecialchars($_REQUEST['code']);
$valid = htmlspecialchars($_REQUEST['ccode']);
$ua = htmlspecialchars(addslashes($_SERVER['HTTP_USER_AGENT']));
$ext = md5(time().'XyShaSoniaMiMi');

$check = mysql_fetch_assoc(mysql_query("select count(username) c from jibika_user where username='$uid'"));
echo '<font color=\'red\'>';
if ($check['c'] > 0) {echo '&#187; Username already exists!<br/>'; }
if (empty($uid) || strlen($uid) <4 && strlen($uid) >15) { echo '&#187; Username invalid!<br/>'; }
if (empty($pwd) || strlen($pwd) <4 && strlen($pwd) >15 || !($pwd == $cpwd)) { echo '&#187; Password invalid!<br/>'; }
if (empty($valid) || !($valid == $code)) { echo '&#187; Validation code invalid!<br/>'; }
if (empty($mail)) { echo '&#187; Email field is empty!<br/>'; }
echo '</font>';
if (!($check['c'] > 0) && (strlen($uid) >3)&& (strlen($uid) < 16) && (strlen($pwd) >3) && (strlen($pwd) < 16) && !($uid =="") && !($pwd =="") && !($mail == "") && ($pwd==$cpwd) && ($valid == $code)) {
mysql_query("insert into jibika_user(username,password,sex,email,regdate,ua,sid) values('$uid','$pwd','$sex','$mail','$date','$ua','$ext')");
echo '<font color=\'orange\'>';
echo "<b>Registration Successful!</b><br/>Thank you for registering to support us.<br/>";
echo "Username : <b>$uid</b> <br/>";
echo "Password : <b>$pwd</b> <br/>";
echo "Login to your account and update your profile!<br/>";
echo '</font>';
}}
?>
	    <form action="register.php?act=reg" method="post">
          <p><strong class="style8">User name:<br /> 
            (Use only numeric or charecter, Max. 15) </strong><br />
            <input name="uid" type="text" id="uid" maxlength="15" maxlegth="40"/>
            <br />
            <br />
            <strong> <span class="style8">Password: <br />
            (Use only numeric or charecter, Max. 15)</span> <br />
            </strong>
            <input name="pwd" type="password" maxlength="15" maxlegth="40"/>
            <br />
            <br />
            <strong> <span class="style8">Confirm Password:<br /> 
            (Use only numeric or charecter, Max. 15) </span><br />
            </strong>
            <input name="cpwd" type="password" maxlength="15" maxlegth="40"/>
            <br />
            <br />
          <strong><span class="style8">Email address :<br />
          (Enter a valid mail address, Max. 35) </span></strong><br />
            <input name="mail" type="text" id="mail" maxlength="35" maxlegth="40"/>
            <br />
            <br />
            <span class="style8"><strong>Sex : <br />
            ( Please select your sex e.g. Male / Female )</strong></span><strong><br /> 
            <select name="sex">
              <option value="male">Male</option>
              <option value="female">Female</option>
            </select>
            </strong><br />
            <br />
            <span class="style8">
            <?php $code = substr(md5(time()),0,5); ?>
            <strong>Enter the text below:</strong></span><strong><br />
            </strong><span class="style15"><?php echo $code; ?></span><br />
            <input name="ccode" type="hidden" size="50" value="<?php echo $code;?>" maxlength="40" />
            <input name="code" type="text" maxlength="6" />
            <br />
            <input type="Submit" value="Register"> 
            <input type="Reset" value="Reset">
          </p>
        </form>
              <p><br />
                  <strong><br />
                    <span class="style10">For any kind of problem, please <a href="contact.php">contact  </a> with us :) <br />
                    And send your feed back..............:) <br />
              We are ready to help you and we always remain beside you!</span></strong>  </p>
              <p class="style8"><br />
	        </p>
		<div class="style8"></div>
		<div id="col"></div>
	</div>
	<div id="lefttop">
	<div id="left">
			<h3>Login</h3>
			<p>&nbsp;</p>
			<p>
              <?php
$attempt = $_REQUEST['attempt'];
if ($attempt == 'error') { echo "<font color=\"red\">&raquo; Invalid login!</font><br/>"; }
?>
</p>
			<form action="login.php" method="post">
              <p>User Name :</p>
			  <p>
                <input name="user" type="text" value="" maxlength="15" />
              </p>
			  <p>Password :</p>
			  <p>
                <input type="password" name="password" maxlength="15"/>
              </p>
			  <p>
			    <input name="submit" type="submit" value="Login" />
		      </p>
		  </form>
			<span class="style12"><br />
            </span><a href="forget.php" class="style12">&raquo; Forget Password? Click here...</a>
            </p>
<p>&nbsp;</p>
			<h3>Register<a href="#"><br />
			</a></h3>
		    <div align="center">
		      <p>&nbsp;</p>
		      <p>&nbsp;</p>
		      <p><a href="register.php"><img src="images/join-now-button1.png" alt="join" width="202" height="147" /></a></p>
	      </div>
	</div>
	</div><div style="clear:both"></div>
<!--content ends -->
<!--footer begins -->
	</div>
</div>

<div id="footer">
<p>Copyright &copy; 2011 , All right's reserved by <a href="http://www.jibika.tk"><?php echo $title; ?></a></p>
<p>Designed by <a href="http://www.jibika.tk" title="shuvo"><?php echo $title; ?></a> || Total: 
  <?php include('count.php'); ?>
</p>
</div>
</div>
<!-- footer ends-->
</body>
</html>