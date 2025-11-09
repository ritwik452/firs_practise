<?php
include("database/connection.php");
$id=$_GET['id'];
$query="DELETE FROM student where id='$id'";
$result=mysqli_query($conn,$query);
if ($result) {
    header("Location:student_list.php");
}

?>