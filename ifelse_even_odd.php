<?php

$num=63;
if ($num%2==0) {
    echo $num." is a even number";
}else {
    echo $num. " odd number";
}

echo "<hr>";

$age=20;
if ($age>=18) {
    echo "u can vote";
}else {
    echo " u can't vote";
}

echo "<hr>";

$a=10;
$b=20;
if ($a>$b) {
    echo $a." is gretter ".$b;
}else {
    echo $a. "is less than".$b;
}

echo "<hr>";

$number=55;
if ($number%5==0 && $number%11==0) {
    echo $number." is divisible 5 and 11";
}else {
    echo $number." is not divisible 5 and 11";
}

echo "<hr>";

$year=2028;
if ($year%4==0) {
    echo $year." is leapyear";
}else {
    echo $year. "not leapyear";
}

echo "<hr>"

?>