<?php
/*
simple counter by shuvo
mail at shadikurbd@mail.com
*/
$file = 'counter.txt';
$fp = fopen($file, 'r') or die("Coundn't read...");
$count = fread ($fp, filesize ("$file"));
fclose($fp);
$count++;
$fp = fopen("$file","w");
fwrite($fp, $count);
fclose($fp);
echo "$count times";
?>