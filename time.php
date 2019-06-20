<?php
//------------> GET TIME THE MESSAGE WAS SENT
if (!function_exists('gettime')) {
function gettime($time){
$num = $time/86400;
$days = intval($num);
$num2 = ($num - $days)*24;
$hours = intval($num2);
$num3 = ($num2 - $hours)*60;
$mins = intval($num3);
$num4 = ($num3 - $mins)*60;
$secs = intval($num4);
$months = intval($time/(86400*30));
if(($months == 0) and ($days==0) and ($hours==0) and ($mins==0))
{
return "$secs seconds";
} 
elseif(($months == 0) and ($days==0) and ($hours==0))
{
return "$mins mins, $secs seconds";
}elseif(($months == 0) and ($days==0))
{
return "$hours hours, $mins mins, $secs seconds";
}elseif($months==0)
{
return "$days days, $hours hours, $mins mins, $secs seconds";
} else {
return "$months months, ".($days-($months*30))." days, $hours hours, $mins mins, $secs seconds";
}}}
//------------> GET TIME
if (!function_exists('gettimemsg')) {
function gettimemsg($sec)
{
  $ds = floor($sec/60/60/24);
  if($ds > 0)
  {
    return "$ds days";
  }
  $hs = floor($sec/60/60);
  if($hs > 0)
  {
    return "$hs hours";
  }
  $ms = floor($sec/60);
  if($ms > 0)
  {
    return "$ms minutes";
  }
  return "$sec seconds";}
}
?>