<?php
include("../database/connection.php");
$id = intval($_GET['id']);
$customers = mysqli_query($conn,"SELECT * FROM customers");
if($_SERVER['REQUEST_METHOD']=='POST'){
    $customer_id = intval($_POST['customer_id']);
    $order_date = mysqli_real_escape_string($conn,$_POST['order_date']);
    $total = floatval($_POST['total_amount']);
    mysqli_query($conn,"UPDATE orders SET customer_id=$customer_id, order_date='$order_date', total_amount=$total WHERE id=$id");
    header("Location: index.php"); exit;
}
$res = mysqli_query($conn,"SELECT * FROM orders WHERE id=$id");
$row = mysqli_fetch_assoc($res);
?>
<!doctype html><html><head><title>Edit Order</title>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css"></head><body>
<div class="container mt-4"><h2>Edit Order</h2>
<form method="post">
  <div class="form-group"><label>Customer</label><select name="customer_id" class="form-control" required><?php while($c=mysqli_fetch_assoc($customers)): ?><option value="<?= $c['id'] ?>" <?= $c['id']==$row['customer_id']?'selected':'' ?>><?= htmlspecialchars($c['name']) ?></option><?php endwhile; ?></select></div>
  <div class="form-group"><label>Order Date</label><input type="date" name="order_date" value="<?= $row['order_date'] ?>" class="form-control" required></div>
  <div class="form-group"><label>Total Amount</label><input type="number" step="0.01" name="total_amount" value="<?= $row['total_amount'] ?>" class="form-control" required></div>
  <button class="btn btn-primary">Update</button> <a class="btn btn-secondary" href="index.php">Back</a>
</form></div></body></html>