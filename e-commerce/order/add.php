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
<link rel="stylesheet" href="assets/css/style.css">
<title>Order</title>
</head>
<?php include("../navbar/header.php"); ?>
<body>
    <div class="container mt-4">
    <div class="col-md-6 m-auto">
        <div class="card shadow">
            <div class="card-header bg-primary text-white text-center">
                <h4>Add Order</h4>
            </div>

            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for=""><b>Customer</b></label>
                        <select name="customer_id" class="form-control">
                            <option value="">Select</option>
                            <?php
                            $query="SELECT * FROM customers";
                            $result=mysqli_query($conn,$query);
                            if (mysqli_num_rows($result)>0) {
                                while ($row=mysqli_fetch_assoc($result)) {
                                    echo "<option value='{$row['id']}'>{$row['name']}</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for=""><b>Order Date</b></label>
                        <input type="date" name="order_date" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for=""><b>Total Amount</b></label>
                        <input type="number" step="0.01" name="total_amount" class="form-control">
                    </div> 
                    <button type="submit" class="btn btn-success" name="save">Save</button>
                </form>
                 <?php
                   if (isset($_POST['save'])) {
                    $customer_id=$_POST['customer_id'];
                    $order_date=$_POST['order_date'];
                    $total_amount=$_POST['total_amount'];
                    $query="INSERT INTO orders (customer_id,order_date,total_amount) VALUES ('$customer_id','$order_date','$total_amount')";
                    $result=mysqli_query($conn,$query);
                    if ($result) {
                        echo "<script> alert('data insert successfully'); window.location='view.php'; </script>";
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