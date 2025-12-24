<?php include("../database/connection.php"); ?>

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
<title>Category</title>
</head>
<?php include("../navbar/header.php"); ?>
<body>

      <div class="container mt-4">
        <div class="col-md-6">
            <div class="card shadow">
            <div class="card-header bg-primary text-white text-center">
                <h1>Category</h1>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="form-group">
                        <label for=""><b>Category Name</b></label>
                        <input type="text" name="category_name" placeholder="Enter Category name" class="form-control">
                    </div>
                    

                    <button class="btn btn-success" type="submit" name="save">Save</button>
                </form>
                   <?php
                        if(isset($_POST['save'])){
                            $category_name = $_POST['category_name'];
                            $query = "INSERT INTO categories (category_name) VALUES ('$category_name')";
                            $result=mysqli_query($conn, $query);
                            if ($result) {
                                echo "<script> alert('insert successfully'); window.location='view.php'; </script>";
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