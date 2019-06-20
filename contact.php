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
	left:35px;
	top:557px;
	width:168px;
	height:75px;
	z-index:1;
}
#Layer3 {
	position:absolute;
	left:51px;
	top:357px;
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
.style13 {
	color: #00CC00;
	font-weight: bold;
}
.style15 {color: #00CC00; font-weight: bold; font-style: italic; }
.style16 {
	color: #FFFFFF;
	font-weight: bold;
}
.style21 {
	color: #00CC00;
	font-weight: bold;
	font-family: "Courier New", Courier, monospace;
	font-size: 18px;
}
#Layer4 {
	position:absolute;
	left:307px;
	top:422px;
	width:182px;
	height:28px;
	z-index:3;
}
.style23 {color: #CC00CC; font-weight: bold; font-family: Georgia, "Times New Roman", Times, serif; font-size: 18px; }
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
        <h4>Contact Us ?</h4>
			<p class="style8">Need any kind of help?<br /> 
			  Want to share your informative idea?<br /> 
			  Feel any kind of problem? <br />
	    Never hesitate to contact with us... <span class="style10">24 hours live voice support at our hotline..<br />
	    <br />
	    </span><span class="style13"><span class="style21"><span class="style23">+8801913404014,<br />
+8801753027193</span><br />
<br />
		  </span></span>Or, send mail from below.<br /> 
			  <span class="style16">Have a good time :) Be smarter and employed!</span><br />
			  <br />
			  <strong>Email Address: (Max: 40 char)</strong><br />
			  <input name="email" type="text" size="50" maxlength="40" maxlegth="40"/>
			  <br />
			  <strong>Subject: (Max: 30 char)<br />
			  </strong>
			  <input name="subject" type="text" size="50" maxlength="40" maxlegth="40"/>
			  <br />
			  <strong>Enter Your Comments: (Max. 160 char)<br />
			  <textarea wrap="virtual" name="Comments" rows=4 cols=40></textarea>
			  </strong><br />
			  <?php $code = substr(md5(time()),0,5); ?>
			  <strong>Enter the text below:</strong>  <span class="style15"><?php echo $code; ?></span><br />
			  <input name="ccode" type="hidden" size="50" value="<?php echo $code;?>" maxlength="40" />
			  <input name="code" type="text" size="50" maxlength="40" />
			  <br />
			  <input type="Submit" value="Submit"> 
              <input type="Reset" value="Clear">
              <br />
			      <strong><br />
			      <span class="style10">For any kind of problem, please <a href="contact.php">contact  </a> with us :) <br />
			      And send your feed back..............:) <br />
        We are ready to help you and we always remain beside you!</span></strong></p>
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
		  </form><br/><a href="forget.php" class="style12">&raquo; Forget Password? Click here...</a>
            </p>
<p>&nbsp;</p>
			<h3>Register<a href="#"><br />
			</a></h3>
		    <div align="center">
		      <p>&nbsp;</p>
		      <p>&nbsp;</p>
		      <p><a href="register.php"><img src="images/join-now-button1.png" alt="join" width="205" height="148" /></a></p>
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
