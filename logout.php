<?php
include "config.php";
$out = md5('S1x2a3d4i5kaueR');
mysql_query("update jibika_user set sid='$out' where sid='$session'");
header('Location: index.php?act=logout');
?>