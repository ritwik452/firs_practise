<?php
$marks=78;
if ($marks>=90 && $marks<=100) {
    echo "Grade A+ ";
}elseif ($marks>=80 && $marks<=89) {
    echo " Grade A";
}elseif ($marks>=70 && $marks<=79) {
    echo "Grade B";
}elseif ($marks>=60 && $marks<=69) {
    echo "Grade C";
}else {
    echo "fail";
}



?>