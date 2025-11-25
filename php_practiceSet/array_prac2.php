<?php
$fruits=array(
    array("apple"=>"sweet"),
    array("mango"=>"tok"),
    array("lanka"=>"jhal"),
);
print_r($fruits);
echo "</br>";

foreach($fruits as $fruit){
    foreach ($fruit as $name => $test) {
        echo "name :" .$name. "---------test: ".$test."</br>";
    }
   
};
echo "<hr>";
?>