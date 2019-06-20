<?php
include "config.php";
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
if ($check['c'] > 0) {echo '&#187; Username already exists!<br/>'; }
if (empty($uid) || strlen($uid) <4 && strlen($uid) >15) { echo '&#187; Username invalid!<br/>'; }
if (empty($pwd) || strlen($pwd) <4 && strlen($pwd) >15 || !($pwd == $cpwd)) { echo '&#187; Password invalid!<br/>'; }
if (empty($valid) || !($valid == $code)) { echo '&#187; Validation code invalid!<br/>'; }

if (!($check['c'] > 0) && (strlen($uid) >3)&& (strlen($uid) < 16) && (strlen($pwd) >3) && (strlen($pwd) < 16) && !($uid =="") && !($pwd =="") && ($pwd==$cpwd) && ($valid == $code)) {
mysql_query("insert into jibika_user(username,password,sex,email,regdate,ua,sid) values('$uid','$pwd','$sex','$mail','$now','$ua','$ext')");
echo "<b>Registration Successful!</b><br/>Thank you for registering to support us.<br/>";
echo "Username : <b>$uid</b> <br/>";
echo "Password : <b>$pwd</b> <br/>";
echo "Login to your account and update your profile!<br/>";
}
?>