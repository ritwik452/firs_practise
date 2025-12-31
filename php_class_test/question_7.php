<?php
$grades = [
    "John" => ["Math" => 90, "Science" => 85, "English" => 88],
  "Alice" => ["Math" => 92, "Science" => 89, "English" => 95],
 "Bob" => ["Math" => 78, "Science" => 82, "English" => 80]
];
foreach($grades as $students=>$subjects){
    echo $students."<br>";
    foreach($subjects as $subject=>$marks ){
        echo $marks."</br>";
    }
}

?>