<?php
include("../database/connection.php");
$id = intval($_GET['id']);
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = mysqli_real_escape_string($conn,$_POST['category_name']);
    mysqli_query($conn,"UPDATE categories SET category_name='$name' WHERE id=$id");
    header("Location: index.php"); exit;
}
$res = mysqli_query($conn,"SELECT * FROM categories WHERE id=$id");
$row = mysqli_fetch_assoc($res);
?>
<!doctype html><html><head><title>Edit Category</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head><body><div class="container mt-4">
<h2>Edit Category</h2>
<form method="post">
  <div class="form-group"><label>Category Name</label><input name="category_name" class="form-control" value="<?= htmlspecialchars($row['category_name']) ?>" required></div>
  <button class="btn btn-primary">Update</button>
  <a class="btn btn-secondary" href="index.php">Back</a>
</form>
</div></body></html>