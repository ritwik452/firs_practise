<?php
for ($i=1; $i <=10 ; $i++) { 
    echo $i."</br>";
}
echo "<hr>";
?>

<?php
$i=1;
while ($i<=20) {
    if ($i%2==0) {
        echo "Even Number is = ".$i."</br>";
    }
   $i++;
}
echo "<hr>";
?>

<?php
$sum=0;
for ($i=1; $i<=20 ; $i++) { 
    if ($i%2==0) {
        $sum=$sum+$i;
    }

}
echo "the sum of all even number is = ".$sum;
echo "<hr>";
?>

<?php
$i=10;
do {
    echo $i."</br>";
    $i--;

} while ($i >= 1);
echo "<hr>";
?>

<?php
for ($i=1; $i <=50 ; $i++) { 
    if ($i%2==1) {
        echo $i."</br>";
    }
}
echo "<hr>";

?>

<?php
$fact=1;
for ($i=1; $i <=5 ; $i++) { 
    $fact=$fact*$i;
}
echo "The Factorial number is= ".$fact;
echo "<hr>";
?>
<?php
for ($i=1; $i <=5 ; $i++) { 
    for ($j=1; $j <=$i ; $j++) { 
        echo "*";
    }
    echo "</br>";
}
echo "<hr>";
?>

<?php
$sum=0;
for ($i=1; $i <=10 ; $i++) { 
    $sum=$sum+$i;
}
echo "The sum of First 10 Natural Number is = ".$sum;
echo "<hr>";

?>
<?php
$num1=0;
$num2=1;
echo "Fibanocci Series is= "." ";

for ($i=1; $i <=10 ; $i++) { 
    echo $num1." "; //0
    $c=$num1+$num2; //0+1=1;
    $num1=$num2;    //0=1;
    $num2=$c;    // 1=0+1;

}
echo "<hr";
?>



