<?php
include("../database/connection.php");
$u_id=$_GET['u_id'];
$query="DELETE  FROM user WHERE u_id='$u_id'";
$result=mysqli_query($conn,$query);
if ($result) {
    echo "<script> alert('are u sure u want to delete?'); window.location='view.php'; </script>";
}


?>