<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Jibika.TK</title>
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
.style9 {color: #FF0000}
.style10 {color: #FF00FF}
#Layer2 {
	position:absolute;
	left:101px;
	top:551px;
	width:168px;
	height:75px;
	z-index:1;
}
#Layer3 {
	position:absolute;
	left:123px;
	top:360px;
	width:151px;
	height:185px;
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
.style11 {color: #000000}
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
        <h4>WELCOME :) </h4>
			<p class="style8">Heartiest welcome to you <span class="style8">! This is the first ever built virtual </span><span class="style9">IT Farm</span><span class="style8"> in Bangladesh. Our ambission is to develop the IT sector of our country. We know, our country's IT sector even slower than other country. Absolutly we know, Technology is the main content to build a developed country like Japan, USA, Germany etc.If, we are not developed in such sector then we have to stand back behind!</span></p>
			<p class="style8"><span class="style8">We know poverty is one of the most common problem in our country. Most of our people don't	know	the way of aliviate poverty. In Bangladesh, Jute and Dress export bussiness is the main source of earning foriegn currency.</span></p>
			<p class="style8"><span class="style8">The new revolutionary way of earning foriegn currency is </span><span class="style9">OUTSOURCING</span><span class="style8">. We are searching tech addict person to offer onlne job! We are trying to aliviate the poverty of our country and to build a happy Bangladesh.
		    <br />
            <br />
	          <strong class="style9">* You will shine, if you follow this condition given bellow:</strong><br />
	          -&gt; Log in daily at least 4-5 times according 2hrs time to time, <br />
	          -&gt; Don't lose your confidence by thinking, what'll happend after completing all chores,<br />
	          -&gt; Invite your friends to raise your support. </span><br />
		      <strong><br />
		      <span class="style10">For any kind of problem, please <a href="contact.php">contact </a> with us :) <br />
And send your feed back..............:) <br />
We are ready to help you and we always remain beside you!</span></strong></p>
			<h4>Employer Warning! (: </h4>
            <div class="style8">
		  <p>*You must use single account and a sigle PC(IP), otherwise you'll lost your account and earnings! <br />
		    *Make your password case critical to protect your account! <br />
		    *Please register uniqe account! If, proof of using more account being same user then you will lose your job! <br />
		    *Use Master DBBL Nexus Card / Master Card/ Visa Card to withdraw your money safly!		<br />
		  </p>
	    </div>
		<div id="col"></div>
	</div>
	<div id="lefttop">
	<div id="left">
			<h3>Login</h3>
			<p>&nbsp;</p>
			<p align="left">
			  <?php
$attempt = $_REQUEST['attempt'];
if ($attempt == 'error') { echo "<font color=\"red\">&raquo; Invalid login!</font><br/>"; }
$act = $_REQUEST['act'];
if ($act == 'logout') { echo "<font color=\"red\">&raquo; Logout Successfully!</font><br/>";}
?></p>
			<form action="login.php" method="post">
			  <p align="left">User Name :</p>
			  <p align="left">
                <input name="user" type="text" value="" maxlength="15" />
              </p>
			  <p align="left">Password :</p>
			  <p align="left">
                <input type="password" name="password" maxlength="15"/>
              </p>
			  <p align="left">
			    <input name="submit" type="submit" value="Login" />
              </p>
			  <p align="left"><br />
                <a href="forget.php" class="style11">&raquo; Forget Password? Click here...</a></p>
		    </form><br/>
<h3>Register<a href="#"><br />
			</a></h3>
		</div>
	<div align="center">
	  <p>&nbsp;</p>
	  <p>&nbsp;</p>
	  <p><a href="register.php"><img src="images/join-now-button1.png" alt="join" width="198" height="139" /></a></p>
	</div>
	</div>
	<div style="clear:both"></div>
<!--content ends -->
<!--footer begins -->
	</div>
</div>

<div id="footer">
<p>Copyright &copy; 2011 , All right's reserved by <a href="http://www.jibika.tk">Jibika.TK</a></p>
<p>Designed by <a href="http://www.jibika.tk" title="shuvobd">Jibika.TK</a> || Total: 
  <?php include('count.php'); ?>
</p>
</div>
</div>
<!-- footer ends-->
</body>
</html>
