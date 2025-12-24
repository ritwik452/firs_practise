<?php include("database/connection.php"); ?>
<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>CRUD Dashboard</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
  <h1>E-commerce CRUD</h1>
  <ul>
    <li><a href="customers/index.php">Customers</a></li>
    <li><a href="categories/index.php">Categories</a></li>
    <li><a href="products/index.php">Products</a></li>
    <li><a href="orders/index.php">Orders</a></li>
    <li><a href="order_items/index.php">Order Items</a></li>
    <li><a href="views/join_view.php">Join View (All)</a></li>
  </ul>
</div>
</body>
</html>