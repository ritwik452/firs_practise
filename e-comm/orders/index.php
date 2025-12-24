<?php
include("../database/connection.php");
$res = mysqli_query($conn,"SELECT orders.*, customers.name as customer_name FROM orders LEFT JOIN customers ON orders.customer_id = customers.id");
?>
<!doctype html><html><head><title>Orders</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"></head><body>
<div class="container mt-4">
<h2>Orders <a class="btn btn-sm btn-primary" href="create.php">Add</a> <a class="btn btn-sm btn-secondary" href="../index.php">Back</a></h2>
<table class="table table-bordered"><tr><th>ID</th><th>Customer</th><th>Order Date</th><th>Total Amount</th><th>Actions</th></tr>
<?php while($row = mysqli_fetch_assoc($res)): ?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= htmlspecialchars($row['customer_name']) ?></td>
<td><?= $row['order_date'] ?></td>
<td><?= $row['total_amount'] ?></td>
<td>
  <a class="btn btn-sm btn-info" href="edit.php?id=<?= $row['id'] ?>">Edit</a>
  <a class="btn btn-sm btn-danger" href="delete.php?id=<?= $row['id'] ?>" onclick="return confirm('Delete?')">Delete</a>
</td>
</tr>
<?php endwhile; ?>
</table></div></body></html>