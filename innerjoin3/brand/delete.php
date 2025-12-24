<?php

include("../database/connection.php");
$query="SELECT * FROM brand WHERE b_id='$b_id'";
$result=mysqli_query($conn,$query);
if ($result) {
    echo "<script> alert('are u sure u want to delete'); window.location='view.php'; </script>";
}else {
    echo "felaid";
}

?>