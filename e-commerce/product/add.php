<?php
include("../database/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
<title>Product Page</title>
</head>
<body>
    <?php include("../navbar/header.php"); ?>

<div class="container mt-4">
    <div class="col-md-6 m-auto">
        <div class="card shadow">
            <div class="card-header bg-primary text-white text-center">
                <h4>Add Product</h4>
            </div>

            <div class="card-body">
                <form action="" method="post">

                    <div class="form-group">
                        <label><b>Product Name</b></label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Product Name" required>
                    </div>

                    <div class="form-group">
                        <label><b>Select Category</b></label>
                        <select name="category_id" class="form-control" required>
                            <option value="">Select</option>
                            <?php
                            $query = "SELECT * FROM categories";
                            $result = mysqli_query($conn, $query);
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "<option value='{$row['id']}'>{$row['category_name']}</option>";
                                }
                            }
                            ?>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-success" name="add">Submit</button>

                </form>

                <?php
                if (isset($_POST['add'])) {
                    $name = $_POST['name'];
                    $category_id = $_POST['category_id'];

                    $query = "INSERT INTO products (name, category_id) VALUES ('$name', '$category_id')";
                    $result = mysqli_query($conn, $query);

                    if ($result) {
                        echo "<script>alert('Insert successfully'); window.location='view.php';</script>";
                    }
                }
                ?>

            </div>
        </div>
    </div>
</div>

</body>
</html>
