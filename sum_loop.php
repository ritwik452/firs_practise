<?php
$sum=0;
for($i=1;$i<=30;$i++){
    $sum=$sum+$i;
}
echo "sum of 1-30 number is ----".$sum;
echo "<hr>";
?>

<?php
echo "<hr>";
for ($i=10; $i>=1; $i--){ 
    echo $i." ";
}

echo "<hr>";
?>

<?php
for($i=1;$i<=30;$i++){
    if ($i%2==0) {
        echo $i ."</br>";
    }
}
echo "<hr>";
?>
<?php
$num=5;
$fact=1;
for($i=1;$i<=5;$i++){
    $fact=$fact*$i;
}
echo "the factorial of ".$num." is :--".$fact;
echo "<hr>";
?>

<?php

$number=[1,2,3,4,5,6,7,8,9,10];
for ($i=count($number)-1; $i >=0 ; $i--) { 
    echo $number[$i]." ";
}


echo "<hr>";
?>



<?php

$num=5;
for ($i=1; $i <=10 ; $i++) { 
    echo "$num*$i=".($num*$i)."</br>";
}

echo "<hr>";

?>



<?php
$numbers=[
    [1,2,3],
    [4,5,6],
    [7,8,9],
];
for ($i=0; $i<count($numbers); $i++) { 
    for ($j=0; $j<count($numbers[$i]) ; $j++) { 
        echo $numbers[$i][$j]." ";
    }
    
    echo "<br>";
}
echo "<hr>";

?>

    <?php
    $employees=[
        ["name"=>"ritwik","salary"=>20000,"depertment"=>"developer"],
        ["name"=>"ram","salary"=>46578,"depertment"=>"developer"],
        ["name"=>"raj","salary"=>22303,"depertment"=>"developer"],
    ];
    for ($i=0; $i <count($employees) ; $i++) { 
        foreach($employees[$i] as $employee=>$value) { 
            echo $employee." ".$value." ";
        }
        echo "</br>";
    }

    ?>