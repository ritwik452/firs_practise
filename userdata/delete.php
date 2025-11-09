<?php
include("database/connection.php");
$id=$_GET['id'];
$query="DELETE FROM user where id='$id'";
$result=mysqli_query($conn,$query);
if ($result) {
    ?>
    <script>
        alert("ARE U WANT TO DELETE");
        window.location="userlist.php";
    </script>
    <?php

}else {
    echo "Error";
}

?>