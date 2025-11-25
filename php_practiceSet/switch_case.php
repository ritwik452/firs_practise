<?php
$marks = 91;

switch ($marks) {
    case ($marks>= 30 && $marks<=45):
        echo "Grade C";
        break;
    case ($marks>45 && $marks<=60):
        echo "Grade B";
        break;
    case ($marks> 60 && $marks<=80):
        echo "Grade A";
        break;
    case ($marks>80 && $marks<=90):
        echo "Grade A+";
        break;
    case ($marks>=91 && $marks<=100):
        echo "Excellent";
        break;
    default:
        echo "Invalid marks";
}
?>
