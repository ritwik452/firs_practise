<?php
include("../database/connection.php");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = mysqli_real_escape_string($conn,$_POST['category_name']);
    mysqli_query($conn,"INSERT INTO categories (category_name) VALUES ('$name')");
    header("Location: index.php"); exit;
}
?>
<!doctype html><html><head><title>Add Category</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head><body><div class="container mt-4">
<h2>Add Category</h2>
<form method="post">
  <div class="form-group"><label>Category Name</label><input name="category_name" class="form-control" required></div>
  <button class="btn btn-primary">Save</button>
  <a class="btn btn-secondary" href="index.php">Back</a>
</form>
</div></body></html>