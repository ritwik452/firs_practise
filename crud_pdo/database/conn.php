<?php
$servername="localhost";
$username="root";
$password="";

try{
$conn=new PDO("mysql:host=$servername;dbname=pdo_chart",$username,$password);
}catch(PDOException $e){
    echo "Connection Failed".$e->getMessage();
}
?>