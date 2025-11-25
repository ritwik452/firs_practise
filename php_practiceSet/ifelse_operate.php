<?php
$age= 50;
if ($age>=18) {
    echo "you are eligible to vote";
}else {
    echo "not elegible to vote";
}
echo "<hr>";


$phy_marks=79;
if ($phy_marks>=60 && $phy_marks<80) {
    echo "u carry first division mark on physics";
}
else {
    echo "u just pass";
}

echo "<hr>";


$maths=70;
$chem=60;
$physics=50;
if ($maths>=70 || $chem>=70 || $physics>=70 ) {
    echo "u r eligible for nevy form fillup";
}else {
    echo "u r not eligible";
}

echo "<hr>";



$maths=70;
$chem=80;
$physics=90;
if ($maths>=70 && $chem>=70 && $physics>=70 ) {
    echo "u r eligible for nevy form fillup";
}else {
    echo "u r not eligible";
}

echo "<hr>";

$a=20;
$b=20;
if (!($a==$b)) {
    echo "a equal to b";
}else
{
    echo "a not equal to b";
}

echo "<hr>";

$a = 10;
$b = 5;

echo "Addition= " . ($a + $b) . "<br>";     
echo "Subtrac= " . ($a - $b) . "<br>";  
echo "Multi= " . ($a * $b) . "<br>"; 
echo "Div= " . ($a / $b) . "<br>";      
echo "Mod= " . ($a % $b) . "<br>";       
 

echo "<hr>";


$a=10;
$b="10";
if ($a===$b) {
    echo "both are equal";
}else {
    echo "not equal both";
}
?>