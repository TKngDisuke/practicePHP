<?php
$bbs_file= "bbs.csv";

$handle =fopen($bbs_file,"a");

$csv[]="ひよこ";
$csv[]="ぴよぴよ";
$csv[]=time();


$result=fputcsv($handle,$csv);

fclose($handle);
?>