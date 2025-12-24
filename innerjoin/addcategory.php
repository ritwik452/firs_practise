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
<title>Category Page</title>
</head>
<body>
<div class="container mt-4">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h1>User Category Page</h1>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="">Category Name</label>
                            <input type="text" name="c_name" class="form-control" Placeholder="enter category name">
                        </div>
                        <button class="btn btn-success" type="submit" name="addcategory">Add Category</button>
                    </form>
                    <?php
                        include("database/connection.php");

                        if(isset($_POST['addcategory'])){
                            $c_name = $_POST['c_name'];

                            $query = "INSERT INTO category (c_name) VALUES ('$c_name')";
                            $result=mysqli_query($conn, $query);
                             if ($result) {
                                 echo "<script>alert('Category Added!'); window.location='addproduct.php';</script>";
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