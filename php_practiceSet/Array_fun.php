
<?php
//array chunk.....
$arr = ["a", "b", "c", "d", "e"];
$result = array_chunk($arr, 3);
echo "<pre>";
print_r($result);
?>


<?php
echo "<hr>";
//array combine....
$key=["name","age","marks","city"];
$value=["Ritwik",22,756,"kolkata"];
$result=array_combine($key,$value);
echo "<pre>";
print_r($result);

?>
<?php
echo "<hr>";
//is_array.....
$num=[12,45,56,34,24];
$a="hello";
var_dump(is_array($num));
var_dump(is_array($a));


?>
<?php
//array merge.....
echo "<hr>";
$a=["mango","apple","stroberry"];
$b=["grapes","bananna"];
$c=["apple"];
$result=array_merge($a,$b,$c);
print_r($result);

?>

<?php
//array_merge_recursive......
echo "<hr>";
$a=["color"=>"red", "size"=>"round"];
$b=["color"=>"blue","size"=>"square"];
echo "<pre>";
print_r(array_merge_recursive($a,$b));

?>
<?php
//array_push....
echo "<hr>";
$a=["mango","apple","bananna"];
array_push($a,"stroberry","pineapple");
print_r($a);
?>
<?php
//array_pop.....
echo "<hr>";
$a=["mango","apple","pineapple","strobery"];
array_pop($a);
print_r($a);
?>
<?php
//array replace......
echo "<hr>";
$a=["a"=>"red","b"=>"green","c"=>"blue"];
print_r($a);
$b=["a"=>"white"];
print_r(array_replace($a,$b));

?>
<?php
//array reverse......
echo "<hr>";
$a=["apple","mango","stroberry","pineapple"];
print_r(array_reverse($a));

?>

<?php
//array slice.....
echo "<hr>";
$a=["a","b","c","d","e"];
print_r(array_slice($a,1,3));
?>

<?php
echo "<hr>";
//array splice......
$a=["a","b","c","d"];
array_splice($a,1,2,["x","y"]);
print_r($a);
?>
<?php
echo "<hr>";
//array sort.....Assending order...choto to boro....
$num=[23,34,12,45,22];
sort($num);
print_r($num);
?>

<?php
echo "<hr>";
//array rsort.....Dessending order...boro to choto....
$num=[23,34,12,45,22];
rsort($num);
print_r($num);
?>

<?php
echo "<hr>";
//compact....variable to array....
$name="ritwik";
$age=27;
$result=compact("name","age");
print_r($result);

?>

<?php
// size of.....
echo "<hr>";
$a=["a","b","c","d"];
echo sizeof($a);
echo "</br>";
echo count($a);
?>
