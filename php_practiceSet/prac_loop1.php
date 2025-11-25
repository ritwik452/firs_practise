<?php
$num = 12345;
$count = 0;
$temp = $num;

while ($temp != 0) {
    $temp = (int)($temp / 10);
    $count++;
}

echo "The count of $num is = " . $count;
echo "<hr>";
?>
