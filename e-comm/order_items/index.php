<?php
include("../database/connection.php");
$res = mysqli_query($conn,"SELECT oi.*, o.customer_id, p.name as product_name, o.order_date FROM order_items oi LEFT JOIN products p ON oi.product_id=p.id LEFT JOIN orders o ON oi.order_id=o.id");
?>
<!doctype html><html><head><title>Order Items</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"></head><body>
<div class="container mt-4">
<h2>Order Items <a class="btn btn-sm btn-primary" href="create.php">Add</a> <a class="btn btn-sm btn-secondary" href="../index.php">Back</a></h2>
<table class="table table-bordered"><tr><th>ID</th><th>Order ID</th><th>Product</th><th>Qty</th><th>Price</th><th>Actions</th></tr>
<?php while($row = mysqli_fetch_assoc($res)): ?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['order_id'] ?></td>
<td><?= htmlspecialchars($row['product_name']) ?></td>
<td><?= $row['qty'] ?></td>
<td><?= $row['price'] ?></td>
<td>
  <a class="btn btn-sm btn-info" href="edit.php?id=<?= $row['id'] ?>">Edit</a>
  <a class="btn btn-sm btn-danger" href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete?')">Delete</a>
</td>
</tr>
<?php endwhile; ?>
</table></div></body></html>