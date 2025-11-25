<?php
$fruits=["mango","guava","bananna","apple","straberry"];
print_r($fruits);
echo "</br>";

foreach($fruits as $fruit){
 echo $fruit."</br>";
}
echo "<hr>";
?>

<?php
$color=["red","blue","yellow","green","black"];
echo $color[2];
echo "<hr>";
?>
<?php
$color=["red","blue","yellow","green","black"];
echo count($color);
echo "<hr>";

?>

<?php
$color=["red","blue","yellow","green","black"];
$color[]="orange";
print_r($color);
echo "<hr>";
?>
<?php
$color=["red","blue","yellow","green","black"];
unset($color[4]);
print_r($color);
echo "<hr>";
?>



