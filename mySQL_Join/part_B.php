<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PART B</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4 bg-light">

    <div class="container">

        <h1 class="mb-4 text-center">PART B — Intermediate Joins</h1>

        <!-- ===================== B4 ===================== -->
        <h3>1. Orders with Customer Info + Total Items in Each Order</h3>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Order ID</th>
                    <th>Customer</th>
                    <th>Order Date</th>
                    <th>Total Items</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql4 = "SELECT 
                orders.id AS order_id,
                customers.name AS customer_name,
                orders.order_date,
                SUM(order_items.qty) AS total_items
            FROM orders
            INNER JOIN customers ON customers.id = orders.customer_id
            INNER JOIN order_items ON order_items.order_id = orders.id
            GROUP BY orders.id";

                $result4 = mysqli_query($conn, $sql4);

                while ($row = mysqli_fetch_assoc($result4)) { ?>
                    <tr>
                        <td><?= $row['order_id'] ?></td>
                        <td><?= htmlspecialchars($row['customer_name']) ?></td>
                        <td><?= $row['order_date'] ?></td>
                        <td><?= $row['total_items'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <hr class="my-5">

        <!-- ===================== B5 ===================== -->
        <h3>2. Each Customer’s Total Spent Amount</h3>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Customer</th>
                    <th>Total Spent</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql5 = "SELECT 
                customers.name AS customer_name,
                IFNULL(SUM(orders.total_amount), 0) AS total_spent
            FROM customers
            LEFT JOIN orders ON customers.id = orders.customer_id
            GROUP BY customers.id";

                $result5 = mysqli_query($conn, $sql5);

                while ($row = mysqli_fetch_assoc($result5)) { ?>
                    <tr>
                        <td><?= htmlspecialchars($row['customer_name']) ?></td>
                        <td>₹ <?= number_format($row['total_spent'], 2) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <hr class="my-5">

        <!-- ===================== B6 ===================== -->
        <h3>3. Customers Who Never Placed an Order</h3>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Customer</th>
                    <th>Email</th>
                    <th>City</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql6 = "SELECT 
                customers.name,
                customers.email,
                customers.city
            FROM customers
            LEFT JOIN orders ON customers.id = orders.customer_id
            WHERE orders.id IS NULL";

                $result6 = mysqli_query($conn, $sql6);

                while ($row = mysqli_fetch_assoc($result6)) { ?>
                    <tr>
                        <td><?= htmlspecialchars($row['name']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= htmlspecialchars($row['city']) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>