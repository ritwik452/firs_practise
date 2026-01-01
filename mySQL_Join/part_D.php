<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PART D</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4 bg-light">

    <div class="container">

        <h1 class="mb-4 text-center">PART D — Complex Nested JOIN Query</h1>

        <h3>1. Each Customer’s Latest Order with Total Bill</h3>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Customer</th>
                    <th>Email</th>
                    <th>Latest Order ID</th>
                    <th>Order Date</th>
                    <th>Total Bill</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql10 = "
        SELECT 
            c.name AS customer_name,
            c.email,
            o.id AS latest_order_id,
            o.order_date,
            o.total_amount
        FROM customers c
        LEFT JOIN orders o
            ON o.customer_id = c.id
            AND o.order_date = (
                SELECT MAX(order_date)
                FROM orders
                WHERE customer_id = c.id
            )
        ORDER BY c.id
    ";

                $result10 = mysqli_query($conn, $sql10);

                while ($row = mysqli_fetch_assoc($result10)) { ?>
                    <tr>
                        <td><?= htmlspecialchars($row['customer_name']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td><?= $row['latest_order_id'] ?></td>
                        <td><?= $row['order_date'] ?></td>
                        <td><?= $row['total_amount'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>