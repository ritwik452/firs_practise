<?php
include("../database/connection.php");
$cats = mysqli_query($conn,"SELECT * FROM categories");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $cat = intval($_POST['category_id']);
    mysqli_query($conn,"INSERT INTO products (name,category_id) VALUES ('$name',$cat)");
    header("Location: index.php"); exit;
}
?>
<!doctype html><html><head><title>Add Product</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"></head><body>
<div class="container mt-4"><h2>Add Product</h2>
<form method="post">
  <div class="form-group"><label>Name</label><input name="name" class="form-control" required></div>
  <div class="form-group"><label>Category</label>
    <select name="category_id" class="form-control" required>
      <?php while($c = mysqli_fetch_assoc($cats)): ?>
        <option value="<?= $c['id'] ?>"><?= htmlspecialchars($c['category_name']) ?></option>
      <?php endwhile; ?>
    </select>
  </div>
  <button class="btn btn-primary">Save</button>
  <a class="btn btn-secondary" href="index.php">Back</a>
</form></div></body></html>