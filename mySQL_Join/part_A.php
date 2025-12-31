<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>PART A</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4 bg-light">

<div class="container">

    <h1 class="mb-4 text-center">PART A — Basic Joins</h1>

    <!-- ===================== A1 ===================== -->
    <h3>1. List all customers with their orders</h3>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Customer</th>
                <th>Email</th>
                <th>Order ID</th>
                <th>Order Date</th>
                <th>Total Amount</th>
            </tr>
        </thead>

    <tbody>
    <?php
    $sql1 = "SELECT customers.name, customers.email, orders.id AS order_id,
                    orders.order_date, orders.total_amount
             FROM customers
             LEFT JOIN orders ON customers.id = orders.customer_id";

    $result1 = mysqli_query($conn, $sql1);

    while ($row = mysqli_fetch_assoc($result1)) { ?>
        <tr>
            <td><?= htmlspecialchars($row['name']) ?></td>
            <td><?= htmlspecialchars($row['email']) ?></td>
            <td><?= $row['order_id'] ?></td>
            <td><?= $row['order_date'] ?></td>
            <td><?= $row['total_amount'] ?></td>
        </tr>
    <?php } ?>
    </tbody>
    </table>

    <hr class="my-5">

    <!-- ===================== A2 ===================== -->
    <h3>2. Show product details of each order</h3>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Order ID</th>
                <th>Product</th>
                <th>Qty</th>
                <th>Price</th>
                <th>Subtotal</th>
            </tr>
        </thead>

    <tbody>
    <?php
    $sql2 = "SELECT orders.id AS order_id, products.name AS product_name,
                    order_items.qty, order_items.price,
                    (order_items.qty * order_items.price) AS subtotal
             FROM orders
             INNER JOIN order_items ON orders.id = order_items.order_id
             INNER JOIN products ON order_items.product_id = products.id";

    $result2 = mysqli_query($conn, $sql2);

    while ($row = mysqli_fetch_assoc($result2)) { ?>
        <tr>
            <td><?= $row['order_id'] ?></td>
            <td><?= htmlspecialchars($row['product_name']) ?></td>
            <td><?= $row['qty'] ?></td>
            <td><?= $row['price'] ?></td>
            <td><?= $row['subtotal'] ?></td>
        </tr>
    <?php } ?>
    </tbody>
    </table>

    <hr class="my-5">

    <!-- ===================== A3 ===================== -->
    <h3>3. Show all products with their category name</h3>

    <table class="table table-bordered table-striped">
        <thead class="table-dark">
            <tr>
                <th>Product</th>
                <th>Category</th>
            </tr>
        </thead>

    <tbody>
    <?php
    $sql3 = "SELECT products.name AS product_name, categories.category_name
             FROM products
             INNER JOIN categories ON products.category_id = categories.id";

    $result3 = mysqli_query($conn, $sql3);

    while ($row = mysqli_fetch_assoc($result3)) { ?>
        <tr>
            <td><?= htmlspecialchars($row['product_name']) ?></td>
            <td><?= htmlspecialchars($row['category_name']) ?></td>
        </tr>
    <?php } ?>
    </tbody>
    </table>

</div>

<!-- Bootstrap JS bundle (includes Popper) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
