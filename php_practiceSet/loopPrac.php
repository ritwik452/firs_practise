<?php
for($i=1;$i<=10;$i++){
    echo $i." ";
}
echo "<hr>";
?>

<?php
for ($i=10; $i >=1 ; $i--) { 
    echo $i." ";
}
echo "<hr>";
?>

<?php
for ($i=1; $i <=50 ; $i++) { 
    if ($i%2==0) {
        echo $i."  ";
    }
}
echo "<hr>";
?>

<?php
for ($i=1; $i <=50 ; $i++) { 
    if ($i%2==1) {
        echo $i."  "; 
    }
}
echo "<hr>";
?>

<?php
$sum=0;
for ($i=1; $i <=100 ; $i++) { 
    $sum=$sum+$i;
}
echo "sum of 1-100 number of: ".$sum;

echo "<hr>";
?>

<?php
$num=7;
for ($i=1; $i <=10 ; $i++) { 
    echo "$num*$i =".$num*$i."</br>";
}
echo "<hr>";
?>


<?php
$n=0;
$n1=1;
echo $n." ".$n1." ";
for ($i=3; $i <=10 ; $i++) { 
    $n2=$n+$n1;
    echo $n2 . "  ";
    $n=$n1;
    $n1=$n2;

}

echo "<hr>";
?>

<?php

for ($i=1; $i <=5 ; $i++) { 
    for ($j=$i; $j>=1 ; $j--) { 
        echo $j." ";
    }echo "</br>";
}

echo "<hr>";

?>


<?php

for ($i=1; $i <=5 ; $i++) { 
    for ($j=1; $j <=$i ; $j++) { 
        echo $j." ";
    }echo "</br>";
}
echo "<hr>";
?>

<?php
for ($i=5; $i >=1 ; $i--) { 
    for ($j=1; $j <=$i ; $j++) { 
        echo $j." ";
    }
    echo "</br>";
}
echo "<hr>";
?>

<?php
for ($i=5; $i>=1 ; $i--) { 
    for ($j=1; $j <=$i ; $j++) { 
        echo $i." ";
    }
    echo "</br>";
}
echo "<br>";

?>