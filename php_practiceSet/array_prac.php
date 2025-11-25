<?php
$color=["red","green","blue","yellow","white"];
print_r($color);
echo "<hr>";
echo "the color count is" .count($color);
echo "<hr>";
$color[]="black";
echo "the color count is" .count($color)."</br>";

echo "<hr>";

array_pop($color);
echo "the count is".count($color)."</br>";

foreach($color as $color){
    echo $color."</br>";
}

echo "<hr>";
?>


<?php
$number=[20,45,12,14,22];
sort($number);
echo "assending order is </br>";
foreach($number as $number){
    echo $number."</br>";
}
echo "<hr>"
?>
<?php
$number=[20,45,12,14,22];
rsort($number);
echo "decending order is </br>";
foreach($number as $number){
    echo $number."</br>";
}
?>