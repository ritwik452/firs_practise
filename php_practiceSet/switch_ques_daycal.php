<?php

$day=6;
switch ($day) {
    case 1:
        echo "Monday";
        break;
    case 2:
        echo "Tuesday";
        break;
    case 3:
        echo "Wednesday";
        break;
    case 4:
        echo "Thirsday";
        break;
    case 5:
        echo "Friday";
        break;
    case 6:
        echo "Saturday";
        break;
    case 7:
        echo "Sunday";
        break;
    default:
        echo "Invalied";

}
echo "<hr>";
?>


<?php

$marks=85;

switch($marks){
    case($marks>=81 && $marks<=100):
        echo "Grade: A+";
        break;
    case($marks>=61 && $marks<=80):
        echo "Grade: A";
        break;
    case($marks>=46 && $marks<=60):
        echo "Grade: B";
        break;
    case($marks>=30 && $marks<=45):
        echo "Grade: C";
        break;
    default:
        echo "Invalied number";
}
echo "<hr>";
?>

<?php
$color="red";
switch ($color) {
    case "red":
        echo "Please stop the car";
        break;
    case "green":
        echo "please don't stop car";
        break;
    case "yollow":
        echo "Wait red light near";
        break;
    default:
        echo "invailed";
}
echo "<hr>";
?>


<?php
$ch="e";
switch($ch){
    case ($ch=="a" || $ch=="e" || $ch=="i" || $ch=="o" || $ch=="u"
    || $ch=="A" || $ch=="E" || $ch=="I" || $ch=="O" || $ch=="U"):
    echo "Vowel";
    break;
    default:
    echo "consonent";
}

echo "<hr>";

?>


