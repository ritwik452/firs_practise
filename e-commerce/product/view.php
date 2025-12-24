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
<title>View Page</title>
</head>
<?php include("../navbar/header.php"); ?>

<body>
    <div class="container mt-4">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header bg-primary text-center text-white">
                    <h4>Product List</h4>
                </div>
                <div class="card-body">
                 <h6><a href="add.php" class="btn btn-success">Add Product</a></h6>
            <table class="table table-striped table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>Id</th>
                        <th>Product Name</th>
                        <th>Category Name</th>
                        <th colspan="2">Action</th>
                    </tr>

                </thead>
                <tbody>
                    <?php
                       $query="SELECT products.id, products.name, categories.category_name 
                                FROM products
                                INNER JOIN categories ON products.category_id = categories.id";
    
                       $result=mysqli_query($conn,$query);
                       if (mysqli_num_rows($result)>0) {
                          while ($row=mysqli_fetch_assoc($result)) {
                            ?>
                               <tr>
                                <td><?php echo $row['id'] ?></td>
                                <td><?php echo $row['name'] ?></td>
                                <td><?php echo $row['category_name'] ?></td>
                                
                                <td><a href="edit.php?b_id=<?php echo $row['id'];?>" class="btn btn-info">Edit</a></td>
                                <td><a href="delete.php?b_id=<?php echo $row['id']; ?>" class="btn btn-danger">Delete</a></td>
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