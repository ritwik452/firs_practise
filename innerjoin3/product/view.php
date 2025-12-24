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
<title>Product View Page</title>
</head>
<?php   include("../navbar/header.php");?>
<body>
    
    <div class="container mt-4">
        
        <div class="col-md-6">
            <div class="card shadow">
               <div class="card-header bg-primary text-white text-center">
                   <h4>Prodact View</h4>
               </div>
               <div class="card-body">
                <h4><a href="add.php"class="btn btn-success">Add</a></h4>
                <table class="table table-striped table-bordered ">
                    <thead class="table-dark">
                         <tr>
                            <th>ID</th>
                            <th>Product Name</th>
                            <th>User Name</th>
                            <th>Category Name</th>
                            <th>Brand Name</th>
                         </tr>
                    </thead>
                    <tbody>
                          <?php
                            $query="SELECT product.p_id,
                                          product.p_name,
                                          user.u_name,
                                          category.c_name,
                                          brand.b_name
                                          FROM product
                                          INNER JOIN user ON product.u_id=user.u_id
                                          INNER JOIN category ON product.c_id=category.c_id
                                          INNER JOIN brand ON product.p_id=brand.b_id";
                            $result=mysqli_query($conn,$query);
                            if (mysqli_num_rows($result)>0) {
                                while($row=mysqli_fetch_assoc($result)){
                                    ?>
                                        <tr>
                                            <td><?php echo $row['p_id'] ?></td>
                                            <td><?php echo $row['p_name'] ?></td>
                                            <td><?php echo $row['u_name'] ?></td>
                                            <td><?php echo $row['c_name'] ?></td>
                                            <td><?php echo $row['b_name'] ?></td>
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
