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
    <?php
$attempt = $_REQUEST['attempt'];
if ($attempt == 'error') { echo "<font color=\"red\">&raquo; Invalid login!</font><br/>"; }
?>
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
<p>Copyright &copy; 2011 , All right's reserved by <a href="http://www.jibika.tk"><?php echo $title; ?></a></p>
<p>Designed by <a href="http://www.jibika.tk" title="shuvo"><?php echo $title; ?></a> || Total: 
  <?php include('count.php'); ?>
</p>
</div>
</div>
<!-- footer ends-->
</body>
</html>
