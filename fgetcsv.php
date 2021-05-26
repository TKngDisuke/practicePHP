<?php

$handle =fopen($bbs_file,"r");
while($csv=fgetcsv($handle)){
    $record["name"]=$csv[0];
    $record["comment"]=$csv[1];
    $record["time"]=$csv[2];
    $records[]=$record;
}

fclose($handle);

var_dump($records);
?>