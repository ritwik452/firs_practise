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
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-center text-white">
                    <h4>Order List</h4>
                </div>
                <div class="card-body">
                 <h6><a href="add.php" class="btn btn-success">Add Order</a></h6>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Customer Name</th>
                        <th>Order Date</th>
                        <th>Total Amount</th>
                        <th colspan="2">Action</th>
                    </tr>

                </thead>
                <tbody>
                    <?php
                       $query="SELECT 
                                    orders.id,
                                    customers.name AS customer_name,
                                    orders.order_date,
                                    orders.total_amount
                                  FROM orders
                                  INNER JOIN customers 
                                  ON orders.customer_id = customers.id";
                       $result=mysqli_query($conn,$query);
                       if (mysqli_num_rows($result)>0) {
                          while ($row=mysqli_fetch_assoc($result)) {
                            ?>
                               <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['customer_name'] ?></td>
                                <td><?php echo $row['order_date'] ?></td>
                                <td><?php echo $row['total_amount'] ?></td>
                                <td><a href="edit.php?id=<?php echo $row['id'];?>" class="btn btn-info">Edit</a></td>
                                <td><a href="delete.php?id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
                               </tr>
                            <?php
                          }
                       }
                    ?>

                </tbody>
            </table>
        </div>
        </div>
    </div>
    </div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>