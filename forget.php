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
#Layer4 {
	position:absolute;
	left:269px;
	top:369px;
	width:64px;
	height:63px;
	z-index:3;
}
#Layer5 {
	position:absolute;
	left:340px;
	top:373px;
	width:138px;
	height:58px;
	z-index:4;
}
#Layer6 {
	position:absolute;
	left:270px;
	top:478px;
	width:67px;
	height:64px;
	z-index:5;
}
#Layer7 {
	position:absolute;
	left:343px;
	top:478px;
	width:134px;
	height:65px;
	z-index:6;
}
#Layer8 {
	position:absolute;
	left:271px;
	top:591px;
	width:67px;
	height:58px;
	z-index:7;
}
#Layer9 {
	position:absolute;
	left:344px;
	top:590px;
	width:159px;
	height:61px;
	z-index:8;
}
.style22 {color: #FF0000}
.style24 {
	color: #FFFFFF;
	font-family: Verdana, Arial, Helvetica, sans-serif;
}
.style26 {color: #CCFF00; font-size: 14px; }
.style27 {
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
        <h4>Forget Your Password?</h4>
        <p class="style8">This page is yet under constraction! If you forget your password then call our hot line to do this process!</p>
        <p class="style8">Thank you!</p>
        <p class="style26">&nbsp;</p>
        <p><span class="style27"><span class="style24">Shadikur Rahman Shuvo</span></span><strong><br />
          <span class="style22">Softaware Engineer &amp; Developer<br />
        www.jibika.tk</span></strong></p>
        <p>&nbsp; </p>
        <p class="style8"><strong><br />
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
		      </p>
		  </form><br /><a href="forget.php" class="style12">&raquo; Forget Password? Click here...</a>
            </p>
<p>&nbsp;</p>
			<h3>Register<a href="#"><br />
			</a></h3>
		    <div align="center">
		      <p>&nbsp;</p>
		      <p><a href="register.php"><img src="images/join-now-button1.png" alt="join" width="191" height="122" /></a></p>
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
