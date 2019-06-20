<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<?php
include "config.php";
if (strlen($jibikauser) < 1) {
sess();
}
else {
$employer = ucwords($jibikauser);
$puser = $_REQUEST['puser'];
$xp = ucwords($puser);
$data = mysql_fetch_assoc(mysql_query("select * from jibika_user where username = '$puser'"));
$rn = $data['realname'];
$sex = ucwords($data['sex']);
$b = $data['birthday'];
$d = $data['bmonth'];
$y = $data['byear'];
$email = $data['email'];
$mobile = $data['mobile'];
$division = $data['division'];
$district = $data['district'];
$police_station = $data['thana'];
$join = $data['regdate'];
$rank = $data['rank'];
$photo = $data['photo'];
$password = $data['password'];
$user_agent = $data['ua'];
$ip_addr = $data['ip'];

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
#Layer7 {
	position:absolute;
	left:293px;
	top:357px;
	width:117px;
	height:140px;
	z-index:1;
}
#Layer8 {
	position:absolute;
	left:405px;
	top:357px;
	width:320px;
	height:281px;
	z-index:2;
}
#Layer9 {
	position:absolute;
	left:508px;
	top:355px;
	width:326px;
	height:288px;
	z-index:2;
}
.style11 {color: #CCFF00; font-weight: bold; }
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
	  <h4 align="left"><span class="style11">Basic Information :</span><br />
        </h4>
	  
	    <div align="left">
	      <table width="326" height="287" border="1">
            <tr>
              <td><div align="center">Real Name </div></td>
              <td><div align="center">$rn</div></td>
            </tr>
            <tr>
              <td><div align="center">Sex</div></td>
              <td><div align="center">$sex</div></td>
            </tr>
            <tr>
              <td><div align="center">Birthday</div></td>
              <td><div align="center">$b-$d-$y</div></td>
            </tr>
            <tr>
              <td><div align="center">Email</div></td>
              <td><div align="center">$email</div></td>
            </tr>
            <tr>
              <td><div align="center">Phone No </div></td>
              <td><div align="center">$mobile</div></td>
            </tr>
            <tr>
              <td><div align="center">Division</div></td>
              <td><div align="center">$division</div></td>
            </tr>
            <tr>
              <td><div align="center">District</div></td>
              <td><div align="center">$district</div></td>
            </tr>
            <tr>
              <td><div align="center">Police Station </div></td>
              <td><div align="center">$police_station</div></td>
            </tr>
            <tr>
              <td><div align="center">Join Date </div></td>
              <td><div align="center">$join</div></td>
            </tr>
            <tr>
              <td><div align="center">Rank</div></td>
              <td><div align="center">$rank</div></td>
            </tr>
                      </table>
	    </div>
	    <p align="left" class="style8">&nbsp;</p>
    <p align="left" class="style8"><strong><br />
shuvo;
    if (($jibikauser == $owner1 || $jibikauser == $owner2) && !($puser == $owner1)) {
echo <<< shuvo
<br />
<br />
    </strong><span class="style11">Official Information : </span></p>
    <table width="330" height="77" border="1">
      <tr>
        <td width="156"><div align="center">Password</div></td>
        <td width="158"><div align="center">$password</div></td>
      </tr>
      <tr>
        <td><div align="center">IP Address </div></td>
        <td><div align="center">$ip_addr <a href="http://www.ipchecker.com/?ip=$ip_addr">Check</a></div></td>
      </tr>
      <tr>
        <td><div align="center">User Agent </div></td>
        <td><div align="center">$user_agent</div></td>
      </tr>
    </table>
    <p align="left" class="style8"><strong>
	<br/><a href="delete.php?sid=$sid&amp;act=delete_account">&#187; Delete this account</a><br/>
	<a href="account.php?sid=$sid&amp;act=e_ac&amp;puser=$puser">&#187; Edit this account</a>
shuvo;
}
echo <<< shuvo
<br />
      <br />
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
			<h3>Profile of $xp </h3>
			<p>&nbsp;</p>
			<p align="center"><span class="style8"><img src="$photo" alt="$puser" width="111" height="148" border="1" /></span></p>
			<ul>
              <li><span class="style5"><a href="photo.php?sid=$sid&amp;task=pre_upload">Change Photo</a></span></li>
			  <li><a href="inbox.php?sid=$sid&amp;puser=$puser">Send a message</a></li>
		  </ul>
			<p align="center">&nbsp;</p>
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