<?php
$numberss = [12, 5, 8, 9, 20, 25, 30];
$count=0;
foreach ($numberss as $n) {
    if($n%2==0){
        $count++;
    }
}
echo $count;
echo "<hr>";
?>

<?php
$students = ["Riya", "Amit", "Sourav", "Neha"];
foreach($students as $student)
         echo "Student:-".$student."</br>";
        echo "<hr>";
?>
<?php
$person = ["Name" => "Ritwik", "Age" => 22, "City" => "Kolkata"];
foreach ($person as $key => $value) {
    echo $key.":".$value."</br>";
}
echo "<hr>";
?>
<?php
$data = [
    "Fruits" => ["Apple", "Banana", "Mango"],
    "Vegetables" => ["Carrot", "Potato", "Spinach"]
];
foreach ($data as $category =>$fff) {
    echo "<b> $category</b>".":"."</br>";
    foreach ($fff as $f) {
        echo $f."</br>";
    }
}
echo "<hr>";
?>

<?php
$numbers = [12, 45, 7, 89, 23, 56, 90, 34];
$max=$numbers[0];
 foreach ($numbers as $num) {
    if ($num>$max) {
        $max=$num;
    }
 }
 echo "the largest number is:-".$max;
 echo "<hr>";
?>