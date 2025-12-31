<?php
$company = [
    "HR" => ["John", "Mary"],
    "IT" => ["Alice", "Bob", "Charlie"],
    "Finance" => ["David", "Emma"]
];
foreach($company as $depertment=>$employees){
    echo $depertment."<br> ";
    foreach($employees as $employee){
        echo $employee."<br>";
    }
}
?>