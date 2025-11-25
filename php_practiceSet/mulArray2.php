<?php

$contacts = array(
    array("name" => "Alice",   "phone" => "123-456-7890",    "email" => "alice@example.com"),
    array("name" => "Bob",     "phone" => "987-654-3210",    "email" => "bob@example.com"),
    array("name" => "Charlie", "phone" => "555-123-4567",    "email" => "charlie@example.com"),
    array("name" => "Diana",   "phone" => "999-888-7777",    "email" => "diana@example.com"),
);

foreach($contacts as $contacts){
    echo "user name ". $contacts["name"]."</br>";
    echo "user phone ". $contacts["phone"]."</br>";
    echo "user email ". $contacts["email"]."</br>";
    echo "<hr>";
}

?>