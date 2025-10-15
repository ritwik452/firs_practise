<?php

$marks=59;
switch ($marks) {
    case ($marks<=100 && $marks>=90):
        echo "excellent";
        break;
    case ($marks<=89 && $marks>=80):
        echo "grade a+";
        break;
    case ($marks<=79 && $marks>=60):
         echo "grade a";
            break;
    case ($marks<=59 && $marks>=45):
        echo "grade b";
        break;       
    case ($marks<=44 && $marks>=35):
        echo "grade c";
        break;
        default:
           echo "Invailed";
    
}

?>