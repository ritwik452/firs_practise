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
    <div class="col-md-6 m-auto">
        <div class="card shadow">

            <div class="card-header bg-primary text-white text-center">
                <h4>Add Order Item</h4>
            </div>

            <div class="card-body">

                <form action="" method="post">

                
                    <div class="form-group">
                        <label><b>Order</b></label>
                        <select name="order_id" class="form-control" required>
                            <option value="">Select Order</option>
                            <?php 
                            $query="SELECT * FROM orders";
                            $result=mysqli_query($conn,$query);
                            while ($row=mysqli_fetch_assoc($result)) {
                                echo "<option value='{$row['id']}'>{$row['id']}</option>";
                            }
                            ?>
                        </select>
                    </div>

                    
                    <div class="form-group">
                        <label><b>Product</b></label>
                        <select name="product_id" class="form-control" required>
                            <option value="">Select Product</option>
                            <?php 
                            $query="SELECT * FROM products";
                            $result=mysqli_query($conn,$query);
                            while ($row=mysqli_fetch_assoc($result)) {
                                echo "<option value='{$row['id']}'>{$row['name']}</option>";
                            }
                            ?>
                        </select>
                    </div>

                
                    <div class="form-group">
                        <label><b>Quantity</b></label>
                        <input type="number" name="qty" class="form-control" required>
                    </div>

                    
                    <div class="form-group">
                        <label><b>Price</b></label>
                        <input type="number" step="0.01" name="price" class="form-control" required>
                    </div>

                    <button class="btn btn-success" type="submit" name="save">Save</button>

                </form>
                <?php
                  if (isset($_POST['save'])) {
                    $order_id = $_POST['order_id'];
                    $product_id = $_POST['product_id'];
                    $qty = $_POST['qty'];
                    $price = $_POST['price'];

                    $query = "INSERT INTO order_items(order_id, product_id, qty, price)
                            VALUES('$order_id', '$product_id', '$qty', '$price')";
                    $result=mysqli_query($conn, $query);
                    if ($result) {
                        echo "<script>alert('insert successfully'); window.location='view.php';</script>";
                    }
                    
                    }

                   ?>

            </div>
        </div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>