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
            <h4>Order Items List</h4>
        </div>

        <div class="card-body">
            <h4><a href="add.php" class="btn btn-success" >Add Order Item</a></h4>

            <table class="table table-bordered table-striped text-center">
                <thead class="bg-dark text-white">
                    <tr>
                        <th>ID</th>
                        <th>Order ID</th>
                        <th>Product</th>
                        <th>Qty</th>
                        <th>Price</th>
                        <th>Total</th>
                        <th colspan="2">Action</th>
                    </tr>
                </thead>

                <tbody>
                    <?php
                    $query = "SELECT oi.*, p.name AS product_name 
                              FROM order_items oi
                              INNER JOIN products p ON oi.product_id = p.id";

                    $result = mysqli_query($conn, $query);

                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                            $total = $row['qty'] * $row['price'];
                                 ?>
                                <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['order_id'] ?></td>
                                <td><?php echo $row['product_name'] ?></td>
                                <td><?php echo $row['qty'] ?></td>
                                <td><?php echo $row['price'] ?></td>
                                <td><?php echo $total ?></td>
                                <td><a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-info">Edit</a></td>
                                <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
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