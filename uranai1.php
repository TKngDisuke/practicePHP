
<?php
$uranai[]="大吉";
$uranai[]="中吉";
$uranai[]="小吉";
$uranai[]="末吉";
$uranai[]="大凶";
$min=0;
$max=count($uranai)-1;

$key=mt_rand($min,$max);
print "あなたの運勢は".$uranai[$key]."です！";

?>