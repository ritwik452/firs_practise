<?php
include("../database/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<meta name="Description" content="Enter your description here"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<link rel="stylesheet" href="assets/css/styhle.css">
<title>View Page</title>
</head>
<?php include("../navbar/header.php"); ?>
<body>

<div class="container mt-4">

    <div class="card shadow">
        <div class="card-header bg-primary text-white text-center">
            <h4> View All List</h4>
        </div>

        <div class="card-body">
            <table class="table table-bordered table-striped text-center">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>Customer</th>
                        <th>Product</th>
                        <th>Category</th>
                        <th>Order Date</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Total</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $query = "SELECT 
                            customers.name AS customer, 
                            products.name AS product, 
                            categories.category_name AS category, 
                            orders.order_date, 
                            order_items.qty, 
                            order_items.price
                        FROM orders
                        LEFT JOIN customers ON customers.id = orders.customer_id
                        LEFT JOIN order_items ON orders.id = order_items.order_id
                        LEFT JOIN products ON order_items.product_id = products.id
                        LEFT JOIN categories ON products.category_id = categories.id";

                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                            $total = $row['qty'] * $row['price'];
                    ?>
                                <tr>
                                    <td><?php echo $row['customer']; ?></td>
                                    <td><?php echo $row['product']; ?></td>
                                    <td><?php echo $row['category']; ?></td>
                                    <td><?php echo $row['order_date']; ?></td>
                                    <td><?php echo $row['qty']; ?></td>
                                    <td><?php echo $row['price']; ?></td>
                                    <td><?php echo $total; ?></td>
                                </tr>
                    <?php
                        }
                    } else {
                        echo "<tr><td colspan='7'>No Data Found</td></tr>";
                    }
                    ?>
                </tbody>

            </table>

        </div>
    </div>

</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>
