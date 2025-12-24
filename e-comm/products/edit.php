<?php
include("../database/connection.php");
$id = intval($_GET['id']);
$cats = mysqli_query($conn,"SELECT * FROM categories");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = mysqli_real_escape_string($conn,$_POST['name']);
    $cat = intval($_POST['category_id']);
    mysqli_query($conn,"UPDATE products SET name='$name', category_id=$cat WHERE id=$id");
    header("Location: index.php"); exit;
}
$res = mysqli_query($conn,"SELECT * FROM products WHERE id=$id");
$row = mysqli_fetch_assoc($res);
?>
<!doctype html><html><head><title>Edit Product</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"></head><body>
<div class="container mt-4"><h2>Edit Product</h2>
<form method="post">
  <div class="form-group"><label>Name</label><input name="name" class="form-control" value="<?= htmlspecialchars($row['name']) ?>" required></div>
  <div class="form-group"><label>Category</label>
    <select name="category_id" class="form-control" required>
      <?php while($c = mysqli_fetch_assoc($cats)): ?>
        <option value="<?= $c['id'] ?>" <?= $c['id']==$row['category_id']?'selected':'' ?>><?= htmlspecialchars($c['category_name']) ?></option>
      <?php endwhile; ?>
    </select>
  </div>
  <button class="btn btn-primary">Update</button>
  <a class="btn btn-secondary" href="index.php">Back</a>
</form></div></body></html>