<?php
include "config.php";
$refer = $_SERVER['HTTP_REFERER'];
$ip = $_SERVER['REMOTE_ADDR'];
$username = htmlspecialchars($_REQUEST['user']);
$password = htmlspecialchars($_REQUEST['password']);
$x = time();
$y = $x.$user ;
$z = $y.$valid ;
$sid = md5($z);
$last =$x + 6*60*60;
$ua = htmlspecialchars($_SERVER['HTTP_USER_AGENT']);
$check = mysql_fetch_assoc(mysql_query("select count(username) c from jibika_user where username='$username' and password='$password'"));
if((bool)$check['c']) {
mysql_query("update jibika_user set sid='$sid',ua='$ua',last='$last',ip='$ip' where username ='$username'");
header('Location: main.php?sid='.$sid.'');
}
else {
header('Location: '.$refer.'?attempt=error');
}
?>