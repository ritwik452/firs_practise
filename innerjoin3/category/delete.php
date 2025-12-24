<?php

include("../database/connection.php");
$query="SELECT * FROM category WHERE c_id='$c_id'";
$result=mysqli_query($conn,$query);
if ($result) {
    echo "<script> alert('are u sure u want to delete'); window.location='view.php'; </script>";
}else {
    echo "feiled";
}

?>