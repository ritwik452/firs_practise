<?php
include("../database/connection.php");

$sql = "SELECT customers.name AS customer, products.name AS product, categories.category_name AS category, orders.order_date, order_items.qty, order_items.price
FROM customers
JOIN orders ON customers.id = orders.customer_id
JOIN order_items ON orders.id = order_items.order_id
JOIN products ON order_items.product_id = products.id
JOIN categories ON products.category_id = categories.id";
$res = mysqli_query($conn, $sql);
?>
<!doctype html><html><head><title>Join View</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"></head><body>
<div class="container mt-4"><h2>Join View (All)</h2>
<table class="table table-bordered"><tr><th>Customer</th><th>Product</th><th>Category</th><th>Order Date</th><th>Qty</th><th>Price</th></tr>
<?php while($r = mysqli_fetch_assoc($res)): ?>
<tr>
<td><?= htmlspecialchars($r['customer']) ?></td>
<td><?= htmlspecialchars($r['product']) ?></td>
<td><?= htmlspecialchars($r['category']) ?></td>
<td><?= $r['order_date'] ?></td>
<td><?= $r['qty'] ?></td>
<td><?= $r['price'] ?></td>
</tr>
<?php endwhile; ?>
</table>
<a class="btn btn-secondary" href="../index.php">Back</a>
</div></body></html>