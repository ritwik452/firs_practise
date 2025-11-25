<?php
include("database/connection.php");
$id=$_GET['id'];
$query="SELECT * FROM user WHERE id='$id'";
$result=mysqli_query($conn,$query);
if ($result) {
    echo "<script> alert('are u want to delete this record?'); window.location='list1.php';</script>";
}else {
    echo "Failed";
}

?>