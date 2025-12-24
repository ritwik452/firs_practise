<!-- header.php -->
<?php
// session start korte paro jodi login system thake
// session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>My CRUD Website</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="#">CRUD System</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="../reports/index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../customers/view.php">Customers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../order/view.php">Orders</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../orders_item/view.php">Orders Item</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../product/view.php">Products</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../categories/view.php">Categories</a>
        </li>
      </ul>
    </div>
  </nav>

  <div class="container mt-4">
