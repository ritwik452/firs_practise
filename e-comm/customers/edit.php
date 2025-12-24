<?php
include("../database/connection.php");
$id = intval($_GET['id']);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $email = mysqli_real_escape_string($conn,$_POST['email']);
    $city = mysqli_real_escape_string($conn,$_POST['city']);
    mysqli_query($conn,"UPDATE customers SET name='$name', email='$email', city='$city' WHERE id=$id");
    header("Location: index.php"); exit;
}
$res = mysqli_query($conn,"SELECT * FROM customers WHERE id=$id");
$row = mysqli_fetch_assoc($res);
?>
<!doctype html><html><head><title>Edit Customer</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head><body>
<div class="container mt-4">
  <h2>Edit Customer</h2>
  <form method="post">
    <div class="form-group"><label>Name</label><input name="name" class="form-control" value="<?= htmlspecialchars($row['name']) ?>" required></div>
    <div class="form-group"><label>Email</label><input name="email" class="form-control" value="<?= htmlspecialchars($row['email']) ?>" required></div>
    <div class="form-group"><label>City</label><input name="city" class="form-control" value="<?= htmlspecialchars($row['city']) ?>"></div>
    <button class="btn btn-primary">Update</button>
    <a class="btn btn-secondary" href="index.php">Back</a>
  </form>
</div>
</body></html>