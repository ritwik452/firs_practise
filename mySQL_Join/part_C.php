<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>PART C</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4 bg-light">

    <div class="container">

        <h1 class="mb-4 text-center">PART C — Advanced Joins & Subqueries</h1>


        <!-- ===================== C7 ===================== -->
        <h3>1. Best-Selling Product (Highest Quantity Sold)</h3>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Product</th>
                    <th>Total Quantity Sold</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql7 = "SELECT 
                products.name AS product_name,
                SUM(order_items.qty) AS total_qty_sold
            FROM products
            INNER JOIN order_items ON products.id = order_items.product_id
            GROUP BY products.id
            ORDER BY total_qty_sold DESC
            LIMIT 1";

                $result7 = mysqli_query($conn, $sql7);

                while ($row = mysqli_fetch_assoc($result7)) { ?>
                    <tr>
                        <td><?= htmlspecialchars($row['product_name']) ?></td>
                        <td><?= $row['total_qty_sold'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <hr class="my-5">

        <!-- ===================== C8 ===================== -->
        <h3>2. Customer with Highest Total Spending</h3>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Customer</th>
                    <th>Total Spent</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql8 = "SELECT 
                customers.name AS customer_name,
                SUM(orders.total_amount) AS total_spent
            FROM customers
            INNER JOIN orders ON customers.id = orders.customer_id
            GROUP BY customers.id
            ORDER BY total_spent DESC
            LIMIT 1";

                $result8 = mysqli_query($conn, $sql8);

                while ($row = mysqli_fetch_assoc($result8)) { ?>
                    <tr>
                        <td><?= htmlspecialchars($row['customer_name']) ?></td>
                        <td>₹ <?= number_format($row['total_spent'], 2) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

        <hr class="my-5">

        <!-- ===================== C9 ===================== -->
        <h3>3. Total Sales Amount Per Category</h3>

        <table class="table table-bordered table-striped">
            <thead class="table-dark">
                <tr>
                    <th>Category</th>
                    <th>Total Sales</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $sql9 = "SELECT 
                categories.category_name,
                SUM(order_items.qty * order_items.price) AS total_sales
            FROM categories
            INNER JOIN products ON categories.id = products.category_id
            INNER JOIN order_items ON products.id = order_items.product_id
            GROUP BY categories.id";

                $result9 = mysqli_query($conn, $sql9);

                while ($row = mysqli_fetch_assoc($result9)) { ?>
                    <tr>
                        <td><?= htmlspecialchars($row['category_name']) ?></td>
                        <td>₹ <?= number_format($row['total_sales'], 2) ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>