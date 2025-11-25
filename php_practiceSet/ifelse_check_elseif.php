<?php

$num=79;
if ($num>0) {
    echo $num . " is positive number";
}elseif ($num<0) {
    echo $num. " is negetive number";
}else {
    echo $num. " the number is 0";
}

echo "<hr>";

$number=30;
if ($number%2==0) {
    echo $number. " the number is even <br>";
}else{
    echo $number ." the number is odd";
}
if ($number%3==0) {
    echo $number. " the number Divisible by 3";
}
?>