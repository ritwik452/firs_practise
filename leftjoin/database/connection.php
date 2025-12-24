<?php
$conn = mysqli_connect("localhost", "root", "", "pub");

if(!$conn){
    die("Connection failed: " . mysqli_connect_error());
}

?>