
<?php

$ch = 'b';

if ($ch == 'a' || $ch == 'e' || $ch == 'i' || $ch == 'o' || $ch == 'u' ||
    $ch == 'A' || $ch == 'E' || $ch == 'I' || $ch == 'O' || $ch == 'U') {
    echo $ch . " is a vowel";
} else {
    echo $ch . " is a consonant";
}
echo "<hr>";


$num=21;
if ($num%3==0 && $num%7==0) 
{
    echo $num."is multiple of both 3 or 7";
}elseif ($num%3==0) {
    echo $num. " is multiple of 3";
}elseif ($num%7==0) {
    echo $num. " is multiple 7";
}else {
    echo $num. " is not multiple by both 3 or 7";
}

    

?>

