<?php

$num=121;
$rev=0;
$temp=$num;
while ($num!=0) {
    $rem=$num%10;
    $rev=($rev*10)+$rem;
    $num=(int)($num/10);

}if ($temp==$rev) {
    echo $temp. " is palindrome number";
}else {
    echo $temp. " is not palindrome";
}

?>


