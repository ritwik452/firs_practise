<?php
include("../database/connection.php");
$customers = mysqli_query($conn,"SELECT * FROM customers");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $customer_id = intval($_POST['customer_id']);
    $order_date = mysqli_real_escape_string($conn,$_POST['order_date']);
    $total = floatval($_POST['total_amount']);
    mysqli_query($conn,"INSERT INTO orders (customer_id, order_date, total_amount) VALUES ($customer_id,'$order_date',$total)");
    header("Location: index.php"); exit;
}
?>
<!doctype html><html><head><title>Add Order</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"></head><body>
<div class="container mt-4"><h2>Add Order</h2>
<form method="post">
  <div class="form-group"><label>Customer</label><select name="customer_id" class="form-control" required><?php while($c=mysqli_fetch_assoc($customers)): ?><option value="<?= $c['id'] ?>"><?= htmlspecialchars($c['name']) ?></option><?php endwhile; ?></select></div>
  <div class="form-group"><label>Order Date</label><input type="date" name="order_date" class="form-control" required></div>
  <div class="form-group"><label>Total Amount</label><input type="number" step="0.01" name="total_amount" class="form-control" required></div>
  <button class="btn btn-primary">Save</button> <a class="btn btn-secondary" href="index.php">Back</a>
</form></div></body></html>