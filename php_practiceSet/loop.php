


<?php

// for("initialization";"condition";"increment/decrement"){
//     //code to be executed
// }


for($i=1;$i<=10;$i++){
    echo $i;
    echo "<br>";
}

echo "<hr>";
for($i=10;$i>=1;$i--){
    echo $i;
    echo "<br>";
}

echo "<hr>";
for($i=1;$i<=10;$i++){
    echo $i*2;
    echo "<br>";
}

//while loop

//syntax
// while("condition"){
//     //code to be executed
// }
echo "<hr>";
$i=1;
while($i<=10){
    echo $i;
    echo "<br>";
    $i++;
}

//do while loop

//syntax
// do{
//     //code to be executed
// }while("condition");
echo "<hr>";
$i=1;
do{
    echo $i;
    echo "<br>";
    $i++;
}while($i<=10);
?>