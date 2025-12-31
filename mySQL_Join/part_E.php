<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PART E</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4 bg-light">

    <div class="container">

        <h1 class="mb-4 text-center">PART E — Bonus Query</h1>

        <h3>1. Top 3 Customers by Revenue Generated</h3>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Rank</th>
                    <th>Customer</th>
                    <th>Email</th>
                    <th>Total Revenue</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql11 = "
        SELECT 
            customers.name AS customer_name,
            customers.email,
            SUM(orders.total_amount) AS total_spent
        FROM customers
        INNER JOIN orders ON customers.id = orders.customer_id
        GROUP BY customers.id
        ORDER BY total_spent DESC
        LIMIT 3
    ";

                $result11 = mysqli_query($conn, $sql11);

                $rank = 1;
                while ($row = mysqli_fetch_assoc($result11)) { ?>
                    <tr>
                        <td><?= $rank++ ?></td>
                        <td><?= htmlspecialchars($row['customer_name']) ?></td>
                        <td><?= htmlspecialchars($row['email']) ?></td>
                        <td>₹ <?= number_format($row['total_spent'], 2) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>