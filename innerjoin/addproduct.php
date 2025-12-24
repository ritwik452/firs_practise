<?php
include("database/connection.php");

if(isset($_POST['add'])){
    $c_name = $_POST['c_name'];

    $sql = "INSERT INTO category (c_name) VALUES ('$c_name')";
    mysqli_query($conn, $sql);

    echo "<script>alert('Category Added!'); window.location='category_add.php';</script>";
}
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
<title>Product Page</title>
</head>
<body>

<div class="container mt-4">
    <div class="col-md-5">
        <div class="card">
            <div class="card-header">
                <h1>Product Add Page</h1>
            </div>

            <div class="card-body">
                <form action="" method="post">

                    <div class="form-group">
                        <label>Product Name</label>
                        <input type="text" name="p_name" class="form-control" placeholder="Enter product name">
                    </div><br>

                    <div class="form-group">
                        <label>User Name</label>
                        <select name="user_id" class="form-control">
                            <option>Select User</option>
                            <?php
                            $user = mysqli_query($conn, "SELECT * FROM user");
                            while($row= mysqli_fetch_assoc($user)){
                                echo "<option value='{$row['id']}'>{$row['u_name']}</option>";
                            }
                            ?>
                        </select>
                    </div><br>

                    <div class="form-group">
                        <label>Category Name</label>
                        <select name="cat_id" class="form-control">
                            <option>Select Category</option>
                            <?php
                            $category= mysqli_query($conn, "SELECT * FROM category");
                            while($row = mysqli_fetch_assoc($category)){
                                echo "<option value='{$row['id']}'>{$row['c_name']}</option>";
                            }
                            ?>
                        </select>
                    </div><br>

                    <button class="btn btn-success" type="submit" name="addproduct">Add Product</button>

                </form>


                <?php
                        include("database/connection.php");

                        if(isset($_POST['addproduct'])){
                            $p_name = $_POST['p_name'];
                            $u_id = $_POST['u_id'];
                            $c_id = $_POST['c_id'];

                            $query= "INSERT INTO product (p_name, u_id, c_id) VALUES ('$p_name', '$u_id', '$c_id')";
                            $result=mysqli_query($conn, $query);

                             if ($result) {
                               echo "<script>alert('Product Added!'); window.location='view.php';</script>";

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