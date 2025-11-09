<?php
$hostname="localhost";
$username="root";
$password="";
$dbname="demo";
$conn=mysqli_connect($hostname,$username,$password,$dbname);
if (!$conn) {
    die("connection error".mysqli_connect_error());
}else {
    
}
?>