<?php
include("../database/connection.php");
$id = intval($_GET['id']);
mysqli_query($conn,"DELETE FROM orders WHERE id=$id");
header("Location: index.php");
?>