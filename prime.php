<?php
//check prime or not;

$num=20;
$count=0;
for ($i=1; $i <=$num ; $i++) { 
    if ($num%$i==0) {
        $count++;
    }
}
if ($count==2) {
    echo $num." Is prime number";
}else {
    echo $num. " Not Prime number";
}
echo "<hr>";
?>

// 1-100 prime number;

<?php

for ($i=2; $i <=100 ; $i++) { 
    $count=0;
    for ($j=1; $j<=$i ; $j++) { 
        if ($i%$j==0) {
            $count++;
        }
    }
if ($count==2) {
    echo $i." ";
 }
}
?>