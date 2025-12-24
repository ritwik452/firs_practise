<?php
include("../database/connection.php");
$orders = mysqli_query($conn,"SELECT * FROM orders");
$products = mysqli_query($conn,"SELECT * FROM products");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $order_id = intval($_POST['order_id']);
    $product_id = intval($_POST['product_id']);
    $qty = intval($_POST['qty']);
    $price = floatval($_POST['price']);
    mysqli_query($conn,"INSERT INTO order_items (order_id,product_id,qty,price) VALUES ($order_id,$product_id,$qty,$price)");
    header("Location: index.php"); exit;
}
?>
<!doctype html><html><head><title>Add Order Item</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"></head><body>
<div class="container mt-4"><h2>Add Order Item</h2>
<form method="post">
  <div class="form-group"><label>Order</label><select name="order_id" class="form-control" required><?php while($o=mysqli_fetch_assoc($orders)): ?><option value="<?= $o['id'] ?>"><?= $o['id'] ?></option><?php endwhile; ?></select></div>
  <div class="form-group"><label>Product</label><select name="product_id" class="form-control" required><?php while($p=mysqli_fetch_assoc($products)): ?><option value="<?= $p['id'] ?>"><?= htmlspecialchars($p['name']) ?></option><?php endwhile; ?></select></div>
  <div class="form-group"><label>Qty</label><input type="number" name="qty" class="form-control" required></div>
  <div class="form-group"><label>Price</label><input type="number" step="0.01" name="price" class="form-control" required></div>
  <button class="btn btn-primary">Save</button> <a class="btn btn-secondary" href="index.php">Back</a>
</form></div></body></html>