<?php
session_start();
if ($_SESSION['role'] != 'user') die("Access Denied");
include ("database/connection.php");

$result = mysqli_query($conn, "SELECT * FROM events");

while($row = mysqli_fetch_assoc($result)){
    echo $row['title']." | ".$row['event_date']." | ₹".$row['price'];
    echo " <a href='book_event.php?event_id=".$row['id']."'>Book</a><br>";
}
?>
