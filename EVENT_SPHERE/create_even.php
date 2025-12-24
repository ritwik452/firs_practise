<?php
include("database/connection.php");
session_start();
if ($_SESSION['role'] != 'admin') {
    die("Access Denied");
}

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $date  = $_POST['event_date'];
    $price = $_POST['price'];
 $query="INSERT INTO events (title,event_date,price)
          VALUES ('$title','$date','$price')";
   $result= mysqli_query($conn, $query);
   if ($result) {
    echo "Event Created Successfully";
   }
    
}
?>

<h2>Create Event</h2>
<form method="post">
    <input type="text" name="title" placeholder="Event Title" required><br>
    <input type="date" name="event_date" required><br>
    <input type="number" name="price" placeholder="Price" required><br>
    <button type="submit" name="submit">Create Event</button>
</form>
