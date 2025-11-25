<?php

//nested if;
$x=96;
$y=80;
$z=30;
if ($x>$y) {
    if ($x>$z) {
        echo $x;
    }else {
        echo $z;
    }

}else {
    if ($y>$z) {
        echo $y;
    }else {
        echo $z;
    }
}
echo "<hr>";

//only condition;

if ($x>$y && $x>$z) {
    echo $x;
}
elseif ($y>$x && $y>$z) {
    echo $y;
}else{
    echo $z;
}


echo "<hr>";


?>