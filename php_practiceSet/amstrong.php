<?php
$num=143;
$sum=0;
$temp=$num;
while ($temp!=0) {
    $rem=$temp%10;
    $sum=$sum+($rem*$rem*$rem);
    $temp=(int)($temp/10);

}if ($sum==$num) {
    echo "Amstrong number";
}else {
    echo "Not Amstrong number";
}

?>