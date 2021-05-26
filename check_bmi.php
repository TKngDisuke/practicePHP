function bmi ($height,$mass)
{
    $height=$height/100;
    $mass=%mass/($height*$height);
    return $mass;
}
$bmi= bmi(170,50);
if($bmi<18.5){
    print "瘦せすぎです";
}
else if($bmi>25){
    print"太りすぎです";
}
else{
    print"普通です";
}
