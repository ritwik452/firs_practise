<?php
$unit=120;
$bill=0;
if ($unit<=100) {
    $bill=$bill*3;
}elseif ($unit<=200) {
    $bill=(100*3)+(($unit-100)*4);
}else {
    $bill=(100*3)+(100*4)+(($unit-200)*5);
}
echo "total bil is ".$bill;

echo "<hr>";


$age=30;
$weight=50;

if ($age>=18 && $weight>=50) {
    echo "you can donate the blood";
}else{
    echo "you can not donate blood";
}
?>
