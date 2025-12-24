<?php
include("../database/connection.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $city = mysqli_real_escape_string($conn,$_POST['city']);
    mysqli_query($conn,"INSERT INTO customers (name,email,city) VALUES ('$name','$email','$city')");
    header("Location: index.php"); exit;
}
?>
<!doctype html><html><head><title>Add Customer</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head><body>
<div class="container mt-4">
  <h2>Add Customer</h2>
  <form method="post">
    <div class="form-group"><label>Name</label><input name="name" class="form-control" required></div>
    <div class="form-group"><label>Email</label><input name="email" class="form-control" required></div>
    <div class="form-group"><label>City</label><input name="city" class="form-control"></div>
    <button class="btn btn-primary">Save</button>
    <a class="btn btn-secondary" href="index.php">Back</a>
  </form>
</div>
</body></html>